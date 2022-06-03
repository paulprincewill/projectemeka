<?php
/* 
   ------------------------------------------------
   profile.php is not ready for used for now 
   ------------------------------------------------
*/
session_start();

    include ("../_lib/Login.php");
    
    // check if user is logged in
    if (isset($_SESSION['projectEmeka_userid']) && is_numeric($_SESSION['projectEmeka_userid'])) {
        
        $id = $_SESSION['projectEmeka_userid'];
        
        $login = new Login();
        
        $is_successful = $login->check_login($id);
        
        if ($is_successful) {
            //Let the page just load and retrive user data
            echo "everything is fine";
        }
    }
    else{
        //redirect user to login page
    }