<?php

    $Servername = "localhost";
    $DbUsername = "root";
    $DbPassword = "";
    $Dbname = "loginsystem";

    $conn = mysqli_connect($Servername, $DbUsername, $DbPassword, $Dbname);

    if(!$conn){
        die("Connection Failed".mysqli_connect_error());
    }