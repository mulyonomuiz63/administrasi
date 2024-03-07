<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Admin\Home::index');
$routes->get('profil', 'Admin\Profil::index');

$routes->get('surat', 'Admin\Surat::index');

$routes->get('perjanjian', 'Admin\Perjanjian::index');

$routes->get('invoice', 'Admin\Invoice::index');

$routes->get('pengaturan', 'Admin\Pengaturan::index');

//registrasi
$routes->get('registrasi', 'Registrasi::index');

//login
$routes->get('login', 'Login::index');
