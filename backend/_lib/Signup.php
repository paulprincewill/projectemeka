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
<<<<<<< HEAD
            if(empty($this->email) && empty($this->password)){
                $this->error = "Email and Password field is empty!";
            }
            elseif (empty($this->email)) {
=======
 
            if (empty($this->email)) {
>>>>>>> 23cb677a421b466bee3653b8572758ceb296d8ff
                $this->error = "Email is empty!";                     
            }
            elseif (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                $this->error = " Invalid email address! ";
            }
            elseif (empty($this->password)) {
                $this->error = " Password is empty!";
            }
        else{
            $this->response['success'] = true;
            $this->response['feedback'] = "register successfully";
        }
 
    }

    public function is_register(){
        $email = $this->email;
        $query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";  
        //connect database and send query
        $is_successful = mysqli_query($this->db->conn(), $query);
        
       //if user exist send message
        if (mysqli_num_rows($is_successful)) {
            //Send message
            $this->error = " User already exists ";
        }
    
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