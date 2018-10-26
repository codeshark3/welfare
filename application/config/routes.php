<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// add new entry page
$route['entries/create']  ='entries/create';
//details page
$route['entries/(:any)'] = 'entries/view_detail/$1';
//view entries page
$route['entries'] = 'entries/view_entry';


$route['accounts'] = 'pages/accounts';

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['login'] = 'login/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
