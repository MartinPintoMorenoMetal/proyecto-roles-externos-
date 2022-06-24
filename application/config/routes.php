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

//--------------------------------TIPOS DE MOVIMIENTOS-------------------------
$route['tipos_movimientos'] = 'amsa/tipos_movimientos';

$route['nuevo_tipos_movimientos'] = 'amsa/tipos_movimientos/new';
$route['nuevo_tipos_movimientos/guardar'] = 'amsa/tipos_movimientos/create';

$route['editar_tipos_movimientos/(:num)'] = 'amsa/tipos_movimientos/edit/$1';
$route['editar_tipos_movimientos/modificar/(:num)'] = 'amsa/tipos_movimientos/update/$1';

$route['eliminar_tipos_movimientos/(:num)'] = 'amsa/tipos_movimientos/delete/$1';

$route['amsa/tipos_movimientos/exito'] = 'amsa/tipos_movimientos/delete/$1';

//--------------------------------PERFILES EXTERNOS-------------------------

$route['perfiles_externos'] = 'amsa/perfiles_externos';

$route['nuevo_perfiles_externos'] = 'amsa/perfiles_externos/new';
$route['nuevo_perfiles_externos/guardar'] = 'amsa/perfiles_externos/create';

$route['editar_perfiles_externos/(:num)'] = 'amsa/perfiles_externos/edit/$1';
$route['editar_perfiles_externos/modificar/(:num)'] = 'amsa/perfiles_externos/update/$1';

$route['eliminar_perfiles_externos/(:num)'] = 'amsa/perfiles_externos/delete/$1';

$route['amsa/perfiles_externos/exito'] = 'amsa/perfiles_externos/delete/$1';

//--------------------------------usuarios externos-------------------------

$route['usuarios_externos'] = 'amsa/usuarios_externos';

$route['nuevo_usuarios_externos'] = 'amsa/usuarios_externos/new';
$route['nuevo_usuarios_externos/guardar'] = 'amsa/usuarios_externos/create';

$route['editar_usuarios_externos/(:num)'] = 'amsa/usuarios_externos/edit/$1';
$route['editar_usuarios_externos/modificar/(:num)'] = 'amsa/usuarios_externos/update/$1';

$route['eliminar_usuarios_externos/(:num)'] = 'amsa/usuarios_externos/delete/$1';

$route['amsa/usuarios_externos/exito'] = 'amsa/usuarios_externos/delete/$1';

//--------------------------------servicios_suministros_estrategicos-------------------------

$route['servicios_suministros_estrategicos'] = 'amsa/servicios_suministros_estrategicos';

//--------------------------------turnos-------------------------

$route['turnos'] = 'amsa/turnos';

$route['nuevo_turnos'] = 'amsa/turnos/new';
$route['nuevo_turnos/guardar'] = 'amsa/turnos/create';

$route['editar_turnos/(:num)'] = 'amsa/turnos/edit/$1';
$route['editar_turnos/modificar/(:num)'] = 'amsa/turnos/update/$1';

$route['eliminar_turnos/(:num)'] = 'amsa/turnos/delete/$1';

$route['amsa/turnos/exito'] = 'amsa/turnos/delete/$1';











