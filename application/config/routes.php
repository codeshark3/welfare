<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// add new entry page
$route['entries'] = 'entries/view_entry';
$route['entries/fetch'] = 'entries/fetch';
$route['entries/create']  ='entries/create';
//details page
$route['entries/update'] = 'entries/update';
$route['entries/approval'] = 'entries/approval';

$route['entries/(:any)'] = 'entries/view_detail/$1';
//view entries page
$route['entries'] = 'entries/view_entry';
$route['ajaxsearch'] = 'ajaxsearch/index';

$route['printpdf'] = 'printpdf/index';
//bill tracking
// $route['tracking/create'] = 'bill/index';
// $route['tracking/view']= 'bill/view_bill';
// //$route['bill/fetch']= 'bill/fetch';
// $route['tracking/update'] = 'bill/update';
// //$route['bill/edit'] = 'bill/edit';
// $route['tracking/(:any)'] = 'bill/bill_detail/$1';

$route['reports'] = 'reports/view_reports';
$route['reports/fetch'] = 'reports/fetch';

$route['tracking/create'] = 'bill/create_bill';
$route['tracking']= 'bill/view_bill';
$route['bill/fetch'] = 'bill/fetch';
$route['bill/update'] = 'bill/update';
$route['tracking/edit/(:any)'] = 'bill/edit/$1';
$route['tracking/(:any)'] = 'bill/bill_detail/$1';

// route['bill/create'] = 'bill/create_bill';
// $route['tracking']= 'bill/view_bill';
// $route['bill/fetch'] = 'bill/fetch';
// $route['bill/update'] = 'bill/update';
// $route['bill/approval'] = 'bill/approval';
// $route['bill/(:any)'] = 'bill/bill_detail/$1';



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
