<?php
class DbConnect
{
    /**
     * connect
     */
    public function connect(){
        $host = 'localhost';
        $user = 'root';
        $pass = 'root';
        $db = 'loginform';
        $connection = mysqli_connect($host,$user,$pass,$db); 
        return $connection;
    }
}
?>
