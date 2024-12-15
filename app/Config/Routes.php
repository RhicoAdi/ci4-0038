<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'User::login');

$routes->get('/home', 'User::home');
//$routes->get('/', 'User::index');
//$routes->get('/login', 'User::login');
