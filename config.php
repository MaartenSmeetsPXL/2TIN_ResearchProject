<?php
    require('vendor/autoload.php');
    // Define mysql server settings
    $serverName = "database-3.cg94bh04lbee.us-east-1.rds.amazonaws.com";
    $username = "admin";
    $password = "";
    $dbName = "employees";

    // Create a new mysqli connection. Remember to enable this in php.ini !!
    $conn = new mysqli($serverName, $username, $password, $dbName);
