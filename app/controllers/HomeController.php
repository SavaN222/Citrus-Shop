<?php 

use App\libraries\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
      $this->productModel = $this->model('Product');
    }

    /**
     * Display Home page with products.
     */
    public function index()
    {
        $products = $this->productModel->getProducts();
        
        $data = [
            'products' => $products
        ];

        return $this->view('home/index', $data);
    }

    /**
     * Create new product
     */
    public function create()
    {
        if ($this->productModel->createProduct()) {
            $_SESSION['success'] = 'Product Created';
            redirect('admin/index');
        } else {
            die('Error');
        }
        
    }
    
}