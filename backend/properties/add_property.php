<?php

    include "../_lib/db.php";
    include "../_global/Root.php";
    include "Property.php";

    $property = new Property;
    $property->env = "testing";

    $property->get_data();
    $property->insert_data();
    $property->check_success();
    $property->send_feedback();






