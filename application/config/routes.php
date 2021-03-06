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
|	http://codeigniter.com/user_guide/general/routing.html
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
*/#
$route['default_controller'] = 'home/selectlanguages';
$route['404_override'] = '/home/not_found';
$route['translate_uri_dashes'] = TRUE;

//$route['/admin'] = '/admin/dashboard';
//$route['admin/(:any)'] = 'admin/$1';
$route['richfilemanager/(:any)'] = 'admin/richfilemanager/\$1';

$route['media/(:any)'] = 'media/resize/$1';

//Clear Cache
$route['^(\w{2})/clearcache'] = 'home/clearcache';

$route['^(\w{2})/admin'] = '/admin/dashboard';

$route['^(\w{2})/(gioi-thieu|about-us)'] = "/pages/index/$2";
$route['^(\w{2})/(quy-trinh-lam-viec|procedure)'] = "/pages/index/$2";

$route['^(\w{2})/(category|danh-muc)-(:any)'] = "/articles/category/$3";
$route['^(\w{2})/(category|danh-muc)-(:any)/(:num)'] = "/articles/category/$3/$4";

$route['^(\w{2})/(home|trang-chu)'] = "/home";
$route['^(\w{2})/blogs'] = "/articles";
$route['^(\w{2})/blogs/(:num)'] = "/articles/index/$2";
$route['^(\w{2})/(detail|chi-tiet)-(:any)'] = "/articles/detail/$3";

$route['^(\w{2})/(dich-vu|services)'] = '/services';
$route['^(\w{2})/(dich-vu|services)-(:any)'] = "/services/detail/$3";

$route['^(\w{2})/(du-an|projects)'] = '/projects';
$route['^(\w{2})/(du-an|project)-(:any)'] = '/projects/detail/$3';

$route['^(\w{2})/(member)-(:any)'] = '/teams/details/$3';

$route['^(\w{2})/assets^(.*)'] = '/assets$2';
$route['^(\w{2})/api/^(.*)'] = '/api/$2';
$route['^(\w{2})/filenamager/^(.*)'] = '/filemanager/$2';


$route['^(\w{2})/(contact|contact-us|lien-he)'] = 'pages/contact';

$route['^(\w{2})/(.*)'] = '$2';

$route['^(\w{2})$'] = $route['default_controller'];

/*for modules*/
