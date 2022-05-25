<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// http://localhost/crudmysqlcodeigniter/

$route['default_controller'] = 'welcome';
$route['rol_externos'] = 'rol_externo/Main';

$route['nuevo_rol_externo'] = 'rol_externo/Add';
$route['nuevo_rol_externo/save'] = 'rol_externo/Add/save';

$route['rol_externo/(:num)'] = 'rol_externo/Edit/index/$1';
$route['rol_externo/update/(:num)'] = 'rol_externo/Edit/update/$1';

$route['rol_externo/delete/(:num)'] = 'rol_externo/Main/delete/$1';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
