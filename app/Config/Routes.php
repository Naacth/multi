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

// Admin Routes
$routes->group('admin', function ($routes) {
    $routes->get('login', 'Admin\AuthController::login');
    $routes->post('login', 'Admin\AuthController::attemptLogin');
    $routes->get('logout', 'Admin\AuthController::logout');

    $routes->group('', ['filter' => 'auth'], function ($routes) {
        $routes->get('dashboard', 'Admin\DashboardController::index');
        $routes->get('/', 'Admin\DashboardController::index');
        
        // Company
        $routes->get('company', 'Admin\CompanyController::index');
        $routes->post('company/update', 'Admin\CompanyController::update');
        
        // Clients
        $routes->get('clients', 'Admin\ClientController::index');
        $routes->get('clients/new', 'Admin\ClientController::new');
        $routes->post('clients', 'Admin\ClientController::create');
        $routes->get('clients/(:num)/edit', 'Admin\ClientController::edit/$1');
        $routes->post('clients/(:num)', 'Admin\ClientController::update/$1');
        $routes->get('clients/(:num)/delete', 'Admin\ClientController::delete/$1');
        
        // Services
        $routes->get('services', 'Admin\ServiceController::index');
        $routes->get('services/new', 'Admin\ServiceController::new');
        $routes->post('services', 'Admin\ServiceController::create');
        $routes->get('services/(:num)/edit', 'Admin\ServiceController::edit/$1');
        $routes->post('services/(:num)', 'Admin\ServiceController::update/$1');
        $routes->get('services/(:num)/delete', 'Admin\ServiceController::delete/$1');
        
        // Gallery
        $routes->get('gallery', 'Admin\GalleryController::index');
        $routes->get('gallery/new', 'Admin\GalleryController::new');
        $routes->post('gallery', 'Admin\GalleryController::create');
        $routes->get('gallery/(:num)/delete', 'Admin\GalleryController::delete/$1');

        // Profile
        $routes->get('profile', 'Admin\ProfileController::index');
        $routes->post('profile/update', 'Admin\ProfileController::update');
    });
});

