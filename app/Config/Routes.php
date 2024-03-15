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
$routes->post('pengaturan/ubah/password', 'Admin\Pengaturan::ubahPassword', ['filter' => 'authFilter']);
$routes->post('pengaturan/ubah/profil', 'Admin\Pengaturan::ubahProfil', ['filter' => 'authFilter']);


//registrasi
$routes->get('registrasi', 'Registrasi::index', ['filter' => 'authFilter']);
$routes->get('lupa-password', 'Registrasi::lupaPassword', ['filter' => 'authFilter']);


//login
$routes->get('login', 'Login::index', ['filter' => 'authFilter']);

// untuk menu-role
$routes->get('menu-role', 'Admin\MenuRole::index', ['filter' => 'authFilter']);
$routes->post('menu-role/datatablesource', 'Admin\MenuRole::datatablesource', ['filter' => 'authFilter']);
$routes->get('menu-role/tambah', 'Admin\MenuRole::tambah', ['filter' => 'authFilter']);
$routes->post('menu-role/simpan', 'Admin\MenuRole::simpan', ['filter' => 'authFilter']);
$routes->get('menu-role/edit/(:any)', 'Admin\MenuRole::edit/$1', ['filter' => 'authFilter']);
$routes->get('menu-role/delete/(:any)', 'Admin\MenuRole::delete/$1', ['filter' => 'authFilter']);

// untuk role
$routes->get('role', 'Admin\Role::index', ['filter' => 'authFilter']);
$routes->post('role/datatablesource', 'Admin\Role::datatablesource', ['filter' => 'authFilter']);
$routes->get('role/tambah', 'Admin\Role::tambah', ['filter' => 'authFilter']);
$routes->post('role/simpan', 'Admin\Role::simpan', ['filter' => 'authFilter']);
$routes->get('role/edit/(:any)', 'Admin\Role::edit/$1', ['filter' => 'authFilter']);
$routes->get('role/delete/(:any)', 'Admin\Role::delete/$1', ['filter' => 'authFilter']);

// untuk menu
$routes->get('menu', 'Admin\Menu::index', ['filter' => 'authFilter']);
$routes->post('menu/datatablesource', 'Admin\Menu::datatablesource', ['filter' => 'authFilter']);
$routes->get('menu/tambah', 'Admin\Menu::tambah', ['filter' => 'authFilter']);
$routes->post('menu/simpan', 'Admin\Menu::simpan', ['filter' => 'authFilter']);
$routes->get('menu/edit/(:any)', 'Admin\Menu::edit/$1', ['filter' => 'authFilter']);
$routes->get('menu/delete/(:any)', 'Admin\Menu::delete/$1', ['filter' => 'authFilter']);

// untuk user
$routes->get('user', 'Admin\User::index',  ['filter' => 'authFilter']);
$routes->post('user/datatablesource', 'Admin\User::datatablesource', ['filter' => 'authFilter']);
$routes->post('user/cek_status_email', 'Admin\User::cek_status_email', ['filter' => 'authFilter']);
$routes->post('user/cek_status_hp', 'Admin\User::cek_status_hp', ['filter' => 'authFilter']);
$routes->get('user/tambah', 'Admin\User::tambah', ['filter' => 'authFilter']);
$routes->post('user/simpan', 'Admin\User::simpan', ['filter' => 'authFilter']);
$routes->get('user/edit/(:any)', 'Admin\User::edit/$1',  ['filter' => 'authFilter']);
$routes->get('user/delete/(:any)', 'Admin\User::delete/$1', ['filter' => 'authFilter']);
