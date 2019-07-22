<?php
include_once('model/DbClass.class.php');

class GeneralFunctions
{
  public function __construct()
  {
    $this->DbClass = new DbClass(); 
  }

  public function getView($view) {
		include $view.'.php';
  }
  
  public function getHome() {
		$this->DbClass->getLoggedInUser();
		header('Location:index.php?type=Home');
  }
}
?>
