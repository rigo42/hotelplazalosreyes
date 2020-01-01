<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-12-30 10:32:42 --> syntax error, unexpected 'return' (T_RETURN)
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Models\\Admi...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Models\\Admi...')
#3 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(10): spl_autoload_call('App\\Models\\Admi...')
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(822): App\Controllers\AdminHabitacion->__construct()
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(333): CodeIgniter\CodeIgniter->createController()
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-30 10:33:00 --> syntax error, unexpected ')', expecting ';'
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Models\\Admi...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Models\\Admi...')
#3 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(10): spl_autoload_call('App\\Models\\Admi...')
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(822): App\Controllers\AdminHabitacion->__construct()
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(333): CodeIgniter\CodeIgniter->createController()
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-30 10:33:12 --> Trying to get property 'insert_id' of non-object
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Database\MySQLi\Connection.php(677): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Trying to get p...', 'C:\\xampp\\htdocs...', 677, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Model.php(1671): CodeIgniter\Database\MySQLi\Connection->insertID(Array)
#2 C:\xampp\htdocs\hotelplazalosreyes\app\Models\AdminHabitacionModelo.php(35): CodeIgniter\Model->__call('insertID', Array)
#3 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(50): App\Models\AdminHabitacionModelo->nuevo(Array)
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevoHabitacion()
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-30 10:34:01 --> Trying to get property 'insert_id' of non-object
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Database\MySQLi\Connection.php(677): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Trying to get p...', 'C:\\xampp\\htdocs...', 677, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Model.php(1671): CodeIgniter\Database\MySQLi\Connection->insertID(Array)
#2 C:\xampp\htdocs\hotelplazalosreyes\app\Models\AdminHabitacionModelo.php(35): CodeIgniter\Model->__call('insertID', Array)
#3 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(50): App\Models\AdminHabitacionModelo->nuevo(Array)
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevoHabitacion()
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-30 10:34:29 --> Trying to get property 'insert_id' of non-object
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Database\MySQLi\Connection.php(677): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Trying to get p...', 'C:\\xampp\\htdocs...', 677, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Model.php(1671): CodeIgniter\Database\MySQLi\Connection->insertID(Array)
#2 C:\xampp\htdocs\hotelplazalosreyes\app\Models\AdminHabitacionModelo.php(35): CodeIgniter\Model->__call('insertID', Array)
#3 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(50): App\Models\AdminHabitacionModelo->nuevo(Array)
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevoHabitacion()
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-30 10:54:29 --> syntax error, unexpected 'catch' (T_CATCH)
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Router\Router.php(192): CodeIgniter\Router\Router->autoRoute('AdminHabitacion...')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(725): CodeIgniter\Router\Router->handle('AdminHabitacion...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(298): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-30 10:55:05 --> Class 'App\Controllers\Config\Services' not found
#0 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevoHabitacion()
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-12-30 10:58:28 --> Class 'App\Controllers\Services' not found
#0 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevoHabitacion()
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-12-30 10:59:29 --> Class 'App\Controllers\Services' not found
#0 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevoHabitacion()
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-12-30 11:00:02 --> Class 'App\Controllers\Config\Services' not found
#0 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevoHabitacion()
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-12-30 11:01:53 --> Unable to save the image. Please make sure the image and file directory are writable.
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Images\Handlers\GDHandler.php(344): CodeIgniter\Images\Exceptions\ImageException::forSaveFailed()
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(50): CodeIgniter\Images\Handlers\GDHandler->save('public/cliente/...', 10)
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevoHabitacion()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-12-30 11:16:50 --> Use of undefined constant IMAGETYPE_JPG - assumed 'IMAGETYPE_JPG' (this will throw an Error in a future version of PHP)
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(48): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Use of undefine...', 'C:\\xampp\\htdocs...', 48, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevoHabitacion()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-30 11:18:27 --> Use of undefined constant IMAGETYPE_JPG - assumed 'IMAGETYPE_JPG' (this will throw an Error in a future version of PHP)
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(48): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Use of undefine...', 'C:\\xampp\\htdocs...', 48, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevoHabitacion()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-30 11:18:47 --> imagecreatefrompng(): 'C:\xampp\tmp\php661D.tmp' is not a valid PNG file
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'imagecreatefrom...', 'C:\\xampp\\htdocs...', 422, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Images\Handlers\GDHandler.php(422): imagecreatefrompng('C:\\xampp\\tmp\\ph...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\Images\Handlers\GDHandler.php(274): CodeIgniter\Images\Handlers\GDHandler->createImage()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\Images\Handlers\GDHandler.php(231): CodeIgniter\Images\Handlers\GDHandler->process('resize')
#4 C:\xampp\htdocs\hotelplazalosreyes\system\Images\Handlers\BaseHandler.php(253): CodeIgniter\Images\Handlers\GDHandler->_resize(true)
#5 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(49): CodeIgniter\Images\Handlers\BaseHandler->resize(800, 600, true, 'center')
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevoHabitacion()
#7 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#8 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-30 11:48:41 --> Undefined variable: imagenPrincipal
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(47): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 47, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevoHabitacion()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-30 11:59:46 --> syntax error, unexpected 'new' (T_NEW)
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Router\Router.php(192): CodeIgniter\Router\Router->autoRoute('AdminHabitacion...')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(725): CodeIgniter\Router\Router->handle('AdminHabitacion...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(298): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-30 11:59:58 --> syntax error, unexpected 'OptimizarImagen' (T_STRING)
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Router\Router.php(192): CodeIgniter\Router\Router->autoRoute('AdminHabitacion...')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(725): CodeIgniter\Router\Router->handle('AdminHabitacion...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(298): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-30 12:00:31 --> syntax error, unexpected 'new' (T_NEW)
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Router\Router.php(192): CodeIgniter\Router\Router->autoRoute('AdminHabitacion...')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(725): CodeIgniter\Router\Router->handle('AdminHabitacion...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(298): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-30 12:00:41 --> Undefined variable: dataImagen
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(43): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 43, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevoHabitacion()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-30 12:00:58 --> Undefined variable: dataImagen
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(43): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 43, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevoHabitacion()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-30 12:01:08 --> Undefined offset: 1
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\OptimizarImagen.php(6): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 6, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(47): App\Controllers\OptimizarImagen->__construct(Array)
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevoHabitacion()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-12-30 12:02:29 --> Undefined offset: 0
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\OptimizarImagen.php(6): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 6, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(47): App\Controllers\OptimizarImagen->__construct(Array)
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevoHabitacion()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-12-30 12:33:17 --> Object of class App\Controllers\OptimizarImagen could not be converted to string
#0 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevoHabitacion()
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-12-30 12:34:25 --> Non-static method App\Controllers\OptimizarImagen::optimizar() should not be called statically
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(44): CodeIgniter\Debug\Exceptions->errorHandler(8192, 'Non-static meth...', 'C:\\xampp\\htdocs...', 44, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevoHabitacion()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-30 12:39:57 --> Call to undefined function App\Controllers\OptimizarImagen()
#0 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevoHabitacion()
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-12-30 12:59:46 --> syntax error, unexpected '}', expecting ';'
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(32): spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevoHabitacion()
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-30 13:00:06 --> Undefined variable: archivo
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(43): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 43, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevoHabitacion()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-30 13:04:29 --> Undefined variable: imagen
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\OptimizarImagen.php(12): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(43): App\Controllers\OptimizarImagen->__construct(Object(CodeIgniter\HTTP\Files\UploadedFile), '1577732669-King...', 'public/cliente/...', 800, 600)
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevoHabitacion()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-12-30 14:10:24 --> Invalid argument supplied for foreach()
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(47): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'C:\\xampp\\htdocs...', 47, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevoHabitacion()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-30 14:20:01 --> Undefined index: imagines
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(48): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 48, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevoHabitacion()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-30 14:33:15 --> Undefined variable: idHabitacion
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(60): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 60, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevoHabitacion()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-30 14:34:05 --> Undefined variable: newName
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(73): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 73, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(60): App\Controllers\AdminHabitacion->nuevoHabitacionImagen(1, Array)
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevoHabitacion()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-12-30 14:34:55 --> syntax error, unexpected ';', expecting ']'
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Router\Router.php(192): CodeIgniter\Router\Router->autoRoute('AdminHabitacion...')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(725): CodeIgniter\Router\Router->handle('AdminHabitacion...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(298): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-30 14:46:29 --> Undefined variable: imagenPrincipal
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(53): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 53, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevoHabitacion()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-30 14:46:43 --> Undefined variable: imagenPrincipal
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(53): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 53, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->nuevoHabitacion()
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-30 15:33:24 --> Too few arguments to function App\Controllers\AdminHabitacion::editar(), 0 passed in C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php on line 847 and exactly 1 expected
#0 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->editar()
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-12-30 15:34:13 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'habitacion_imagen FROM habitacion_imagen WHERE id_habitacion = 6 AND fecha_elimi' at line 1
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT * habita...')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * habita...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * habita...')
#3 C:\xampp\htdocs\hotelplazalosreyes\system\Model.php(1671): CodeIgniter\Database\BaseConnection->query('SELECT * habita...')
#4 C:\xampp\htdocs\hotelplazalosreyes\app\Models\AdminHabitacionModelo.php(53): CodeIgniter\Model->__call('query', Array)
#5 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(39): App\Models\AdminHabitacionModelo->imagenes('6')
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->editar('6')
#7 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#8 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-30 15:35:44 --> Array to string conversion
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(45): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 45, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->editar('6')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-30 15:37:01 --> Undefined index: habitacion
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Views\admin\habitacion\editar.php(40): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 40, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('admin/habitacio...', Array, NULL)
#3 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(45): view('admin/habitacio...', Array)
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->editar('6')
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-30 15:37:17 --> Undefined index: habitacion
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Views\admin\habitacion\editar.php(40): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 40, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('admin/habitacio...', Array, NULL)
#3 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(45): view('admin/habitacio...', Array)
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->editar('6')
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-30 17:02:51 --> Undefined offset: 0
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Views\admin\habitacion\editar.php(40): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 40, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('admin/habitacio...', Array, NULL)
#3 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(45): view('admin/habitacio...', Array)
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->editar('85')
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-30 18:07:16 --> syntax error, unexpected 'endfor' (T_ENDFOR)
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('admin/habitacio...', Array, NULL)
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(45): view('admin/habitacio...', Array)
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->editar('6')
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-12-30 18:07:27 --> Cannot use object of type stdClass as array
#0 C:\xampp\htdocs\hotelplazalosreyes\system\View\View.php(236): include()
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('admin/habitacio...', Array, NULL)
#2 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(45): view('admin/habitacio...', Array)
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->editar('6')
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-12-30 18:32:12 --> Cannot use object of type stdClass as array
#0 C:\xampp\htdocs\hotelplazalosreyes\system\View\View.php(236): include()
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('admin/habitacio...', Array, NULL)
#2 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(45): view('admin/habitacio...', Array)
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->editar('6')
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-12-30 18:59:18 --> Too few arguments to function App\Controllers\AdminHabitacion::eliminarImagen(), 1 passed in C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php on line 847 and exactly 2 expected
#0 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->eliminarImagen('5')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-12-30 19:03:26 --> unlink(public/cliente/images/habitacion/1577739917-kingSize4.jpg): No such file or directory
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'unlink(public/c...', 'C:\\xampp\\htdocs...', 111, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(111): unlink('public/cliente/...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->eliminarImagen('8', '1577739917-king...')
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-12-30 19:04:12 --> unlink(public/cliente/images/habitacion/1577739917-kingSize4.jpg): No such file or directory
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'unlink(public/c...', 'C:\\xampp\\htdocs...', 112, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(112): unlink('public/cliente/...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->eliminarImagen('8', '1577739917-king...')
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-12-30 20:18:16 --> Call to undefined function App\Controllers\unlik()
#0 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->editarHabitacion()
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-12-30 21:25:56 --> Call to undefined function App\Controllers\unlik()
#0 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->editarHabitacion()
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-12-30 21:29:22 --> Call to undefined function App\Controllers\unlik()
#0 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->editarHabitacion()
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-12-30 21:33:37 --> Call to undefined function App\Controllers\unlik()
#0 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->editarHabitacion()
#1 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-12-30 21:36:54 --> File not found: {0}
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Files\File.php(74): CodeIgniter\Files\Exceptions\FileNotFoundException::forFileNotFound('')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Images\Handlers\BaseHandler.php(162): CodeIgniter\Files\File->__construct('', true)
#2 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\OptimizarImagen.php(10): CodeIgniter\Images\Handlers\BaseHandler->withFile('')
#3 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(110): App\Controllers\OptimizarImagen->__construct(Object(CodeIgniter\HTTP\Files\UploadedFile), '1577763414-King...', 'public/cliente/...', 800, 600)
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->editarHabitacion()
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-30 21:37:23 --> unlink(public/cliente/images/habitacion/1577739915-King-Size.jpg): No such file or directory
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'unlink(public/c...', 'C:\\xampp\\htdocs...', 105, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(105): unlink('public/cliente/...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->editarHabitacion()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-12-30 21:47:58 --> unlink(public/cliente/images/habitacion/1577739915-King-Size.jpg): No such file or directory
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'unlink(public/c...', 'C:\\xampp\\htdocs...', 106, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\AdminHabitacion.php(106): unlink('public/cliente/...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\AdminHabitacion->editarHabitacion()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\AdminHabitacion))
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-12-30 22:20:31 --> syntax error, unexpected 'mostrar' (T_STRING), expecting variable (T_VARIABLE) or '$'
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(801): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-30 22:22:36 --> syntax error, unexpected 'mostrar' (T_STRING), expecting variable (T_VARIABLE) or '$'
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(801): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-30 22:36:34 --> syntax error, unexpected 'use' (T_USE)
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('cliente/habitac...', Array, NULL)
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Habitacion.php(24): view('cliente/habitac...', Array)
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Habitacion->index()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Habitacion))
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-12-30 22:37:24 --> Call to undefined method CodeIgniter\View\View::prueba()
#0 C:\xampp\htdocs\hotelplazalosreyes\system\View\View.php(236): include()
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('cliente/habitac...', Array, NULL)
#2 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Habitacion.php(24): view('cliente/habitac...', Array)
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Habitacion->index()
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Habitacion))
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-12-30 22:37:58 --> Call to undefined function prueba()
#0 C:\xampp\htdocs\hotelplazalosreyes\system\View\View.php(236): include()
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('cliente/habitac...', Array, NULL)
#2 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Habitacion.php(24): view('cliente/habitac...', Array)
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Habitacion->index()
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Habitacion))
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-12-30 22:38:05 --> Call to undefined method CodeIgniter\View\View::prueba()
#0 C:\xampp\htdocs\hotelplazalosreyes\system\View\View.php(236): include()
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('cliente/habitac...', Array, NULL)
#2 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Habitacion.php(24): view('cliente/habitac...', Array)
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Habitacion->index()
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Habitacion))
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-12-30 22:39:15 --> syntax error, unexpected 'use' (T_USE)
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('cliente/habitac...', Array, NULL)
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Habitacion.php(24): view('cliente/habitac...', Array)
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Habitacion->index()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Habitacion))
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-12-30 22:39:28 --> Undefined constant 'App\Models\AdminHabitacionImagenModelo'
#0 C:\xampp\htdocs\hotelplazalosreyes\system\View\View.php(236): include()
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('cliente/habitac...', Array, NULL)
#2 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Habitacion.php(24): view('cliente/habitac...', Array)
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Habitacion->index()
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Habitacion))
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-12-30 22:39:34 --> Undefined constant 'App\Models\AdminHabitacionImagenModelo'
#0 C:\xampp\htdocs\hotelplazalosreyes\system\View\View.php(236): include()
#1 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('cliente/habitac...', Array, NULL)
#2 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Habitacion.php(24): view('cliente/habitac...', Array)
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Habitacion->index()
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Habitacion))
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-12-30 22:41:40 --> syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM)
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('cliente/habitac...', Array, NULL)
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Habitacion.php(24): view('cliente/habitac...', Array)
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Habitacion->index()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Habitacion))
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-12-30 22:48:12 --> syntax error, unexpected ';'
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('cliente/habitac...', Array, NULL)
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Habitacion.php(24): view('cliente/habitac...', Array)
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Habitacion->index()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Habitacion))
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-12-30 22:53:14 --> syntax error, unexpected ';'
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('cliente/habitac...', Array, NULL)
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Habitacion.php(24): view('cliente/habitac...', Array)
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Habitacion->index()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Habitacion))
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-12-30 23:05:46 --> syntax error, unexpected 'endfor' (T_ENDFOR)
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('cliente/habitac...', Array, NULL)
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Habitacion.php(24): view('cliente/habitac...', Array)
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Habitacion->index()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Habitacion))
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-12-30 23:06:34 --> syntax error, unexpected 'endfor' (T_ENDFOR)
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('cliente/habitac...', Array, NULL)
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Habitacion.php(24): view('cliente/habitac...', Array)
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Habitacion->index()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Habitacion))
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-12-30 23:06:51 --> syntax error, unexpected 'endforeach' (T_ENDFOREACH)
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('cliente/habitac...', Array, NULL)
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Habitacion.php(24): view('cliente/habitac...', Array)
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Habitacion->index()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Habitacion))
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-12-30 23:07:14 --> syntax error, unexpected 'endforeach' (T_ENDFOREACH)
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('cliente/habitac...', Array, NULL)
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Habitacion.php(24): view('cliente/habitac...', Array)
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Habitacion->index()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Habitacion))
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-12-30 23:18:53 --> syntax error, unexpected 'endfor' (T_ENDFOR)
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('cliente/habitac...', Array, NULL)
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Habitacion.php(24): view('cliente/habitac...', Array)
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Habitacion->index()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Habitacion))
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-12-30 23:19:10 --> Undefined variable: resImagenes
#0 C:\xampp\htdocs\hotelplazalosreyes\app\Views\cliente\habitacion\index.php(59): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 59, Array)
#1 C:\xampp\htdocs\hotelplazalosreyes\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('cliente/habitac...', Array, NULL)
#3 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Habitacion.php(24): view('cliente/habitac...', Array)
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Habitacion->index()
#5 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Habitacion))
#6 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-30 23:19:36 --> syntax error, unexpected 'endfor' (T_ENDFOR)
#0 C:\xampp\htdocs\hotelplazalosreyes\system\Common.php(176): CodeIgniter\View\View->render('cliente/habitac...', Array, NULL)
#1 C:\xampp\htdocs\hotelplazalosreyes\app\Controllers\Habitacion.php(24): view('cliente/habitac...', Array)
#2 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(847): App\Controllers\Habitacion->index()
#3 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Habitacion))
#4 C:\xampp\htdocs\hotelplazalosreyes\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\hotelplazalosreyes\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
