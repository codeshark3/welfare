<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// add new entry page
$route['entries/create']  ='entries/create';
//details page
$route['entries/update'] = 'entries/update';
$route['entries/(:any)'] = 'entries/view_detail/$1';
//view entries page
$route['entries'] = 'entries/view_entry';
$route['ajaxsearch'] = 'ajaxsearch/index';


//bill tracking
$route['tracking/create'] = 'bill/index';
$route['tracking/view']= 'bill/view_bill';
$route['tracking/update'] = 'tracking/update';
$route['tracking/(:any)'] = 'tracking/bill_detail/$1';




$route['dashboard'] = 'dashboard/view_dashboard';

//accounts
$route['accounts'] = 'pages/accounts';

//login
$route['login']='users/login';

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
//$route['login'] = 'login_con/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
