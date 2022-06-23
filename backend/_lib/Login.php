<?php

include "../_global/Root.php";

class Login extends Root {

    public $email = "";
    public $password = "";
    public $is_successful = false;
    
    public function __construct() {
        // Called the parent constructor(which from Root.php).
        parent::__construct();
        $_POST = json_decode(file_get_contents("php://input"),true);
    }
    
    public function evaluate_data(){
        
        //check if field is empty!
        if(empty($this->email) && empty($this->password)){
            $this->error = "Email and Password field is Empty!";
        }
        elseif (empty($this->email)) {
            $this->error = "Email is empty!";                     
        }
        elseif (empty($this->password)) {
            $this->error = " Password is empty!";
        }
        
        //Initailize variable for email and password.
        $email = $this->email;
        $password = $this->password;

        $query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";

        $this->is_successful = $this->db->read($query);
        
        if($this->is_successful){

            $row = $this->is_successful[0] ;

            if($password == $row['password']){
                //create session data
                $_SESSION['projectEmaka_userid'] = $row['user_id'];
                $this->response['success'] = true;
                $this->response['feedback'] = " User found ";
            }
            else{    
                $this->error = " Wrong Password! ";
            }
        }
        // else {
        //     $this->error = "User does not exist!"
        // }
 
    }

    // Testing as not be implement for this method.
    public function check_login($id){

        $query = "SELECT user_id FROM users user_id = '$id' LIMIT 1";

        $this->is_successful = $this->db->query($query);

        if($this->is_successful){
            $this->response['success'] = true;
        }
        
        $this->response['success'] = false;
        
    }
}