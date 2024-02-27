<?php
defined('BASEPATH') OR exit('No direct script access allowed');


// AUTH ROUTES
$route['auth/logout']['POST'] = 'auth/logout';

// ADMIN RUOTES
$route['admin'] = 'AdminController/index';
$route['admin/login'] = 'AdminController/login';

$route['tigaraksa'] = 'IndexController/index';
// CRUD DOSEN
$route['admin/dosens'] = 'AdminController/dosens';
$route['admin/dosens/addDosen']['POST'] = 'AdminController/addDosen';
$route['admin/dosens/editDosen/(:any)']['GET'] = 'AdminController/editDosen/$1';
$route['admin/dosens/updateDosen/(:any)']['POST'] = 'AdminController/updateDosen/$1';
$route['admin/dosens/deleteDosen/(:any)']['POST'] = 'AdminController/deleteDosen/$1';

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

