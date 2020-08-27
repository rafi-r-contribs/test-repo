<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "lesson_student";

    //connecting database
    $conn = new mysqli($servername, $username,$password,$database);

    // check connection
    if($conn->connect_error)
    {
        die("Connection_Failed".$conn->connect_error);
    }
?>