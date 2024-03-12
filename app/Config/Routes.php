<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('registrasi', 'Front\Registrasi::index', ['filter' => 'guestFilter']);
$routes->post('registrasi/simpan', 'Front\Registrasi::simpan', ['filter' => 'guestFilter']);
$routes->get('verifikasi/(:any)', 'Front\Registrasi::verifikasi/$1', ['filter' => 'guestFilter']);

$routes->get('lupa-password', 'Front\Lupapassword::index', ['filter' => 'guestFilter']);
$routes->post('reset-password', 'Front\Lupapassword::resetPassword', ['filter' => 'guestFilter']);


$routes->get('login', 'Front\Login::index', ['filter' => 'guestFilter']);
$routes->get('keluar', 'Front\Login::keluar', ['filter' => 'authFilter']);
$routes->post('login/cek-login', 'Front\Login::cek_login', ['filter' => 'guestFilter']);



$routes->get('/', 'Admin\Home::index', ['filter' => 'authFilter']);
$routes->get('dashboard', 'Admin\Home::index', ['filter' => 'authFilter']);

$routes->get('surat', 'Admin\Surat::index', ['filter' => 'authFilter']);

$routes->get('perjanjian', 'Admin\Perjanjian::index', ['filter' => 'authFilter']);

$routes->get('invoice', 'Admin\Invoice::index', ['filter' => 'authFilter']);

$routes->get('pengaturan', 'Admin\Pengaturan::index', ['filter' => 'authFilter']);

//registrasi
$routes->get('registrasi', 'Registrasi::index', ['filter' => 'authFilter']);
$routes->get('lupa-password', 'Registrasi::lupaPassword', ['filter' => 'authFilter']);


//login
$routes->get('login', 'Login::index', ['filter' => 'authFilter']);
