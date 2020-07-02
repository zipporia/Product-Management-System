<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css"/>
    <script src="main.js"></script>
</head>
<body>

    <header>
        <nav class="nav-header-main">
            <a class="header-logo" href="">
                <img src="img/logo.png" alt="logo">
            </a>
            <ul>
                <li class="list-item"><a href="index.php">Home</a></li>
                <li class="list-item"><a href="#">Product</a></li>
                <li class="list-item"><a href="#">About us</a></li>
                <li class="list-item"><a href="#">Contact</a></li>
            </ul>
            <div class="header-login">
                <form action="includes/login.php" method="post">
                    <input type="text" name="mailuid" placeholder="Username/E-mail...">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="login-submit">Login</button>
                </form>
                <a href="signup.php">Signup</a>
                <form action="includes/logout.php" method="post">
                    <button type="submit" name="logout-submit">Logout</button>
                </form>
            </div>
        </nav>
    </header>  
</body>
</html>