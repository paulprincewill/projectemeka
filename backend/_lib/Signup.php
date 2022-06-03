<?php
include "../_global/Root.php";

class Signup extends Root{
    // Initialize the property(attribute of the class).
    public $email = "";
    public $password = "";
    
    public function __construct() {
        // Called the parent constructor(which from Root.php).
        parent::__construct();
        $_POST = json_decode(file_get_contents("php://input"),true);
    }
  
    // validate all input data for signup page
    public function validate_data(){
 
        if (empty($this->email)) {

            $this->error = "Email is empty!";

            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                $this->error = " Invalid email address! ";
            }

        }
        else{
            $this->response['success'] = true;
        }
        
        if (empty($this->password)) {
                $this->error = "Password is empty!";
        }
        else{
            $this->response['success'] = true;
        }
 
    }

    public function is_register(){
        
    }
    public function create_user(){

        $email = $this->email;
        $password = $this->password;
        
        //create by user unique id
        $user_id = $this->create_userid();
        
        $query = "INSERT INTO users (user_id,email,password) VALUES ('$user_id','$email','$password')";
      
        $this->db->query($query);
    }
    
    private function create_userid(){
        $length = rand(4,19);
        $number = "";
        for ($i=0; $i < $length; $i++) { 
            $newr_rand = rand(0,9);
            $number = $number . $newr_rand;
        }

        return $number;
    }
    
}