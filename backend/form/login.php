<?php 
    
session_start();

    include "../_lib/Login.php";

    $env = "testing";
    $login = new Login();
    
    if($env == "testing") {
        
        $_POST['email'] = "mrpaul@gmail.com";
        $_POST['password'] = "mrpaul";

    }

    if($_SERVER['REQUEST_METHOD'] == 'POST' || $env == "testing"){

         // First get user details
        $login->email = addslashes($_POST['email']);
        $login->password = addslashes($_POST['password']);
    
        // $login->sanitize_data();
        $login->evaluate_data();
        $login->check_for_errors();
        $login->send_feedback();
        
    }
    else {
        $login->success = false;
        $login->feedback = "No data sent";
        $login->send_feedback();
    }
    