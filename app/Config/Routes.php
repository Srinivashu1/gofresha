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

$routes->get('dash', 'Home::dash');

$routes->get('categories', 'Home::categories');

$routes->post('categories_add', 'Home::addCategory');


