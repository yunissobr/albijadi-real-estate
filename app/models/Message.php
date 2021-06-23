<?php
class Message
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function add($data)
    {
        $this->db->query('INSERT INTO `messages`( `name`, `email`, `phone`, `subject`, `property_id`, `message`) 
        VALUES (:name, :email, :phone, :subject, :property_id, :message)'); 
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':subject', $data['subject']);
        $this->db->bind(':property_id', $data['property_id']);
        $this->db->bind(':message', $data['message']);
        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function addImage($imageName, $propertyId)
    {
        $this->db->query('INSERT INTO `images`(`image`, `property_id`) VALUES (:image, :propertyId)');
        $this->db->bind(':image', $imageName);
        $this->db->bind(':propertyId', $propertyId);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function getAll()
    {
        $this->db->query('SELECT * FROM `messages` ORDER BY `createdAt` DESC');
        return $this->db->resultSet();
    }

}
