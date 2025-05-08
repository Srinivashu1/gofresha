<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->post('login', 'Home::login');
$routes->match(['get', 'post'], '/', 'Home::index');


$routes->get('home', 'Home::home');
$routes->get('show', 'Home::show');
$routes->get('/logout', 'Home::logout');
$routes->get('dashboard', 'Home::dashboard');

$routes->get('(:segment)/delete/(:num)', 'Home::hideR/$1/$2');
$routes->get('dash', 'Home::dash');
$routes->get('categories', 'Home::categories');

$routes->get('categoriespage', 'Home::categoriespage');
$routes->post('categories_add', 'Home::addCategory');


$routes->match(['get', 'post'],'subcategories', 'Home::subcategories');
$routes->get('subcategoriespage', 'Home::subCategories_page');


$routes->match(['get', 'post'],'products', 'Home::products');
$routes->get('addproductview', 'Home::addProductView');

$routes->get('productsview', 'Home::productsview');
$routes->get('productsProcess', 'Home::productLoadProcess');
$routes->post('productshow', 'Home::productshow');
$routes->get('product-edit/(:num)', 'Home::editProduct/$1');
$routes->get('edit-product/(:num)', 'Home::editProductpage/$1');

$routes->post('productshow', 'Home::productshow');






