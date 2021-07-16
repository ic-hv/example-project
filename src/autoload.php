<?php

define("ABS_DIR_ROOT", realpath(__DIR__ . '/../') . '/');
define("ABS_DIR_CLASSES", ABS_DIR_ROOT . 'src/classes/');

function myAutoloader($class_name) {
   $file = ABS_DIR_CLASSES . $class_name . '.php';
   if(file_exists($file)) {
	     include $file;
        return class_exists($class_name);
   }

   return false;
}

spl_autoload_register('myAutoloader');
