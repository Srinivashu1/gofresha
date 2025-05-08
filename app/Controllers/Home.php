<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Home extends BaseController
{

    private $products_varField = ['id','prod_id','measure','price','disc_type','disc_price','stock','status','sku_code','hsn_code','variant_image'];
    private $productsField = ['id','prod_name','qty_type','tax_id','fssai_no','category_id','subcategory_id','prod_type','manufacturer','made_in','return_status','cancelable_status','cod_allowed','total_quantity','main_image','other_images','size_chart','description','shipping_policy','status','date_added'];
    private $categoriesField = ['category_name', 'category_subtitle','category_image'];
    private $subcategoriesField = ['id','main_category', 'sub_category_name', 'sub_category_subtitle','sub_category_image'];

    private $value_Field  = ['id','value1','value2', 'value3'];

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
        $model->tables('categories', 'id', $this->categoriesField);

        $products = $model->orderby('id', 'DESC')->findAll();
        return $this->response->setJSON([
            'status' => 'success',
            'products'=>$products,
            'redirect' => base_url('categoriespage')
        ]);
        
    }

    public function categoriespage() 
    {
        $category = [];
        if (!empty($_GET['data'])) {
            $category = json_decode(urldecode($_GET['data']), true);
        }
        return view('dashboard/categories', ['categories' => $category]);
    }
    


    public function addCategory()
    {

        $model = new AdminModel();
        $model->tables('categories', 'id', ['category_name', 'category_subtitle', 'category_image']);
    
        $categoryName = $this->request->getPost('categoryName');
        $categorySubtitle = $this->request->getPost('categorySubtitle');

        $categoryId = $this->request->getPost('categoryId');

        $image = $this->request->getFile('categoryImage');
    
        $imageName = '';
        if(!empty($image)){
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $imageName = $image->getRandomName(4);
                $image->move(ROOTPATH . 'public/uploads/categories', $imageName); 
            }
    
        }

        if ($categoryId) {
            $exiting = $model->where('id', $categoryId)->first();
            if(!empty($imageName)){
                $prodImage = $imageName;
            } else {
                $prodImage = $exiting['category_image'];
            }
            $data = [
                'category_name' => $categoryName ?? $exiting['category_name'],
                'category_subtitle' => $categorySubtitle ?? $exiting['category_subtitle'],
                'category_image' => $prodImage
            ];

            $model->update($categoryId, $data);

        } else {
            $data = [
                'category_name' => $categoryName,
                'category_subtitle' => $categorySubtitle,
                'category_image' => $imageName
            ];
        
            $model->insert($data);
        }
    
        return $this->response->setJSON([
            'status' => 'success',
            'category_name' => $categoryName,
            'redirect' => base_url('categories')
        ]);
    }
 

    public function subcategories()
    {
        $categories = new AdminModel();
        $categories->tables('categories', 'id', ['category_name', 'category_subtitle','category_image']);

        $subcategories = new AdminModel();
        $subcategories->tables('subcategories', 'id', ['main_category','sub_category_name', 'sub_category_subtitle','sub_category_image']);

        if ($this->request->getMethod(true) === 'POST') {
                   

            $mainCategory = $this->request->getPost('mainCategory');
            $subCategoryName = $this->request->getPost('subCategory');
            $subCategorySubtitle = $this->request->getPost('subCategorySubtitle');
            $subCategoryId = $this->request->getPost('subCategoryId');
            $image = $this->request->getFile('subCategoryImage');

            $imageName = '';
            if(!empty($image)){
                if ($image && $image->isValid() && !$image->hasMoved()) {
                    $extension = $image->getExtension();
                    $imageName = 'sub_' . bin2hex(random_bytes(5)).'.' . $extension;
                    $image->move(ROOTPATH . 'public/uploads/categories', $imageName); 
                }
        
            }
    
            if ($subCategoryId) {
                $exiting = $subcategories->where('id', $subCategoryId)->first();
                if(!empty($imageName)){
                    $prodImage = $imageName;
                } else {
                    $prodImage = $exiting['category_image'];
                }
                $data = [
                    'mainCategory' => $mainCategory ?? $exiting['main_category'],
                    'sub_category_name' => $subCategoryName ?? $exiting['category_name'],
                    'sub_category_subtitle' => $subCategorySubtitle ?? $exiting['category_subtitle'],
                    'sub_category_image' => $prodImage
                ];
    
                $subcategories->update($subCategoryId, $data);
    
            } else {
                $data = [
                    'main_category' => $mainCategory,
                    'sub_category_name' => $subCategoryName,
                    'sub_category_subtitle' => $subCategorySubtitle,
                    'sub_category_image' => $imageName
                ];
            
                $subcategories->insert($data);
            }
            return $this->response->setJSON([
                'status' => 'success',
                'redirect' => base_url('subcategories')
            ]);


        }


        $subCategory = $subcategories->orderby('id', 'DESC')->findAll();

        return $this->response->setJSON([
            'status' => 'success',
            'categories'=>$categories->orderby('id', 'DESC')->findAll(),
            'subCategory'=>$subCategory,
            'func' => 'manageSubCategories()',

            'redirect' => base_url('subcategoriespage')
        ]);
    }

    public function subCategories_page() 
    {
        // $subCategories = [];
        if (!empty($_GET['data'])) {
            $getval = json_decode(urldecode($_GET['data']), true);

            $subCategories = $getval['subCategory'];
            $categories = $getval['categories'];
        }
        return view('dashboard/subcategories', ['categories'=>$categories, 'subcategories' => $subCategories]);
    }

    public function hideR($opt,$id){
        $products = new AdminModel();
        $products->tables('products','id',$this->productsField);

        if($opt == 'product'){
            $model = $products;
        }
        $model->update($id, ['status' => 0]);
        return $this->response->setJSON([
            'status' => 'success',
            'redirect' => base_url('productsview'),
            'func' => 'productsview();'
        ]);
    }




    public function products() 
    {
        $categories = new AdminModel();
        $categories->tables('categories', 'id', $this->categoriesField);
        $subcategories = new AdminModel();
        $subcategories->tables('subcategories', 'id', $this->subcategoriesField);
        $products = new AdminModel();
        $products->tables('products','id',$this->productsField);
        $product_var = new AdminModel();
        $product_var->tables('product_variants','id', $this->products_varField);
   
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        

            $measurement = $this->request->getPost('measurement');
            $measure_unit = $this->request->getPost('measureUnit');
            $prices = $this->request->getPost('prices');
            $discount_type = $this->request->getPost('discount_type');
            $discount_price = $this->request->getPost('discount_price');
            $stock = $this->request->getPost('stock');
            $stock_unit = $this->request->getPost('stock_unit');
            $status = $this->request->getPost('status');
            $sku_code = $this->request->getPost('sku_code');
            $hsn_code = $this->request->getPost('hsn_code');

            $mainImage = $this->request->getFile('main_image');
            $sizeChart = $this->request->getFile('size_chart');

            $product_id = $this->request->getPost('prod_id');
            $existvar_id = $this->request->getPost('variantexist');



            $variant_image_names = [];
            $mainImageName = null;
            $otherImagesName = [];
            $sizeChartName = null;

            $files = $this->request->getFiles();
            if ($files && isset($files['variant_images'])) {
                foreach ($files['variant_images'] as $file) {
                    if ($file->isValid() && !$file->hasMoved()) {
                        $extension = $file->getExtension();
                        $imageName = bin2hex(random_bytes(5)).'.' . $extension;
                        
                        $file->move(ROOTPATH . 'public/uploads/products', $imageName);
                        $variant_image_names[] = $imageName;
                    } 
                }
            }
            if ($mainImage && $mainImage->isValid() && !$mainImage->hasMoved()) {
                $mainImageName = bin2hex(random_bytes( 6) ). '.' . $mainImage->getExtension();
                $mainImage->move(ROOTPATH . 'public/uploads/products', $mainImageName);
            }
        
            // Size Chart
            if ($sizeChart && $sizeChart->isValid() && !$sizeChart->hasMoved()) {
                $sizeChartName = bin2hex(random_bytes(5)) . '.' . $sizeChart->getExtension();
                $sizeChart->move(ROOTPATH . 'public/uploads/products', $sizeChartName);
            }


            if ($files && isset($files['other_images'])) {
                foreach ($files['other_images'] as $file) {
                    if ($file->isValid() && !$file->hasMoved()) {
                        $extension = $file->getExtension();
                        $otherImage = bin2hex(random_bytes(5)).'.' . $extension;
                        $file->move(ROOTPATH . 'public/uploads/products', $otherImage);
                        $otherImagesName[] = $otherImage;
                    } 
                }
            }

            if($product_id ){
                $existing =  $products->where('id', $product_id)->first();
            }
          
            $data = [
                'prod_name' => $this->request->getPost('product_name'),
                'qty_type' => $this->request->getPost('qtytype'),
                'tax_id' =>  $this->request->getPost('tax'),
                'fssai_no' =>$this->request->getPost('fssai_no'),
                'category_id' => $this->request->getPost('category'),
                'subcategory_id' => $this->request->getPost('sub_category'),
                'prod_type' => $this->request->getPost('productType'),
                'manufacturer' =>$this->request->getPost('manufacturer'),
                'made_in' =>$this->request->getPost('made_in'),
                'return_status' => $this->request->getPost('returnable') ?? 0,
                'cancelable_status' => $this->request->getPost('cancelable') ?? 0,
                'cod_allowed' => $this->request->getPost('cod_allowed') ?? 0,
                'total_quantity'=> $this->request->getPost('total_quantity') ,
                'other_images' => json_encode($otherImagesName) ??  $existing['main_image'],
                'main_image' => $mainImageName ?? $existing['main_image'] ?? null,
                'size_chart' => $sizeChartName ?? $existing['size_chart'] ?? null,
                'description' =>  $this->request->getPost('product_description'),
                'shipping_policy' => $this->request->getPost('shippingPolicy'),
            ];

            if (!empty($existing)) {
                $products->update($product_id, $data);
            } else {
                if ($products->insert($data)) {
                    $product_id = $products->insertID();
                } else {
                    return $this->response->setJSON([
                        'status' => 'error',
                        'message' => 'Product insert failed'
                    ]);
                }
            }
            
            if (!empty($existvar_id)) {
                $product_var->where('prod_id', $product_id)
                            ->whereNotIn('id', $existvar_id)
                            ->delete();
            }
            
            // Add/update variants
            for ($i = 0; $i < count($measurement); $i++) {
                $data2 = [
                    'prod_id' => $product_id,
                    'measure' => $measurement[$i] . ' ' . $measure_unit[$i],
                    'price' => (int)$prices[$i],
                    'disc_type' => (int)$discount_type[$i],
                    'disc_price' => (int)$discount_price[$i],
                    'stock' => (int)$stock[$i] . ' ' . $stock_unit[$i],
                    'sku_code' => $sku_code[$i],
                    'hsn_code' => $hsn_code[$i],
                    'variant_image' => $variant_image_names[$i] ?? null,
                    'status' => $status[$i],
                ];
            
                if (!empty($existvar_id) && isset($existvar_id[$i])) {
                    $product_var->update($existvar_id[$i], $data2);
                    return $this->response->setJSON([
                        'status' => 'success',
                        'func' =>  'productsview()',
                        'redirect' => base_url('productsview')
                    ]);
                } else {
                    $product_var->insert($data2);
                    return $this->response->setJSON([
                        'status' => 'success',
                        'func' =>  'addproductview()',
                        'redirect' => base_url('products')
                    ]);
                }
            }            
       
        }
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $subCategory = $subcategories->orderby('id', 'DESC')->findAll();

            return $this->response->setJSON([
                'status' => 'success',
                'categories'=>$categories->orderby('id', 'DESC')->findAll(),
                'subCategory'=>$subCategory,
                'redirect' => base_url('addproductview')
            ]);

        }

    }

    public function addProductView() 
    {
        if (!empty($_GET['data'])) {
            return view('dashboard/addProducts');
        }
        else{
            print_r('no data');
        }
        
    }


    
    public function productsview() 
    {
        $categories = new AdminModel();
        $categories->tables('categories', 'id', $this->categoriesField);
        $subcategories = new AdminModel();
        $subcategories->tables('subcategories', 'id', $this->subcategoriesField);
        $products = new AdminModel();
        $products->tables('products','id',$this->productsField);
        $product_var = new AdminModel();
        $product_var->tables('product_variants','id', $this->products_varField);
       

        return $this->response->setJSON([
            'status' => 'success',
            'categories'=>$categories->orderby('id', 'DESC')->findAll(),
            'subcategories'=>$subcategories->orderby('id', 'DESC')->findAll(),
            'products'=>$products->where('status', 1)->orderby('id', 'DESC')->findAll(),
            'products_variants'=>$product_var->orderBy('id', 'DESC')->findAll(),
            'redirect' => base_url('productshow')
        ]);

    }

    public function productLoadProcess() 
    {
        return view('dashboard/process/productsLoad');
    }

    public function productshow() 
    {
        $combinedData = json_decode($this->request->getPost('combinedData'), true);
        $data = [
            'products' => $combinedData['products'],
            'product_variants' => $combinedData['products_variants'],
            'categories' => $combinedData['categories'],
            'subcategories' => $combinedData['subcategories'],
        ];
        return view('dashboard/products', $data);
    }

    public function editProduct($id){
        $categories = new AdminModel();
        $categories->tables('categories', 'id', $this->categoriesField);
        $subcategories = new AdminModel();
        $subcategories->tables('subcategories', 'id', $this->subcategoriesField);
        $products = new AdminModel();
        $products->tables('products','id',$this->productsField);
        $product_var = new AdminModel();
        $product_var->tables('product_variants','id', $this->products_varField);

        $products = $products->where('id', $id)->first();

        return $this->response->setJSON([
            'status' => 'success',
            'categories'=>$categories->orderby('id', 'DESC')->findAll(),
            'subCategory'=>$subcategories->orderby('id', 'DESC')->findAll(),
            'products'=>$products,
            'product_variants'=>$product_var->where('prod_id', $id)->findAll(),
            'redirect' => base_url('edit-product/'.$id)
        ]);

    }
   

    public function editProductpage()
    {
        return view('dashboard/editProduct');
    }






}
