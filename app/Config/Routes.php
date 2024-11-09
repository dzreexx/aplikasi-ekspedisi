<?php

use CodeIgniter\Router\RouteCollection;
use PHPUnit\Framework\Attributes\Group;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/news', 'Home::news');
$routes->get('/news/(:num)', 'Home::detailNews/$1');
$routes->get('/profile', 'Home::companyProfile');

$routes->group('', ['filter' => 'islogin'], function ($routes) {
    $routes->get('/login', 'AuthController::login');
    $routes->post('/login', 'AuthController::authLogin');
    $routes->get('/register', 'AuthController::index');
    $routes->post('/register', 'AuthController::store');
});

$routes->get('/logout', 'AuthController::logout', ['filter' => 'auth']);
$routes->group('/dashboard', ['filter' => 'auth'], function ($routes) {
    // Main Items
    $routes->get('/', 'MainItemController::index');
    $routes->get('paket', 'MainItemController::package');


    $routes->get('lokasi', 'MainItemController::location');
    $routes->get('carikota/(:num)', 'MainItemController::locKota/$1');
    $routes->get('carikecamatan/(:num)', 'MainItemController::locKecamatan/$1');
    $routes->post('lokasi', 'MainItemController::storeLocation');

    // Halaman Utama
    $routes->get('carousels', 'MainPageController::carousels');
    $routes->post('carousels', 'MainPageController::storeCarousels');
    $routes->get('carousels/(:num)', 'MainPageController::deleteCarousels/$1');

    $routes->get('berita', 'MainPageController::news');
    $routes->post('berita', 'MainPageController::storeNews');
    $routes->get('berita/(:num)', 'MainPageController::deleteNews/$1');

    $routes->get('foto', 'MainPageController::foto');
    $routes->post('foto', 'MainPageController::storeFoto');
    $routes->get('foto/(:num)', 'MainPageController::deleteFoto/$1');

    // Admin
    $routes->get('pengguna', 'MainPageController::pengguna');

    // Akun
    $routes->get('akun', 'MainPageController::akun');
});
