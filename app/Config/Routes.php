<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// --------------------------------------------------------------------
// RUTAS PÚBLICAS (No requieren sesión)
// --------------------------------------------------------------------
$routes->get('/', 'Cliente\Inicio_vistas::inicio');
$routes->get('login', 'AuthController::index');
$routes->get('signup', 'Cliente\Inicio_vistas::signup');
$routes->get('categorias', 'Cliente\Inicio_vistas::categorias');
$routes->get('blog', 'Cliente\Inicio_vistas::blog');

// RUTAS DE AUTENTICACIÓN
$routes->post('auth/loginProcess', 'AuthController::loginProcess');
$routes->get('logout', 'AuthController::logout');


// --------------------------------------------------------------------
// RUTAS PRIVADAS (Requieren sesión activa)
// --------------------------------------------------------------------

// RUTAS CLIENTE PERFIL
$routes->get('perfil', 'Cliente\Perfil::index');
$routes->post('perfil/actualizar', 'Cliente\Perfil::actualizar');

// RUTAS ADMINISTRADOR
$routes->group('admin', ['filter' => 'auth', 'namespace' => 'App\Controllers\Admin'], function($routes) {
    
    // El Dashboard
    $routes->get('dashboard', 'DashboardController::index'); 

    // El CRUD de Géneros
    $routes->get('generos', 'GenerosController::index');
    $routes->get('generos/crear', 'GenerosController::create');
    $routes->post('generos/guardar', 'GenerosController::store');
    $routes->get('generos/editar/(:num)', 'GenerosController::edit/$1');
    $routes->post('generos/actualizar/(:num)', 'GenerosController::update/$1');
    $routes->get('generos/eliminar/(:num)', 'GenerosController::delete/$1');
});

// RUTAS OPERADOR 
$routes->group('operador', ['filter' => 'auth', 'namespace' => 'App\Controllers\Operador'], function($routes) {
    $routes->get('dashboard', 'DashboardController::index'); 
});