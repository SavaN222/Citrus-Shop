<?php 

namespace App\helpers;

class ProductValidation
{
    /**
     * Sanitize product input data and move product image in public/images/products.
     * @return array $data
     */
    public static function sanitizeData(): array
    {
        if (!isset($_POST['submit'])) {
            return false;
        }

        $pname = trim($_POST['pname']);
        $description = trim($_POST['description']);

        $pname = htmlspecialchars(strip_tags($pname));
        $description = htmlspecialchars(strip_tags($description));

        $data = [
            'pname' => $pname,
            'description' => $description,
            'image' => self::uploadImage($_FILES['image'])
        ];

        return $data;
    }
   
    /**
     * Check if image jpg or png and give image unique name.
     * @param array $_FILES['profilePic'] $img 
     * @return string filePath
     */
    public static function uploadImage(array $img): string
    {
        $imagePath = '';

        $allowedExtension = ['jpg','png'];
        $allowedTypes = ['image/jpeg', 'image/png', 'image/pjpeg'];

        $imageNameArray = explode('.', $img['name']);
        $imageExtension = end($imageNameArray);

        $imageName = $imageNameArray[0] . round(microtime(true)).'.'.$imageExtension;

        if (in_array($imageExtension, $allowedExtension) && 
            in_array($img['type'], $allowedTypes)) {
            $imagePath = 'images/products/' . $imageName;
            move_uploaded_file($img['tmp_name'], $imagePath);
        }

        return $imagePath;
    }
}