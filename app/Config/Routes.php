<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('plantilla', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('plantilla_generos/(:segment)', 'Home::plantilla_generos/$1');

