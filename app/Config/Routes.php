<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->resource('api/consignments');
 $routes->get('/', 'Home::index');
 $routes->match(['get', 'post'],'/track', 'Home::track');
 $routes->get('/our-services', 'Home::services');
 $routes->get('/about', 'Home::about');
 $routes->get('/contact', 'Home::contact');

 $routes->get('/admin', 'AdminController::index',['as' => 'admin']);
 $routes->post('admin/login', 'AdminController::login',['as' => 'login']);
 $routes->get('admin/logout', 'AdminController::logout', ['as' => 'logout']);

 $routes->get('/dashboard', 'AdminController::dashboard', ['as' => 'dashboard']);

 $routes->get('/consignments', 'ConsignmentsController::index', ['as' => 'consignments.list']);
 $routes->get('/consignments/import', 'ConsignmentsController::import',      ['as' => 'consignments.import']);
 $routes->post('/consignments/import', 'ConsignmentsController::postImport', ['as' => 'consignments.import.save']);
 //$routes->resource('admin', AdminCon);
