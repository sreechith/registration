<?php
include_once('model/DbConnect.class.php');

class DbClass extends dbconnect
{
    private $connection;

    public function __construct() {
        $dbconnection = new parent(); 
        $this->connection = $dbconnection->connect();
    }

    /**
     * isUserLoggedIn
     * @return boolean
     */
    public function isUserLoggedIn() : bool
    {
        $id = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : '0';
        $result = mysqli_query($this->connection, "SELECT * FROM user WHERE id = '".$id."'");
        $user_exists = mysqli_num_rows($result);	

        if($user_exists>=1) {
            return true;
        }

        return false;
    }

    /**
     * getLoggedInUser
     * @return boolean
     */
    public function getLoggedInUser() : bool
    {
        $id = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : '0';
        $result = mysqli_query($this->connection, "SELECT * FROM user WHERE id = '".$id."'");
        $user_exists = mysqli_num_rows($result);	

        if($user_exists>=1) {
            $userDetails = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $_SESSION['first_name'] = $userDetails["first_name"];
            $_SESSION['last_name'] = $userDetails["last_name"];
            $_SESSION['email'] = $userDetails["email"];
            $_SESSION['dob'] = $userDetails["dob"];

            return true;
        }

        return false;
    }

    /**
     * insert
     * @param array $data
     * @return int
     */
    public function insert($data) : int
    {
        $is_sanitize = $this->sanitize_input($data);
        $fields = array_keys($is_sanitize);
        $columns = implode(',',$fields);
        $values = array_values($is_sanitize);
        $columns_values= '"' . implode('","',$values) . '"';
        $result = mysqli_query($this->connection, "INSERT INTO user ($columns) VALUES
        ($columns_values)");
        $id_user = $this->connection->insert_id; 	

        if($id_user) {
            $_SESSION['id_user'] = $id_user;
            return $id_user;
        }

        return null;
    }

     /**
     * sanitize_input
     * @param array $input
     * @return string
     */
    function sanitize_input(array $input) : array
    {
        $result = [];
        
        foreach($input as $key => $fields) {
            if($key == 'password') {
                $fields = md5($fields);
            }
            $result[$key ] = htmlspecialchars(stripslashes(trim($fields)));
        }

        return $result;
    } 
}
?>
