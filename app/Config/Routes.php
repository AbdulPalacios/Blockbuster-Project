<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// RUTA PRINCIPAL 
$routes->get('/', 'Cliente\Inicio_vistas::inicio');

// RUTAS DE CLIENTE
$routes->get('login', 'Cliente\Inicio_vistas::login');
$routes->get('signup', 'Cliente\Inicio_vistas::signup');
$routes->get('categorias', 'Cliente\Inicio_vistas::categorias');
$routes->get('blog', 'Cliente\Inicio_vistas::blog');


// Rutas de Autenticación
$routes->get('login', 'AuthController::index');
$routes->post('auth/loginProcess', 'AuthController::loginProcess');
$routes->get('logout', 'AuthController::logout');

// Rutas de prueba para la redirección (para que no te de error 404 al entrar)
$routes->get('admin/dashboard', 'Home::index');