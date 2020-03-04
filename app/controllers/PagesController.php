<?php 

use App\libraries\Controller;

class PagesController extends Controller
{
    public function __construct()
    {
      // model
    }

    public function index()
    {
        return $this->view('pages/index');
    }
    
}