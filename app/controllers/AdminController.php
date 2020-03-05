<?php 

use App\libraries\Controller;

/**
 * AdminController handles login and admin dashboard page
 */
class AdminController extends Controller
{
    public function __construct()
    {
        $this->adminModel = $this->model('Admin');
        $this->commentModel = $this->model('Comment');
    }

    /**
     * Display admin dashboard and list new comments
     */
    public function index()
    {
        if (!isLoggedIn()) {
            return $this->view('admin/login');
        }

        $comments = $this->commentModel->getAdminComments();

        $data = [
            'comments' => $comments
        ];

        return $this->view('admin/index', $data);
    }

    public function approveComment($id)
    {
          if ($this->commentModel->approveComment($id)) {
            $_SESSION['success'] = 'Comment Approved!';
            redirect('admin/index');
        } else {
            $_SESSION['err'] = 'Error';
            redirect('admin/index');
        }
    }

    public function deleteComment($id)
    {
          if ($this->commentModel->deleteComment($id)) {
            $_SESSION['success'] = 'Comment Deleted!';
            redirect('admin/index');
        } else {
            $_SESSION['err'] = 'Error';
            redirect('admin/index');
        }
    }

    /**
     * Login page for admin
     */
    public function adminLogin()
    {
        if (!isset($_POST['submit'])) {
            return $this->view('admin/login');
        } 

        if ($this->adminModel->adminLogin()) {
            $admin = $this->adminModel->adminLogin();
            
            $_SESSION['id'] = $admin->id;
            $_SESSION['name'] = $admin->name;

            redirect('admin/index');
        } else {
            $data = [
                'errorMsg' => 'User not found!'
            ];
            // Load with errors
            return $this->view('admin/login', $data);
        }
    }

    /**
     * Logout method for admin, unset and destroy sessions
     */
    public function adminLogout()
    {
        logOut();

        redirect('pages/index');
    }
}