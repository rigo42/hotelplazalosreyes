<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-12-29 16:40:10 --> Call to undefined function form_open()
#0 C:\xampp\htdocs\hotelplazalosreyes\system\View\View.php(236): include()
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('cliente/login/i...', Array, NULL)
#2 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Login.php(14): view('cliente/login/i...')
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Login->index()
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Login))
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-12-29 18:05:48 --> syntax error, unexpected '$this' (T_VARIABLE)
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Models\\Logi...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Models\\Logi...')
#3 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Login.php(10): spl_autoload_call('App\\Models\\Logi...')
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(822): App\Controllers\Login->__construct()
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(333): CodeIgniter\CodeIgniter->createController()
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-29 18:06:06 --> Undefined property: App\Controllers\Login::$security
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Login.php(19): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 19, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Login->iniciarSesion()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Login))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-29 18:13:32 --> Undefined property: App\Controllers\Login::$security
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Login.php(19): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 19, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Login->iniciarSesion()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Login))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-29 18:16:33 --> Argument 1 passed to encode_php_tags() must be of the type string, null given, called in C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Login.php on line 21
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Login.php(21): encode_php_tags(NULL)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Login->iniciarSesion()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Login))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-29 18:19:51 --> Undefined property: App\Controllers\Login::$security
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Login.php(19): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 19, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Login->iniciarSesion()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Login))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-29 18:21:24 --> Undefined property: App\Controllers\Login::$security
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Login.php(19): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 19, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Login->iniciarSesion()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Login))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-29 18:21:55 --> syntax error, unexpected '}'
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Router\Router.php(192): CodeIgniter\Router\Router->autoRoute('login/iniciarSe...')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(725): CodeIgniter\Router\Router->handle('login/iniciarSe...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(298): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-29 18:22:05 --> Undefined property: App\Controllers\Login::$security
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Login.php(20): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 20, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Login->iniciarSesion()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Login))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-29 18:28:24 --> Undefined property: App\Controllers\Login::$security
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Login.php(19): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 19, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Login->iniciarSesion()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Login))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-29 18:28:38 --> Undefined property: App\Controllers\Login::$security
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Login.php(19): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 19, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Login->iniciarSesion()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Login))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-29 18:38:57 --> syntax error, unexpected 'print_r' (T_STRING), expecting ';' or ','
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(801): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-29 18:46:49 --> Array to string conversion
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Login.php(37): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 37, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Login->iniciarSesion()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Login))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-29 21:22:07 --> syntax error, unexpected ';', expecting ']'
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(801): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-29 21:22:20 --> Undefined property: App\Controllers\AdminHabitacion::$session
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(11): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(822): App\Controllers\AdminHabitacion->__construct()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(333): CodeIgniter\CodeIgniter->createController()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-29 21:35:28 --> Unknown column 'id_empresa' in 'order clause'
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\hotelplazalosreyes\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 C:\xampp\htdocs\hotelplazalosreyes\system\Model.php(437): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\hotelplazalosreyes\app\Models\AdminHabitacionModelo.php(32): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(23): App\Models\AdminHabitacionModelo->mostrar()
#7 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->index()
#8 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#9 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2019-12-29 21:35:47 --> Unknown column 'id_empresa' in 'order clause'
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\hotelplazalosreyes\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 C:\xampp\htdocs\hotelplazalosreyes\system\Model.php(437): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\hotelplazalosreyes\app\Models\AdminHabitacionModelo.php(32): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(23): App\Models\AdminHabitacionModelo->mostrar()
#7 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->index()
#8 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#9 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2019-12-29 22:06:35 --> Undefined property: App\Controllers\AdminHabitacion::$session
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(11): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(822): App\Controllers\AdminHabitacion->__construct()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(333): CodeIgniter\CodeIgniter->createController()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-29 22:07:04 --> Undefined property: App\Controllers\AdminHabitacion::$session
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(11): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(822): App\Controllers\AdminHabitacion->__construct()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(333): CodeIgniter\CodeIgniter->createController()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-29 22:07:48 --> syntax error, unexpected '$this' (T_VARIABLE), expecting ';' or ','
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(801): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-29 22:07:58 --> Undefined property: App\Controllers\AdminHabitacion::$session
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(12): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(822): App\Controllers\AdminHabitacion->__construct()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(333): CodeIgniter\CodeIgniter->createController()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-29 22:09:58 --> Unknown column 'id_empresa' in 'order clause'
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\hotelplazalosreyes\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 C:\xampp\htdocs\hotelplazalosreyes\system\Model.php(437): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\hotelplazalosreyes\app\Models\AdminHabitacionModelo.php(32): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(23): App\Models\AdminHabitacionModelo->mostrar()
#7 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->index()
#8 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#9 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2019-12-29 22:13:19 --> Unknown column 'id_empresa' in 'order clause'
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT *\nFROM `...')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT *\nFROM `...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT *\nFROM `...')
#3 C:\xampp\htdocs\hotelplazalosreyes\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT *\nFROM `...', Array, false)
#4 C:\xampp\htdocs\hotelplazalosreyes\system\Model.php(437): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\hotelplazalosreyes\app\Models\AdminHabitacionModelo.php(32): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(24): App\Models\AdminHabitacionModelo->mostrar()
#7 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->index()
#8 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#9 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2019-12-29 22:17:22 --> Undefined property: App\Controllers\AdminHabitacion::$session
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(11): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(822): App\Controllers\AdminHabitacion->__construct()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(333): CodeIgniter\CodeIgniter->createController()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-29 22:21:44 --> Undefined property: App\Controllers\AdminHabitacion::$session
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(11): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(822): App\Controllers\AdminHabitacion->__construct()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(333): CodeIgniter\CodeIgniter->createController()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-29 22:22:12 --> Call to a member function mostrar() on null
#0 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->index()
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-12-29 22:31:02 --> Call to a member function mostrar() on null
#0 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->index()
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-12-29 22:36:54 --> Call to a member function mostrar() on null
#0 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->index()
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-12-29 22:38:16 --> Call to undefined method App\Controllers\AdminHabitacion::session()
#0 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->index()
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-12-29 22:46:52 --> Call to undefined method App\Controllers\AdminHabitacion::session()
#0 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->index()
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-12-29 22:50:40 --> Undefined property: App\Controllers\AdminHabitacion::$session
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(10): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(822): App\Controllers\AdminHabitacion->__construct()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(333): CodeIgniter\CodeIgniter->createController()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-29 23:14:06 --> Encrypter needs a starter key.
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Encryption\Encryption.php(157): CodeIgniter\Encryption\Exceptions\EncryptionException::forNeedsStarterKey()
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Config\Services.php(236): CodeIgniter\Encryption\Encryption->initialize(Object(Config\Encryption))
#2 C:\xampp\htdocs\hotelplazalosreyes\app\Views\admin\habitacion\nuevo.php(33): CodeIgniter\Config\Services::encrypter()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#4 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('admin/habitacio...', Array, NULL)
#5 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(25): view('admin/habitacio...')
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevo()
#7 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#8 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
