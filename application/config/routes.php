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
$route['default_controller'] = 'dashboard';
$route['dosen'] = 'dashboard/dosen';
$route['penelitian'] = 'dashboard/penelitian';
$route['pengmas'] = 'dashboard/pengmas';
$route['aset-lab'] = 'dashboard/asset_lab';
$route['info-publikasi'] = 'dashboard/info_publikasi';
$route['arsip'] = 'dashboard/arsip';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['about'] = 'dashboard/about';
$route['company'] = 'dashboard/company';

