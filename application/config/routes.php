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

//--------------------------------TIPOS DE EQUIPOS-------------------------
$route['tipos_equipos'] = 'amsa/tipos_equipos';

$route['nuevo_tipos_equipos'] = 'amsa/tipos_equipos/new';
$route['nuevo_tipos_equipos/guardar'] = 'amsa/tipos_equipos/create';

$route['editar_tipos_equipos/(:num)'] = 'amsa/tipos_equipos/edit/$1';
$route['editar_tipos_equipos/modificar/(:num)'] = 'amsa/tipos_equipos/update/$1';

$route['eliminar_tipos_equipos/(:num)'] = 'amsa/tipos_equipos/delete/$1';

$route['amsa/tipos_equipos/exito'] = 'amsa/tipos_equipos/delete/$1';





