<?php 

use App\libraries\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
      // model
    }

    public function index()
    {
        return 123;
    }

    public function adminLogin()
    {
        return $this->view('admin/login');

    }
    
}