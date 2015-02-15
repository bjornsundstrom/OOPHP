<?php
/**
 * Bootstrapping functions, essential and needed for Simplate to work together with some common helpers. 
 * Heavily inspired by the work of Mikael Roos - thank you!
 */
 
/**
 * Default exception handler.
 *
 */
function myExceptionHandler($exception) {
  echo "Simplate: Uncaught exception: <p>" . $exception->getMessage() . "</p><pre>" . $exception->getTraceAsString(), "</pre>";
}
set_exception_handler('myExceptionHandler');
 
/**
 * Function: Variable dumper.
 * The $array contains the stuff that should be dumped
 */
function dump($array) {
  echo "<pre>" . htmlentities(print_r($array, 1)) . "</pre>";
  echo "<pre>" . print_r($array, 1) . "</pre>";
  
}
//Next line calls the variable dumper if uncommented
//dump($_SERVER);

/**
 * Function: Autoloader for classes.
 *
 */
function myAutoloader($class) {
  $path = SIMPLATE_INSTALL_PATH . "/src/{$class}/{$class}.php";
  if(is_file($path)) {
    include($path);
  }
  else {
    throw new Exception("Classfile '{$class}' does not exist.");
  }
}
spl_autoload_register('myAutoloader');
