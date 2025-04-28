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
        return view('dashboard/categories');
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


     

    //     $data = [
    //         'category_name' => $categoryName, 
    //         'category_subtitle' => $categorySubtitle,
    //         // 'category_image' => $data['category_image'] ?? ' '
    //     ];  

    //     $model->insert($data);


    //     return $this->response->setJSON([
    //         'status' => 'success',
    //         'username' => $categoryName,
    //         // 'redirect' => base_url('categories')
    //     ]);

    //     // log_message('debug', "USERNAME: $username | PASSWORD: $password");





    //     // return redirect()->back();
    // }


    
    public function addCategory()
    {
        // Force JSON response
        header('Content-Type: application/json');

        try {
            // Get raw JSON input
            $json = file_get_contents('php://input');
            $data = json_decode($json, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \Exception('Invalid JSON input');
            }

            // Validate input
            if (empty($data['categoryName'])) {
                throw new \Exception('Category name is required');
            }

            // Process data (example)
            $categoryData = [
                'name' => $data['categoryName'],
                'subtitle' => $data['categorySubtitle'] ?? ''
            ];

            // Return JSON response
            echo json_encode([
                'status' => 'success',
                'data' => $categoryData
            ]);
            exit;

        } catch (\Exception $e) {
            // Return JSON error
            http_response_code(400);
            echo json_encode([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
            exit;
        }
    }


}
