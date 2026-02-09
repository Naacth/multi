<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Public Pages
$routes->get('/', 'PageController::index');
$routes->get('/tentang-kami', 'PageController::about');
$routes->get('/klien', 'PageController::clients');
$routes->get('/kontak', 'PageController::contact');

