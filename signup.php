<?php
    require "header.php";
?>
    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <h1>Signup</h1>
                <?php
                    if(isset($_GET['Error'])){

                        if($_GET['Error'] == 'emptyfields'){
                            echo '<p class="signuperror">Fill in all empty fields!</p>';
                        }
                        else if($_GET['Error'] == 'invalidmailuid'){
                            echo '<p class="signuperror">Invalid Username and E-mail</p>';
                        }
                        else if($_GET['Error'] == 'invalidmail'){
                            echo '<p class="signuperror">Invalid E-mail</p>';
                        }
                        else if($_GET['Error'] == 'invaliduid'){
                            echo '<p class="signuperror">Invalid Username</p>';
                        }
                        else if($_GET['Error'] == 'passwordcheck'){
                            echo '<p class="signuperror">Password do not match!</p>';
                        }
                        else if($_GET['Error'] == 'passwordcheck'){
                            echo '<p class="signuperror">Password do not match!</p>';
                        }
                        else if($_GET['Error'] == 'usertaken'){
                            echo '<p class="signuperror">Username is already taken!</p>';
                        }

                    }
                    else if(isset($_GET['Signup'])){
                        if($_GET['Signup'] == "success"){
                            echo '<p class="signupsuccess">Singup Successful!</p>';
                        }
                    }
                    
                ?>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="text" name="mail" placeholder="E-mail">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwd-repeat" placeholder="Repeat Password">
                    <button type="submit" name="signup-submit">Signup</button>
                </form>
            </section>
        </div>
    </main>


<?php
    require "footer.php";
?>