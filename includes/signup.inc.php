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
        header("Location: ../signup.php?Error=passwordcheck&uid=".$username."&email=".$email);
        exit();
    }
    else{
        $sql = "SELECT user_uid FROM users WHERE user_uid=?";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../signup.php?Error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resutCheck = mysqli_stmt_num_rows($stmt);

            if($resutCheck > 0){
                header("Location: ../signup.php?Error=usertaken&email=".$email);
                exit();
            }
            else{
                $sql = "INSERT INTO users (user_uid, user_email, user_pwd) VALUES(?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);

                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../signup.php?Error=sqlerror");
                    exit();
                }
                else{

                    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedpwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../signup.php?signup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{
    header("Location: ../signup.php");
    exit();
}