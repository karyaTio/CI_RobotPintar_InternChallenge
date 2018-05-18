<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Robot
$route['robot'] = 'robots/index';
$route['robot/create'] = 'robots/create';
$route['robot/ubah/(:any)'] = 'robots/edit/$1';
$route['robot/update'] = 'robots/update';
$route['robot/hapus/(:any)'] = 'robots/delete/$1';
$route['robot/(:any)'] = 'robots/show/$1';

// Usability
$route['usability'] = 'usability/index';
$route['usability/create'] = 'usability/create';

// Merek
$route['brand'] = 'brand/index';
$route['brand/create'] = 'brand/create';

// Admin
$route['admin/overview'] = 'admin/overview';
$route['admin/data'] = 'admin/data';
$route['admin/register'] = 'admin/register';
$route['admin/login'] = 'admin/login';
$route['admin/logout'] = 'admin/logout';

$route['default_controller'] = 'Robots/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
