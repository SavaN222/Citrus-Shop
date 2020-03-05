<?php

namespace App\helpers;

/**
 * Validation class return clean input data
 */
class LoginValidation
{
    /**
     * Sanitize input data for admin login
     * @return array $data
     */
    public static function sanitizeLoginData(): array
    {
        if (!isset($_POST['submit'])) {
            return false;
        }

        // First clear space
        $name = trim($_POST['name']);
        $password = trim($_POST['password']);
        // Sanitize data
        $name = htmlspecialchars(strip_tags($name));
        $password = htmlspecialchars(strip_tags($password));

        $data = [
            'name' => $name, 
            'password' => $password 
        ];
        
        return $data;
    }
}