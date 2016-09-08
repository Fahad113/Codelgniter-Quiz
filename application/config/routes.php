<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
//$route['index/(:any)'] = 'student/view';
//$route['index'] = 'student';
//$route['(:any)'] = 'pages/view/$1';
$route['student/update'] = 'student_ctrl/update';
$route['student/delete'] = 'student_ctrl/delete';
$route['student/create'] = 'student_ctrl/create';
////------------
$route['project/update_emp_record'] = 'project_ctrl/update_employee';
$route['project/insert_emp_record'] = 'project_ctrl/create';
$route['student/insert_emp_record'] = 'project_ctrl/insert_emp_record';


$route['default_controller'] = 'project_ctrl';
//$route['students/(:any)'] = 'student_ctrl/view/$1';
//$route['student/(:any)'] = 'student_ctrl/view/$1';
$route['alpp/(:any)'] = 'project_ctrl/view/$1';
$route['alpp_emp/(:any)'] = 'project_ctrl/view/$1';
//$route['default_controller'] = "news";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */