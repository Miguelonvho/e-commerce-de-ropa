<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('plantilla_principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('plantilla_productos/(:segment)', 'Home::plantilla_productos/$1');
$routes->get('comercializacion', 'Home::comercializacion');
$routes->get('plantilla_perfil', 'Home::plantilla_perfil');
$routes->get('contacto', 'Home::contacto');
$routes->get('terminos_y_usos', 'Home::terminos_y_usos');
$routes->get('plantilla_busqueda', 'Home::plantilla_busqueda');

