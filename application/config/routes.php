<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['zakaznici/create'] = 'zakaznici/create';
$route['zakaznici/update'] = 'zakaznici/update';
$route['zakaznici/(:any)'] = 'zakaznici/view/$1';
$route['cennik/create'] = 'cennik/create';
$route['cennik/update'] = 'cennik/update';
$route['cennik/(:any)'] = 'cennik/view/$1';
$route['vybavenie/create'] = 'vybavenie/create';
$route['vybavenie/update'] = 'vybavenie/update';
$route['vybavenie/(:any)'] = 'vybavenie/view/$1';
$route['sportovisko/create'] = 'sportovisko/create';
$route['sportovisko/update'] = 'sportovisko/update';
$route['sportovisko/(:any)'] = 'sportovisko/view/$1';
$route['rezervacia/create'] = 'rezervacia/create';
$route['rezervacia/update'] = 'rezervacia/update';
$route['rezervacia/(:any)'] = 'rezervacia/view/$1';
$route['default_controller'] = 'pages/view';
$route['zakaznici'] = 'zakaznici/index';
$route['cennik'] = 'cennik/index';
$route['vybavenie'] = 'vybavenie/index';
$route['sportovisko'] = 'sportovisko/index';
$route['rezervacia'] = 'rezervacia/index';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
