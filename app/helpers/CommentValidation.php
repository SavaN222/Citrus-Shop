<?php 

namespace App\helpers;

class CommentValidation
{
    /**
     * Return sanitize product input data.
     * @return array $data
     */
    public static function sanitizeData(): array
    {
        if (!isset($_POST['submit'])) {
            return false;
        }

        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $text = trim($_POST['comment']);

        $name = htmlspecialchars(strip_tags($name));
        $email = htmlspecialchars(strip_tags($email));
        $text = htmlspecialchars(strip_tags($text));

        $data = [
            'name' => $name,
            'email' => $email,
            'text' => $text,
            'avatar' => self::uploadImage($_FILES['avatar'])
        ];

        return $data;
    }
   
    /**
     * Check if image jpg or png and give image unique name
     * Move avatar image in public/images/comments
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
            $imagePath = 'images/comments/' . $imageName;
            move_uploaded_file($img['tmp_name'], $imagePath);
        }

        return $imagePath;
    }
}