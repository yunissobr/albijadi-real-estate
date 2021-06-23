<?php
class Property
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function add($data)
    {
        $this->db->query('INSERT INTO `properties`(
         `id`,
         `title`,
         `age`,
         `price`,
         `original_price`,
         `size`,
         `type`,
         `category`,
         `toBeUsedFor`,
         `city`,
         `district`,
         `neighborhood_name`,
         `street_name`,
         `building_no`,
         `direction`,
         `nbr_of_street`,
         `lat`,
         `lng`,
         `brochure`,
         `description`,
         `full_name`,
         `email`,
         `phone`
         ) VALUES (
             :id,
             :title,
             :age,
             :price,
             :original_price,
             :size,
             :type,
             :category,
             :toBeUsedFor,
             :city,
             :district,
             :neighborhood_name,
             :street_name,
             :building_no,
             :direction,
             :nbr_of_street,
             :lat,
             :lng,
             :brochure,
             :description,
             :full_name,
             :email,
             :phone
         )');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':age', $data['age']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':original_price', $data['original_price']);
        $this->db->bind(':size', $data['size']);
        $this->db->bind(':type', $data['type']);
        $this->db->bind(':category', $data['category']);
        $this->db->bind(':toBeUsedFor', $data['toBeUsedFor']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':district', $data['district']);
        $this->db->bind(':neighborhood_name', $data['neighborhood_name']);
        $this->db->bind(':street_name', $data['street_name']);
        $this->db->bind(':building_no', $data['building_no']);
        $this->db->bind(':direction', $data['direction']);
        $this->db->bind(':nbr_of_street', $data['nbr_of_street']);
        $this->db->bind(':lat', $data['lat']);
        $this->db->bind(':lng', $data['lng']);
        $this->db->bind(':brochure', $data['brochure']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':full_name', $data['full_name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phone', $data['phone']);

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
        $this->db->query('SELECT * FROM `properties` WHERE `status` = :status ORDER BY `createdAt` DESC');
        $this->db->bind(':status', PropertyStatus::active);
        return $this->db->resultSet();
    }
    public function getKall()
    {
        $this->db->query('SELECT * FROM `properties` ORDER BY `createdAt` DESC');
        return $this->db->resultSet();
    }
    public function getRandom()
    {
        $this->db->query('SELECT * FROM `properties` WHERE `status` = :status ORDER BY RAND() LIMIT 6');
        $this->db->bind(':status', PropertyStatus::active);
        return $this->db->resultSet();
    }

    public function getByStatus($status)
    {
        $this->db->query('SELECT * FROM `properties` WHERE `status` = :status  ORDER BY `createdAt` DESC');
        $this->db->bind(':status', $status);
        return $this->db->resultSet();
    }
    public function getById($propertyId)
    {
        $this->db->query('SELECT * FROM `properties` WHERE `id` = :id');
        $this->db->bind(':id', $propertyId);
        return $this->db->single();
    }
    public function getPopular()
    {
        $this->db->query('SELECT * FROM `properties` ORDER BY `views` DESC');
        return $this->db->resultSet();
    }
    public function search($data)
    {
        // die(var_dump($data));
        $this->db->query("SELECT * FROM `properties` WHERE `type` = :type AND `category` = :category AND( `title` LIKE :keyword OR `description` LIKE :keyword )AND status = :status  ORDER BY `createdAt` DESC LIMIT :from ,6 ");
        $this->db->bind(':type', $data['type']);
        $this->db->bind(':category', $data['category']);
        $this->db->bind(':keyword', '%' . $data['keyword'] . '%');
        $this->db->bind(':status', PropertyStatus::active);
        $this->db->bind(':from', $data['from']);
        return $this->db->resultSet();
    }
    public function getImages($propertyId)
    {
        $this->db->query('SELECT * FROM `images` WHERE `property_id` = :property_id');
        $this->db->bind(':property_id', $propertyId);
        return $this->db->resultSet();
    }

    public function updateStatus($data)
    {

        $this->db->query('UPDATE `properties` SET `status` = :status WHERE `idx` = :property_id ');
        $this->db->bind(':status', $data['status']);
        $this->db->bind(':property_id', $data['property_id']);
        return $this->db->execute();
    }
}