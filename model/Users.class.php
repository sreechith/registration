<?php
include_once('model/DbClass.class.php');

class Users extends GeneralFunctions
{
	public function init() {
		if($this->DbClass->isUserLoggedIn()) {
			$this->getHome();
		} else {
			if(isset($_REQUEST['email'])) {
				$email = $_REQUEST['email'];
				$password = $_REQUEST['password'];
				$id_login = $this->DbClass->login($email, $password);
				if($id_login ) {
					$this->getHome();
				} else {
					header('Location:index.php?message=invalid user');
				}
			}
			$this->generalFunctions->getView('login');
		}
	}

    public function __construct() {
		$this->generalFunctions = new parent(); 
        $this->DbClass = new DbClass(); 
	}
	
}

$Users = new Users();
$Users->init();
?>
