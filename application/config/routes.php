
<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
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
*/
$route['default_controller'] = 'welcome/PaginaPrincipal';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['login'] = 'welcome/login';
$route['login/recuperar'] = 'welcome/restablecerPassword';
$route['login/restablecer/user/(:any)'] = 'welcome/restablecerPassword_view';

$route['registro/activaciones'] = 'welcome/registro';
$route['registro'] = 'welcome/correo';

$route['cliente/inicio'] = 'welcome/index';
$route['cliente/catalogo'] = 'catalogo/index';
$route['cliente/catalogo/ver'] = 'catalogo/mostrarcatalogo';
$route['cliente/catalogo/ver/detalles'] = 'catalogo/detallesCatalogo';

$route['cliente/mascotas/registro'] = 'catalogo/registromascota';
$route['cliente/mascotas/detalle'] = 'catalogo/detallesCatalogo';
$route['cliente/mascotas/editar'] = 'catalogo/editarmascota';
$route['cliente/mascotas/eliminar'] = 'catalogo/eliminarmascota';

$route['cliente/ajustes'] = 'catalogo/ajustescliente';

$route['cliente/citas'] = 'Controllers_Cita/Citacontroller/indexcita';
$route['cliente/citas/registro'] = 'Controllers_Cita/Citacontroller/registrocita';

$route['cliente/productos'] = 'Controllers_Producto/Productocontroller/indexproducto';

$route['veterinario/inicio'] = 'Controllers_Vet/Vetcontroller/indexveterinario';
$route['veterinario/registro'] = 'Controllers_Vet/Vetcontroller/registroveterinario';
$route['veterinario/detalle'] = 'Controllers_Vet/Vetcontroller/detallesvet';
