<?php
session_start();

    //Logout still in progress.
    
    if (isset($_SESSION['projectEmeka_userid'])) {
        unset($_SESSION['projectEmeka_userid']);
    }

    header("Location: login.php");
    die;