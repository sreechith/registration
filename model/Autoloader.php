<?php
class Autoloader {

public static $loader;

public static function init()
{
	if (self::$loader == NULL)
		self::$loader = new self();

	return self::$loader;
}

public function __construct()
{
	spl_autoload_register(array($this,'autoLoader'));
}

public function autoLoader($class)
{ 
	include ("model/$class.class.php");
}

}

//call
Autoloader::init();
?>