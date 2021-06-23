<?php
class Config
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function update($data)
    {
        $this->db->query('UPDATE `app_config` SET `website_title` = :website_title, `email` = :email, `phone` = :phone, `facebook` = :facebook,
            `twitter` = :twitter, `instagram` = :instagram, `address` = :address, `about` = :about');
        $this->db->bind(':website_title', $data['website_title']);
        $this->db->bind(':facebook', $data['facebook']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':twitter', $data['twitter']);
        $this->db->bind(':instagram', $data['instagram']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':about', $data['about']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function get()
    {
        $this->db->query('SELECT * FROM `app_config`');
        return $this->db->single();
    }

}
