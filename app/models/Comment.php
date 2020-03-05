<?php

use App\libraries\Database; 
use App\helpers\CommentValidation;

/**
 * Product Model
 * Create and Read products, display on PagesController@index 
 */
class Comment
{
    private $db;

    private const ON_HOLD = '0'; // default comment status, show only in admin dashboard.
    private const APPROVE = '1'; // approve, show only in home page.


    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Get new comments for admin dashboard.
     * @return $results;
     */
    public function getAdminComments()
    {
        $this->db->query('SELECT * FROM comments WHERE status = :status ');

        $this->db->bind(':status', self::ON_HOLD);

        $results = $this->db->getAll();

        return $results;
    }

    /**
     * Create Product 
     */
    public function postComment()
    {
        $data = CommentValidation::sanitizeData();

        $this->db->query('INSERT INTO comments(user_name, user_email, text, avatar, status) 
            VALUES(:name, :email, :text, :avatar, :status)');

        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':text', $data['text']);
        $this->db->bind(':avatar', $data['avatar']);
        $this->db->bind(':status', self::ON_HOLD);

        $result = $this->db->execute();

        return $result;
    }

    /**
     * Approve comment, set status to 1(APPROVE)
     * @param int $id 
     */
    public function approveComment(int $id)
    {
        $this->db->query('UPDATE comments SET status = :status WHERE id = :id');

        $this->db->bind(':status', self::APPROVE);
        $this->db->bind(':id', $id);

        $result = $this->db->execute();

        return $result;
    }

    /**
     * Delete comment from database.
     * @param int $id 
     * @return type
     */
    public function deleteComment(int $id)
    {
        $this->db->query('DELETE FROM comments WHERE id = :id');

        $this->db->bind(':id', $id);

        $result = $this->db->execute();

        return $result;
    }

    /**
     * Get only approved comments.
     */
    public function getComments()
    {
        $this->db->query('SELECT * FROM comments WHERE status = :status ');

        $this->db->bind(':status', self::APPROVE);

        $results = $this->db->getAll();

        return $results;
    }
}