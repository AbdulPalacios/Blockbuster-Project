<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// RUTA PRINCIPAL
$routes->get('/', 'Cliente\Inicio_vistas::inicio');

// RUTAS PÚBLICAS
$routes->get('login', 'AuthController::index');
$routes->get('signup', 'Cliente\Inicio_vistas::signup');
$routes->get('categorias', 'Cliente\Inicio_vistas::categorias');
$routes->get('blog', 'Cliente\Inicio_vistas::blog');


// RUTAS DE AUTENTICACIÓN
$routes->post('auth/loginProcess', 'AuthController::loginProcess');
$routes->get('logout', 'AuthController::logout');

// RUTAS POR ROL
$routes->get('admin/dashboard', 'Home::index');
$routes->get('operador/dashboard', 'Home::index');

//RUTAS CLIENTE PERFIL
$routes->get('perfil', 'Cliente\Perfil::index');
$routes->post('perfil/actualizar', 'Cliente\Perfil::actualizar');
$routes->post('suscripciones/solicitar', 'Cliente\Suscripciones::solicitarCambio');