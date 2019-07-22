<?php
include_once('model/DbClass.class.php');

class Signup extends GeneralFunctions
{
	public function init() {
		if($this->DbClass->isUserLoggedIn()) {
			$this->generalFunctions->getHome();
		} else {
			if(isset($_REQUEST['email'])) {
				$post = $_POST;
				unset($post['submit']);
				unset($post['confirmpassword']);
				$is_exists = $this->DbClass->userExists($post['email']);

				if($is_exists) {
					header('Location:index.php?type=Signup&message=email id already exists');
					exit;
				}
				$is_added = $this->DbClass->insert($post);

				if($is_added) {
					$this->generalFunctions->getHome();
				} else {
					header('Location:index.php?type=Signup&message=error occurred please try again');
				}
			}
			$this->getView('signup');
		}
	}

    public function __construct() {
		$this->generalFunctions = new parent(); 
		$this->DbClass = new DbClass(); 
	}
}

$Signup = new Signup();
$Signup->init();
?>
