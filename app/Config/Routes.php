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
$routes->match(['get', 'post'], 'editar_usuario/(:num)', 'Usuario_controller::editar_usuario/$1');
$routes->get('/logout', 'Login_controller::logout');

/*
 * Rutas de admin
 */
$routes->get('/crud_productos_view', 'Producto_controller::index', ['filter' => 'auth:admin']); 
$routes->get('/editar_productos_view/(:num)', 'Producto_controller::singleProducto/$1', ['filter' => 'auth:admin']);
$routes->post('/editar_producto/(:num)', 'Producto_controller::editar_producto/$1');

// Alta de productos (alta y guardado)
$routes->get('/alta_productos_view', 'Producto_controller::crearProducto', ['filter' => 'auth:admin']);
$routes->post('/alta_producto', 'Producto_controller::store');

$routes->get('/productos_eliminados', 'Producto_controller::productos_eliminados', ['filter' => 'auth:admin']);
$routes->get('/restaurar_producto/(:num)', 'Producto_controller::restaurar_producto/$1', ['filter' => 'auth:admin']);
$routes->get('/eliminar_producto/(:num)', 'Producto_controller::eliminar_producto/$1', ['filter' => 'auth:admin']);

