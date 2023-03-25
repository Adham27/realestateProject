<?php
define("DS",DIRECTORY_SEPARATOR);
define("ROOT_PATH",dirname(__DIR__).DS);
define("APP",ROOT_PATH.'app'.DS);
define("CORE",APP.'Core'.DS);
define("CONFIG",APP.'Config'.DS);
define("MODELS",APP.'Models'.DS);
define("CONTROLLERS",APP.'Controllers'.DS);
define("VIEWS",APP.'views'.DS);
define("LIBS",APP.'Libs'.DS);
define("UPLOADS",ROOT_PATH.'public'.DS.'uploads'.DS);
require_once(CONFIG.'config.php');
require_once(CONFIG.'HelperFun.php');

// autoload all classes
$modules=[ROOT_PATH,APP,CORE,VIEWS,CONTROLLERS,MODELS,CONFIG,LIBS];
//make the routes ready to use set_include_path, include_path
set_include_path(get_include_path().PATH_SEPARATOR.implode(PATH_SEPARATOR,$modules));
spl_autoload_register('spl_autoload');

new App();

?>