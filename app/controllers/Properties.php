<?php
class Properties extends Controller
{

    public function __construct()
    {
        $this->propertyModel = $this->model('Property');
        $this->messageModel = $this->model('Message');
    }

    public function index()
    {
        $data = [
            'page' => 'home',
            'popular' => $this->propertyModel->getPopular(),
            'featured' => $this->propertyModel->getRandom(),
        ];
        $this->view('pages/index', $data);
    }
    public function search()
    {
        $data = [
            'page' => 'search',
            'keyword' => isset($_POST['keyword']) ? $_POST['keyword'] : '',
            'type' => isset($_POST['type']) ? $_POST['type'] : '',
            'category' => isset($_POST['category']) ? $_POST['category'] : '',
            'from' => isset($_POST['from']) ? intval($_POST['from']) : 0,
        ];
        $data['properties'] = $this->propertyModel->search($data);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'page' => 'search',
                'keyword' => isset($_POST['keyword']) ? $_POST['keyword'] : '',
                'type' => isset($_POST['type']) ? $_POST['type'] : '',
                'category' => isset($_POST['category']) ? $_POST['category'] : '',
                'from' => isset($_POST['from']) ? intval($_POST['from']) : 0,
            ];
            $data['properties'] = $this->propertyModel->search($data);
        }
        $this->view('properties/search', $data);
    }




    function newProperty()
    {
        $data = [
            'page' => 'new_property',
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if (isset($_POST['add'])) {

                $data['title'] = $_POST['title'];
                $data['age'] = $_POST['age'];
                $data['price'] = $_POST['price'];
                $data['original_price'] = $_POST['original_price'];
                $data['size'] = $_POST['size'];
                $data['type'] = $_POST['type'];
                $data['category'] = $_POST['category'];
                $data['toBeUsedFor'] = $_POST['toBeUsedFor'];
                $data['city'] = $_POST['city'];
                $data['district'] = $_POST['district'];
                $data['neighborhood_name'] = isset($_POST['neighborhood_name']) ? $_POST['neighborhood_name'] : '-';
                $data['street_name'] = $_POST['street_name'];
                $data['building_no'] = isset($_POST['building_no']) ? $_POST['building_no'] : '-';
                $data['direction'] = $_POST['direction'];
                $data['nbr_of_street'] = $_POST['nbr_of_street'];
                $data['lat'] = $_POST['lat'];
                $data['lng'] = $_POST['lng'];
                $data['images'] = $_FILES['images'];
                $data['brochure'] = $_FILES['brochure']['name'];
                $data['description'] = $_POST['description'];
                $data['full_name'] = $_POST['full_name'];
                $data['email'] = $_POST['email'];
                $data['phone'] = $_POST['phone'];


                // die(var_dump($_FILES));
                #All is done go ahead insert the row
                $property_id = $this->generateRandomString(4);
                # upload images
                $targetDir = ROOT . '/public/img/properties//';
                $allowTypes = array('jpg', 'png', 'jpeg');
                $num_err = 0;
                foreach ($_FILES['images']['name'] as $key => $val) {
                    // File upload path

                    $newfilename = $this->generateRandomString(4) . '_' . str_replace(" ", "", basename($_FILES["images"]["name"][$key]));

                    $targetFilePath = $targetDir . $newfilename;

                    // Check whether file type is valid
                    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                    if (in_array($fileType, $allowTypes)) {
                        // Upload file to server
                        if (move_uploaded_file($_FILES["images"]["tmp_name"][$key], $targetFilePath)) {
                            // Image db insert sql
                            if (!$this->propertyModel->addImage($newfilename, $property_id)) {
                                $num_err++;
                            }
                        } else {
                            $num_err++;
                        }
                    } else {
                        $num_err++;
                    }
                }

                // uploading brochure
                $targetDir = ROOT . '/public/files/brochures//';
                $allowTypes = array('pdf', 'jpg', 'png', 'jpeg');
                $newfilename = $this->generateRandomString(4) . '_' . str_replace(" ", "", basename($_FILES["brochure"]["name"]));
                $targetFilePath = $targetDir . $newfilename;
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                if (in_array($fileType, $allowTypes)) {
                    // Upload file to server
                    if (move_uploaded_file($_FILES["brochure"]["tmp_name"], $targetFilePath)) {
                        $data['brochure'] = $newfilename;
                    } else {
                        $num_err++;
                    }
                } else {
                    $num_err++;
                }


                if ($num_err == 0) {
                    $data['id'] = $property_id;
                    if (!$this->propertyModel->add($data)) {
                        $num_err++;
                    }
                }
                if ($num_err == 0) {
                    redirect('properties/newProperty&success=1');
                } else {
                    redirect('properties/newProperty&success=0');
                }
            }
        }

        $this->view('properties/new', $data);
    }

    function update($property_id)
    {

        if (isset($_GET['action'])) {
            $data = [
                'status' =>  $_GET['action'],
                'property_id' => $property_id
            ];


            if ($this->propertyModel->updateStatus($data)) {
                flash('property', 'Property has been updated');
                redirect('dashboard/');
            } else {
                flash('property', 'Unexpected error occured!', 'alert alert-danger');
                redirect('dashboard/');
            }
        }
    }

    function property($property_id)
    {
        $data = [
            'page' => 'single_property',
            'property' => $this->propertyModel->getById($property_id),
            'property-images' => $this->propertyModel->getImages($property_id),
        ];
        $_COOKIE['showNotif'] = false;
        flash('property', 'property!');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if (isset($_POST['send'])) {
                $data['name'] = $_POST['name'];
                $data['phone'] = $_POST['phone'];
                $data['email'] = $_POST['email'];
                $data['subject'] = $_POST['subject'];
                $data['property_id'] = $_POST['property_id'];
                $data['message'] = $_POST['message'];

                if ($this->messageModel->add($data)) {
                    flash('message_sent', 'Thank you for your message, talk to you soon!');
                    redirect('properties/property/' . $property_id . '#mapid');
                } else {
                    flash('message_sent', 'Unexpected error occured!, Please try again later');
                    redirect('properties/property/' . $property_id . '#mapid');
                }
            }
        }
        $this->view('properties/property_details', $data);
    }

    public function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}