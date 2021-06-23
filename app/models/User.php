<?php
class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // register a user
    public function register($data)
    {
        $this->db->query('INSERT INTO users (email, username, password) VALUES(:email, :username, :password)');

        // Binding values
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':password', $data['password']);
        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Find user by email
    public function findUserByEmail($email)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        // check row
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    // Find user by Username
    public function findUserByUsername($username)
    {
        $this->db->query('SELECT * FROM users WHERE username = :username');
        $this->db->bind(':username', $username);

        $row = $this->db->single();

        // check row
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    // Find user by ID
    public function findById($id)
    {
        $this->db->query('SELECT * FROM users WHERE id = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function login($email, $password)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        $hashed_password = $row->password;

        if (password_verify($password, $hashed_password)) {
            return $row;
        } else {
            return false;
        }

    }

    public function updateUserInfo($data)
    {
        $this->db->query('UPDATE `users` SET `fullname` = :fullname, `phone` = :phone WHERE id = :id');
        // Binding values
        $this->db->bind(':fullname', $data['fullName']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':id', $data['userId']);

        try {
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }

        } catch (Exception $e) {
            return false;
        }

    }
}
