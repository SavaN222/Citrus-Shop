<?php 

use App\libraries\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
      $this->productModel = $this->model('Product');
      $this->commentModel = $this->model('Comment');
    }

    /**
     * Display Home page with products.
     */
    public function index()
    {
        $products = $this->productModel->getProducts();
        $comments = $this->commentModel->getComments();
        
        $data = [
            'products' => $products,
            'comments' => $comments
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

    /**
     * Post Comment
     */
    public function postComment()
    {
        if ($this->commentModel->postComment()) {
            $_SESSION['info'] = 'Your comment is send but administrator must approve it!';
            redirect('home/index/#postComment');
        } else {
            $_SESSION['err'] = 'Something goes wrong, please try again!';
            redirect('home/index/#postComment');
        }
    }
}