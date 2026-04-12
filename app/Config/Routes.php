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
$routes->get('categorias', 'Cliente\CategoriasController::index');
$routes->get('blog', 'Cliente\Inicio_vistas::blog');
$routes->get('streaming/(:num)', 'Cliente\StreamingController::detalle/$1');

// RUTAS DE AUTENTICACIÓN
$routes->post('auth/loginProcess', 'AuthController::loginProcess');
$routes->post('auth/registrarCliente', 'AuthController::registrarCliente');
$routes->get('logout', 'AuthController::logout');


// --------------------------------------------------------------------
// RUTAS PRIVADAS (Requieren sesión activa)
// --------------------------------------------------------------------

// RUTAS CLIENTE PERFIL Y SUSCRIPCIONES
$routes->get('perfil', 'Cliente\Perfil::index');
$routes->post('perfil/actualizar', 'Cliente\Perfil::actualizar');
$routes->post('suscripciones/solicitar', 'Cliente\Suscripciones::solicitarCambio');

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

    // El CRUD de Planes (¡Aquí están los cables conectados!)
    $routes->get('planes', 'PlanesController::index');
    $routes->get('planes/crear', 'PlanesController::create');
    $routes->post('planes/guardar', 'PlanesController::store');
    $routes->get('planes/editar/(:num)', 'PlanesController::edit/$1');
    $routes->post('planes/actualizar/(:num)', 'PlanesController::update/$1');
    $routes->get('planes/eliminar/(:num)', 'PlanesController::delete/$1');

    // El CRUD de Usuarios
    $routes->get('usuarios', 'UsuariosController::index');
    $routes->get('usuarios/crear', 'UsuariosController::create');
    $routes->post('usuarios/guardar', 'UsuariosController::store');
    $routes->get('usuarios/editar/(:num)', 'UsuariosController::edit/$1');
    $routes->post('usuarios/actualizar/(:num)', 'UsuariosController::update/$1');
    $routes->get('usuarios/eliminar/(:num)', 'UsuariosController::delete/$1');

    // El CRUD de Streaming
    $routes->get('streaming', 'StreamingController::index');
    $routes->get('streaming/crear', 'StreamingController::create');
    $routes->post('streaming/guardar', 'StreamingController::store');
    $routes->get('streaming/editar/(:num)', 'StreamingController::edit/$1');
    $routes->post('streaming/actualizar/(:num)', 'StreamingController::update/$1');
    $routes->get('streaming/eliminar/(:num)', 'StreamingController::delete/$1');
});

// RUTAS OPERADOR
$routes->group('operador', ['filter' => 'auth', 'namespace' => 'App\Controllers\Operador'], function($routes) {
    $routes->get('dashboard', 'DashboardController::index'); 

    // Módulo Validar Clientes
    $routes->get('clientes', 'ClientesController::index');
    $routes->get('clientes/validar/(:num)/(:segment)', 'ClientesController::validar/$1/$2');

    // Módulo Aprobar Pagos
    $routes->get('pagos', 'PagosController::index');
    $routes->get('pagos/aprobar/(:num)/(:num)/(:num)', 'PagosController::aprobar/$1/$2/$3');
    $routes->get('pagos/rechazar/(:num)', 'PagosController::rechazar/$1');
});