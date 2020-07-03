<?php

if(isset($_POST['signup-submit'])){

    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $pwd = $_POST['pwd'];
    $pwd_repeat = $_POST['pwd-repeat'];


    if(empty($username) || empty($email) || empty($pwd) || empty($pwd_repeat)){
        header("Location: ../signup.php?Error=emptyfields&uid=".$username."&email=".$email);
    }


}