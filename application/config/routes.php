<?php
defined('BASEPATH') OR exit('No direct script access allowed');


// AUTH ROUTES
$route['auth/logout']['POST'] = 'auth/logout';

// ADMIN RUOTES
$route['admin'] = 'AdminController/index';
$route['admin/login'] = 'AdminController/login';
$route['tigaraksa'] = 'IndexController/index';


// CRUD ADMIN HOME
$route['admin/cms/home'] = 'AdminHomeController/index';
$route['admin/cms/home/add-slider']['POST'] = 'AdminHomeController/addSlider';
$route['admin/cms/home/edit-slider/(:any)']['GET'] = 'AdminHomeController/editSlider/$1';
$route['admin/cms/home/update-slider/(:any)']['POST'] = 'AdminHomeController/updateSlider/$1';
$route['admin/cms/home/delete-slider/(:any)']['POST'] = 'AdminHomeController/deleteSlider/$1';

// CRUD ARSIP
$route['admin/arsip'] = 'ArsipController/arsip';
$route['admin/arsip/addArsip']['POST'] = 'ArsipController/addArsip';
$route['admin/arsip/editArsip/(:any)']['GET'] = 'ArsipController/editArsip/$1';
$route['admin/arsip/updateArsip/(:any)']['POST'] = 'ArsipController/updateArsip/$1';
$route['admin/arsip/deleteArsip/(:any)']['POST'] = 'ArsipController/deleteArsip/$1';

// DASHBOARD ROUTES
$route['default_controller'] = 'DashboardController';
$route['dosen'] = 'DashboardController/dosen';
$route['penelitian'] = 'DashboardController/penelitian';
$route['pengmas'] = 'DashboardController/pengmas';
$route['aset-lab'] = 'DashboardController/asset_lab';
$route['info-publikasi'] = 'DashboardController/info_publikasi';
$route['arsip'] = 'DashboardController/arsip';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['about'] = 'DashboardController/about';
$route['company'] = 'DashboardController/company';
$route['contact'] = 'DashboardController/contact';
$route['produsen'] = 'DashboardController/produsen';

