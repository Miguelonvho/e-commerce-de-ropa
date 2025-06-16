<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/plantilla_principal', 'Home::index');
$routes->get('/quienes_somos', 'Home::quienes_somos');
$routes->get('/plantilla_productos/(:segment)', 'Home::plantilla_productos/$1');
$routes->get('/detalles_producto', 'Home::detalles_producto');
$routes->get('/comercializacion', 'Home::comercializacion');
$routes->get('/contacto', 'Home::contacto');
$routes->get('/terminos_y_usos', 'Home::terminos_y_usos');

/**
 * Rutas de usuario
 */
$routes->get('/agregarusuario_view', 'Home::registro');
$routes->post('/enviar-form', 'Usuario_controller::form_validation');
$routes->get('/iniciarsesion_view', 'Home::login');
$routes->post('/enviarlogin', 'Login_controller::auth');
$routes->get('/plantilla_perfil', 'Login_controller::buscar_usuario', ['filter' => 'auth']);
$routes->get('/logout', 'Login_controller::logout');

/**
 * Rutas de productos
 */
$routes->get('/editar_productos_view', 'Producto_controller::singleProducto', ['filter' => 'auth:admin']);
$routes->post('/editar_producto', 'Producto_controller::editar_producto');