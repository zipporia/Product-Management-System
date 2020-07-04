<?php

if(isset($_POST['signup-submit'])){

    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $pwd = $_POST['pwd'];
    $pwd_repeat = $_POST['pwd-repeat'];


    if(empty($username) || empty($email) || empty($pwd) || empty($pwd_repeat)){
        header("Location: ../signup.php?Error=emptyfields&uid=".$username."&email=".$email);
        exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../signup.php?Error=invalidmailuid");
        exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?Error=invalidmail&uid=".$username);
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../signup.php?Error=invaliduid&email=".$email);
        exit();
    }
    else if ($pwd !== $pwd_repeat){
        header("Location: ../signup.php?Error=passwordcheck&uid=".$username."&mail=".$email);
        exit();
    }
   
    

}