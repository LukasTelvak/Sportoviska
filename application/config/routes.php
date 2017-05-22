<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['zakaznici/(:any)'] = 'zakaznici/view/$1';
$route['default_controller'] = 'pages/view';
$route['zakaznici'] = 'zakaznici/index';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
