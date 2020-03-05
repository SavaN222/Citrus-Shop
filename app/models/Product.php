<?php

use App\libraries\Database; 
use App\helpers\ProductValidation;

/**
 * Product Model
 * Create and Read products, display on PagesController@index 
 */
class Product
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Get name,description and image for products.
     * Display on Home Page in 3x3 format, from oldest to newest.
     * @return $results;
     */
    public function getProducts()
    {
        $this->db->query('SELECT * FROM products ORDER BY created_at DESC LIMIT 0,9');

        $results = $this->db->getAll();

        return $results;
    }

    /**
     * Create Product 
     */
    public function createProduct()
    {
        $data = ProductValidation::sanitizeData();

        $this->db->query('INSERT INTO products(name, description, image) 
            VALUES(:name, :description, :image)');

        $this->db->bind(':name', $data['pname']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':image', $data['image']);

        $result = $this->db->execute();

        return $result;
    }
}