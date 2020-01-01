<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-12-31 09:26:57 --> File not found: {0}
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Files\File.php(74): CodeIgniter\Files\Exceptions\FileNotFoundException::forFileNotFound('')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Images\Handlers\BaseHandler.php(162): CodeIgniter\Files\File->__construct('', true)
#2 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\OptimizarImagen.php(10): CodeIgniter\Images\Handlers\BaseHandler->withFile('')
#3 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(111): App\Controllers\OptimizarImagen->__construct(Object(CodeIgniter\HTTP\Files\UploadedFile), '1577806016-King...', 'public/cliente/...', 800, 600)
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->editarHabitacion()
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-31 09:27:56 --> unlink(public/cliente/images/habitacion/1577765023-King-Pena.jpg): No such file or directory
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'unlink(public/c...', 'C:\\xampp\\htdocs...', 106, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(106): unlink('public/cliente/...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->editarHabitacion()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-12-31 09:30:17 --> unlink(public/cliente/images/habitacion/1577765023-King-Pena.jpg): No such file or directory
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'unlink(public/c...', 'C:\\xampp\\htdocs...', 107, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(107): unlink('public/cliente/...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->editarHabitacion()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-12-31 09:30:31 --> File not found: {0}
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Files\File.php(74): CodeIgniter\Files\Exceptions\FileNotFoundException::forFileNotFound('')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Images\Handlers\BaseHandler.php(162): CodeIgniter\Files\File->__construct('', true)
#2 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\OptimizarImagen.php(10): CodeIgniter\Images\Handlers\BaseHandler->withFile('')
#3 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(112): App\Controllers\OptimizarImagen->__construct(Object(CodeIgniter\HTTP\Files\UploadedFile), '1577806231-King...', 'public/cliente/...', 800, 600)
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->editarHabitacion()
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-31 09:30:42 --> File not found: {0}
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Files\File.php(74): CodeIgniter\Files\Exceptions\FileNotFoundException::forFileNotFound('')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Images\Handlers\BaseHandler.php(162): CodeIgniter\Files\File->__construct('', true)
#2 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\OptimizarImagen.php(10): CodeIgniter\Images\Handlers\BaseHandler->withFile('')
#3 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(112): App\Controllers\OptimizarImagen->__construct(Object(CodeIgniter\HTTP\Files\UploadedFile), '1577806242-King...', 'public/cliente/...', 800, 600)
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->editarHabitacion()
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-31 09:36:13 --> File not found: {0}
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Files\File.php(74): CodeIgniter\Files\Exceptions\FileNotFoundException::forFileNotFound('')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Images\Handlers\BaseHandler.php(162): CodeIgniter\Files\File->__construct('', true)
#2 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\OptimizarImagen.php(10): CodeIgniter\Images\Handlers\BaseHandler->withFile('')
#3 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(112): App\Controllers\OptimizarImagen->__construct(Object(CodeIgniter\HTTP\Files\UploadedFile), '1577806573-King...', 'public/cliente/...', 800, 600)
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->editarHabitacion()
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-31 09:38:40 --> File not found: {0}
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Files\File.php(74): CodeIgniter\Files\Exceptions\FileNotFoundException::forFileNotFound('')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Images\Handlers\BaseHandler.php(162): CodeIgniter\Files\File->__construct('', true)
#2 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\OptimizarImagen.php(10): CodeIgniter\Images\Handlers\BaseHandler->withFile('')
#3 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(112): App\Controllers\OptimizarImagen->__construct(Object(CodeIgniter\HTTP\Files\UploadedFile), '1577806719-King...', 'public/cliente/...', 800, 600)
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->editarHabitacion()
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-31 09:40:08 --> File not found: {0}
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Files\File.php(74): CodeIgniter\Files\Exceptions\FileNotFoundException::forFileNotFound('')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Images\Handlers\BaseHandler.php(162): CodeIgniter\Files\File->__construct('', true)
#2 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\OptimizarImagen.php(10): CodeIgniter\Images\Handlers\BaseHandler->withFile('')
#3 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(112): App\Controllers\OptimizarImagen->__construct(Object(CodeIgniter\HTTP\Files\UploadedFile), '1577806808-King...', 'public/cliente/...', 800, 600)
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->editarHabitacion()
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-31 09:49:59 --> unlink(public/cliente/images/habitacion/1577806791-King-Pena.jpg): No such file or directory
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'unlink(public/c...', 'C:\\xampp\\htdocs...', 108, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(108): unlink('public/cliente/...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->editarHabitacion()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-12-31 09:52:36 --> File not found: {0}
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Files\File.php(74): CodeIgniter\Files\Exceptions\FileNotFoundException::forFileNotFound('')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Images\Handlers\BaseHandler.php(162): CodeIgniter\Files\File->__construct('', true)
#2 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\OptimizarImagen.php(10): CodeIgniter\Images\Handlers\BaseHandler->withFile('')
#3 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(113): App\Controllers\OptimizarImagen->__construct(Object(CodeIgniter\HTTP\Files\UploadedFile), '1577807556-King...', 'public/cliente/...', 800, 600)
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->editarHabitacion()
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-31 10:04:58 --> syntax error, unexpected '}'
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(801): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-31 10:23:28 --> syntax error, unexpected 'as' (T_AS), expecting ';'
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Router\Router.php(192): CodeIgniter\Router\Router->autoRoute('AdminHabitacion...')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(725): CodeIgniter\Router\Router->handle('AdminHabitacion...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(298): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-31 10:24:02 --> Argument 1 passed to encode_php_tags() must be of the type string, array given, called in C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacionMasPedida.php on line 44
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacionMasPedida.php(44): encode_php_tags(Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacionMasPedida->nuevoHabitacion()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacionMasPedida))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-31 10:24:23 --> Argument 1 passed to CodeIgniter\Security\Security::sanitizeFilename() must be of the type string, array given, called in C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacionMasPedida.php on line 44
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacionMasPedida.php(44): CodeIgniter\Security\Security->sanitizeFilename(Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacionMasPedida->nuevoHabitacion()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacionMasPedida))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-31 10:38:37 --> Undefined variable: adminHabitacionMasPedidaModelo
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacionMasPedida.php(63): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 63, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacionMasPedida->editar()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacionMasPedida))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-31 10:42:21 --> Undefined index: puesto
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Views\admin\habitacionMasPedida\editar.php(47): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 47, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('admin/habitacio...', Array, NULL)
#3 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacionMasPedida.php(69): view('admin/habitacio...', Array)
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacionMasPedida->editar()
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacionMasPedida))
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-31 10:50:23 --> Deletes are not allowed unless they contain a "where" or "like" clause.
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Model.php(928): CodeIgniter\Database\BaseBuilder->delete()
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Models\AdminHabitacionMasPedidaModelo.php(52): CodeIgniter\Model->delete()
#2 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacionMasPedida.php(91): App\Models\AdminHabitacionMasPedidaModelo->eliminar()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacionMasPedida->editarHabitacion()
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacionMasPedida))
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-12-31 11:19:03 --> syntax error, unexpected ')'
#0 C:\xampp\htdocs\hotelplazalosreyes\system\View\View.php(502): CodeIgniter\View\View->render('cliente/habitac...', NULL, NULL)
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Views\cliente\inicio\index.php(8): CodeIgniter\View\View->include('cliente/habitac...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#3 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('cliente/inicio/...', Array, NULL)
#4 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Inicio.php(19): view('cliente/inicio/...', Array)
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Inicio->index()
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Inicio))
#7 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-12-31 11:20:35 --> syntax error, unexpected ')'
#0 C:\xampp\htdocs\hotelplazalosreyes\system\View\View.php(502): CodeIgniter\View\View->render('cliente/habitac...', NULL, NULL)
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Views\cliente\inicio\index.php(8): CodeIgniter\View\View->include('cliente/habitac...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#3 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('cliente/inicio/...', Array, NULL)
#4 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Inicio.php(19): view('cliente/inicio/...', Array)
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Inicio->index()
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Inicio))
#7 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-12-31 12:09:41 --> syntax error, unexpected '}'
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Router\Router.php(192): CodeIgniter\Router\Router->autoRoute('AdminHabitacion...')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(725): CodeIgniter\Router\Router->handle('AdminHabitacion...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(298): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-31 12:09:58 --> Invalid file: {0}
#0 C:\xampp\htdocs\hotelplazalosreyes\system\View\View.php(224): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('AdminHabitacion...')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('AdminHabitacion...', Array, NULL)
#2 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(24): view('AdminHabitacion...', Array)
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->index()
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-12-31 12:10:07 --> Invalid file: {0}
#0 C:\xampp\htdocs\hotelplazalosreyes\system\View\View.php(224): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('AdminHabitacion...')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('AdminHabitacion...', Array, NULL)
#2 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(24): view('AdminHabitacion...', Array)
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->index()
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-12-31 12:11:54 --> Invalid file: {0}
#0 C:\xampp\htdocs\hotelplazalosreyes\system\View\View.php(224): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('AdminHabitacion...')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('AdminHabitacion...', Array, NULL)
#2 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(24): view('AdminHabitacion...', Array)
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->index()
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-12-31 12:16:38 --> Undefined index: servicio
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Views\admin\servicio\index.php(62): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 62, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('admin/servicio/...', Array, NULL)
#3 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminServicio.php(22): view('admin/servicio/...', Array)
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminServicio->index()
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminServicio))
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-31 12:38:03 --> Deletes are not allowed unless they contain a "where" or "like" clause.
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Model.php(928): CodeIgniter\Database\BaseBuilder->delete()
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Models\AdminServicioModelo.php(45): CodeIgniter\Model->delete('0')
#2 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminServicio.php(120): App\Models\AdminServicioModelo->eliminar('0')
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminServicio->eliminar('0')
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminServicio))
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-12-31 12:39:32 --> Deletes are not allowed unless they contain a "where" or "like" clause.
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Model.php(928): CodeIgniter\Database\BaseBuilder->delete()
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Models\AdminServicioModelo.php(45): CodeIgniter\Model->delete('0')
#2 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminServicio.php(120): App\Models\AdminServicioModelo->eliminar('0')
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminServicio->eliminar('0')
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminServicio))
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
