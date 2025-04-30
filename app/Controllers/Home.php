<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Home extends BaseController
{

    protected $session;
    public function __construct()
    {
        $this->session = session();

        // Skip session check for index and login during POST/GET
        $router = service('router');
        $controller = $router->controllerName();
        $method = $router->methodName();
        $request = service('request');

        // Allow index and login for both GET and POST
        if (!$this->session->get('loggedIn')) {
            if (!in_array($method, ['index', 'login'])) {
                // Redirect non-auth users trying to access other methods
                echo '<script>window.location.href = "' . base_url() . '";</script>';
                die();
            }
        }
    }

    public function index()
    {
        if ($this->request->getMethod(true) === 'POST') {

            // Use getJSON

            $input = $this->request->getBody();
            log_message('debug', 'Raw Input: ' . $input);

            $data = json_decode($input, true);
            log_message('debug', 'Decoded: ' . print_r($data, true));


            $username = $data['username'] ?? '';
            $password = $data['password'] ?? '';

            log_message('debug', "USERNAME: $username | PASSWORD: $password");

            $model = new AdminModel();
            $model->tables('login', 'id', ['username', 'password']);
            $user = $model->login($username, $password);

            if ($user) {
                session()->set('loggedIn', true);
                session()->set('user_id', $user['id']);
                return $this->response->setJSON([
                    'status' => 'success',
                    'message' => 'Login successful',
                    'redirect' => base_url('home')
                ]);
            } else {
                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => 'Invalid username or password',
                    'redirect' => base_url('/')
                ]);
            }
        }
        session()->destroy();
        return view('login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/'); // Redirect to login page
    }

    public function show()
    {
        $model = new AdminModel();
        $model->tables('login', 'id', ['username', 'password']);
        $users = $model->findAll();
        // Send JSON header
        return $this->response->setJSON(['users' => $users]);
    }

    public function home()
    {
        return view('index');
    }
    public function dashboard()
    {
        return view('calendar');
    }

    public function dash()
    {
        return view('demo13-shop');
    }

    public function categories()
    {
        $model = new AdminModel();
        $model->tables('categories', 'id', ['category_name', 'category_subtitle','category_image']);

        $products = $model->findAll();
        return $this->response->setJSON([
            'status' => 'success',
            'products'=>$products,
            'redirect' => base_url('categoriespage')
        ]);
        
    }

    public function categoriespage() 
    {
        $products = [];
        if (!empty($_GET['data'])) {
            $products = json_decode(urldecode($_GET['data']), true);
        }
        return view('dashboard/categories', ['products' => $products]);
    }
    




    // public function addCategory()
    // {
    //     $model = new AdminModel();
    //     $model->tables('categories', 'id', ['category_name', 'category_subtitle','category_image']);

    //     $input = $this->request->getBody();
    //     log_message('debug', 'Raw Input: ' . $input);

    //     $data = json_decode($input, true);
    //     log_message('debug', 'Decoded: ' . print_r($data, true));
        
    //     $categoryName = $data['categoryName'] ?? ' ';
    //     $categorySubtitle = $data['categorySubtitle'] ?? ' ';

    //     $imageFile = $this->request->getFile('categoryImage');

    //     if ($imageFile->isValid() && !$imageFile->hasMoved()) {
    //         $imageName = $imageFile->getRandomName();
    //         $imageFile->move(WRITEPATH . 'uploads/categories/', $imageName);
    //     }


    //     $data = [
    //         'category_name' => $categoryName, 
    //         'category_subtitle' => $categorySubtitle,
    //         'category_image' => $imageName ?? ' '
    //     ];  

    //     $model->insert($data);


    //     return $this->response->setJSON([
    //         'status' => 'success',
    //         'username' => $categoryName,
    //         'redirect' => base_url('categories')
    //     ]);

    // }


    public function addCategory()
    {
        $model = new AdminModel();
        $model->tables('categories', 'id', ['category_name', 'category_subtitle', 'category_image']);
    
        $categoryName = $this->request->getPost('categoryName');
        $categorySubtitle = $this->request->getPost('categorySubtitle');
    
        $image = $this->request->getFile('categoryImage');
    
        $imageName = '';
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName(4);
            $image->move(ROOTPATH . 'public/uploads/categories', $imageName); // Store image
        }
    
        $data = [
            'category_name' => $categoryName,
            'category_subtitle' => $categorySubtitle,
            'category_image' => $imageName
        ];
    
        $model->insert($data);
    
        return $this->response->setJSON([
            'status' => 'success',
            'category_name' => $categoryName,
            'redirect' => base_url('categories')
        ]);
    }





}
