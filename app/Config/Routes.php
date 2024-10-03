<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Auth::login');

$routes->get('auth/login', 'Auth::login');
$routes->post('auth/login_action', 'Auth::login_action'); 

$routes->get('auth/registration', 'Auth::registration');
$routes->post('auth/registration_action', 'Auth::registration_action');

// siswa
$routes->get('dashboard', 'Dashboard::index'); 
$routes->get('siswa/nilai', 'Nilai::index');
$routes->get('siswa/jadwal', 'Jadwal::index');

// guru
$routes->get('kelola-nilai', 'Nilai::kelolaNilaiGuru');

// Admin
$routes->get('kelola-guru', 'ManajemenGuru::kelolaGuru');
$routes->get('kelola-siswa', 'ManajemenSiswa::kelolaSiswa');




