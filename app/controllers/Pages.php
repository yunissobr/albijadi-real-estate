<?php
class Pages extends Controller
{
    public function __construct()
    {

      $this->messageModel = $this->model('Message');
    }

    public function index()
    {
        redirect('properties/');
    }

    public function about()
    {
        $data = [
            'title' => 'About Us',
            'page' => 'about_us'
        ];

        $this->view('pages/about', $data);
    }
    public function services()
    {
        $data = [
            'title' => 'Services',
            'page' => 'services'
        ];

        $this->view('pages/services', $data);
    }
    public function Contact()
    {
        $data = [
            'title' => 'About Us',
            'page' => 'contact',
        ];

        if (isset($_POST['send'])) {
            $data['name'] = $_POST['name'];
            $data['phone'] = '';
            $data['email'] = $_POST['email'];
            $data['subject'] = $_POST['subject'];
            $data['property_id'] = '';
            $data['message'] = $_POST['message'];

            if ($this->messageModel->add($data)) {
                flash('message_sent', 'Thank you for your message, talk to you soon!');
                redirect('pages/contact/#message_sent');
            } else {
                flash('message_sent', 'Unexpected error occured!, Please try again later');
                redirect('pages/contact/#message_sent');
            }
        }

        $this->view('pages/contact', $data);
    }
}
