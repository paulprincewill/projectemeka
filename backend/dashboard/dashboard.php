<?php

session_start();

    include ("../_lib/Login.php");
    
    // check if user is logged in
    if (isset($_SESSION['projectEmeka_userid']) && is_numeric($_SESSION['projectEmeka_userid'])) {
        
        $id = $_SESSION['projectEmeka_userid'];
        
        $login = new Login();
        
        $is_successful = $login->check_login($id);
        
        if ($is_successful) {
            header("Location: ../../pages/add_properties.php");
        }
    }
    else{
        //redirect user to login page
        header("Location: login.php");
        die;
    }