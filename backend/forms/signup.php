<?php 

session_start();

    include "../_lib/Signup.php";
    
    $env = "";
    $signup = new Signup();
    
    if($env == "testing") {
        
        $_POST['email'] = "testing12@gmail.com";
        $_POST['password'] = "123456";

    }

    
    if($_SERVER['REQUEST_METHOD'] == 'POST' || $env == "testing"){
        //echo "Welldone, It work!";
        
        
        // First get user details
        $signup->email = $_POST['email'];
        $signup->password = $_POST['password'];
        
        
        // $signup->sanitize_data();
        $signup->validate_data();
        $signup->is_register();
        $signup->check_for_errors();
        $signup->create_user();
        $signup->send_feedback();
        
    }
    
    else {
        $signup->success = false;
        $signup->feedback = "No data sent";
        $signup->send_feedback();

    }
    
    