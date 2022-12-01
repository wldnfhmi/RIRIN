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
| When you set this option to TRUE, it will replace ALL dashes with
| underscores in the controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['api/mahasiswa']='api/GetMahasiswa/index';
$route['api/mahasiswa/nim/(:any)']='api/GetMahasiswa/MahasiswaById/$1';
$route['api/mahasiswa/add']='api/GetMahasiswa/AddMahasiswa';
$route['api/mahasiswa/update/(:any)']='api/GetMahasiswa/UpdateMahasiswa/$1';
$route['api/mahasiswa/delete/(:any)']='api/GetMahasiswa/DeleteMahasiswa/$1';

// 
$route['api/tas']='api/GetTas/index';
$route['api/tas/kode/(:any)']='api/GetTas/TasByKode/$1';
$route['api/tas/merk/(:any)']='api/GetTas/TasByMerk/$1';
$route['api/tas/size/(:any)']='api/GetTas/TasBySize/$1';
$route['api/tas/price]/(:any)']='api/GetTas/TasByPrice/$1';

// 
$route['api/tas/add']='api/GetTas/AddTas';

// 
$route['api/tas/update/(:any)']='api/GetTas/UpdateTas/$1';

// 
$route['api/tas/delete/(:any)']='api/GetTas/DeleteTas/$1';