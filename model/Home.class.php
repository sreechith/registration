<?php

class Home extends GeneralFunctions
{
    public function init()
    {
        if ($this->DbClass->isUserLoggedIn()) {
            $this->generalFunctions->getView('home');
        } else {
            header('Location:index.php');
        }
    }

    public function __construct()
    {
        $this->generalFunctions = new parent(); 
        $this->DbClass = new DbClass();
    }
}

$Home = new Home();
$Home->init();
?>
