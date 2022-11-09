<?php
    // Taking input details of the user and if not set database password on localhost then set empty.
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "LoginSystem";

    // Checking connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>