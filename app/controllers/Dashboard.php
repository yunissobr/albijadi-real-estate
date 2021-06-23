<?php
class Dashboard extends Controller
{

    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }
        $this->propertyModel = $this->model('Property');
        $this->messageModel = $this->model('Message');
        $this->configModel = $this->model('Config');
    }

    public function index($page = '')
    {
        $data = [
            'messagesCount' => sizeOf($this->messageModel->getAll()),
            'pendingCount' => sizeOf($this->propertyModel->getByStatus(PropertyStatus::pending)),
            'activeCount' => sizeOf($this->propertyModel->getByStatus(PropertyStatus::active)),
            'declinedCount' => sizeOf($this->propertyModel->getByStatus(PropertyStatus::declined)),
        ];
        if ($page == '') {
            $data['properties'] = $this->propertyModel->getAll();
            $data['title'] = 'All Properties';
        }else {
            switch($page){
                case 'active': $data['properties'] = $this->propertyModel->getByStatus(PropertyStatus::active); $data['title'] = 'Active Properties'; break;
                case 'pending': $data['properties'] = $this->propertyModel->getByStatus(PropertyStatus::pending); $data['title'] = 'Pending Properties'; break;
                case 'declined': $data['properties'] = $this->propertyModel->getByStatus(PropertyStatus::declined); $data['title'] = 'Declined Properties'; break;
                case 'messages': $data['messages'] = $this->messageModel->getAll(); $data['title'] = 'All Messages'; break;
                case 'config': $data['config'] = $this->configModel->get();; $data['title'] = 'Site Config'; break;
                default: $data['properties'] = $this->propertyModel->getAll(); $data['title'] = 'All Properties';
            }
        }

        if(isset($_POST['update_config'])){
            $data = [
                'website_title' => $_POST['title'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'facebook' => $_POST['facebook'],
                'twitter' => $_POST['twitter'],
                'instagram' => $_POST['instagram'],
                'address' => $_POST['address'],
                'about' => $_POST['about'],
            ];

            if($this->configModel->update($data)){
                flash('alert','Successfully updated!');
                redirect('dashboard/config');
            }else {
                flash('alert','unexpected error occured','alert alert-danger!');
                redirect('dashboard/config');
            }
        }
        $this->view('users/dashboard', $data);
    }

    public function active()
    {
        $this->index('active');
    }
    public function pending()
    {
        $this->index('pending');
    }
    public function declined()
    {
        $this->index('declined');
    }

    public function messages()
    {
        $this->index('messages');
    }


    


}
