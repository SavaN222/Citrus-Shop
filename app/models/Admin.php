<?php

use App\libraries\Database; 
use App\helpers\Validation;

class Admin
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Admin Login 
     */
    public function adminLogin()
    {
        $data = LoginValidation::sanitizeLoginData();

        $this->db->query('SELECT * FROM admins WHERE name = :name AND password = :password');

        $this->db->bind(':name', $data['name']);
        $this->db->bind(':password', $data['password']);

       $result = $this->db->getSingle();

       return $result;
    }
}