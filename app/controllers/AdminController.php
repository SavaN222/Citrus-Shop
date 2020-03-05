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
    }

    public function index()
    {
        if (!isLoggedIn()) {
            return $this->view('admin/login');
        }
        return $this->view('admin/index');
    }

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

    public function adminLogout()
    {
        logOut();

        redirect('pages/index');
    }
}