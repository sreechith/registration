<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
include_once('model/Autoloader.php');

$autoloader = new Autoloader();

$class = isset($_GET['type']) ? $_GET['type'] : 'Users';
$classObj = new $class();

