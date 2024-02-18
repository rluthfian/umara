<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

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

