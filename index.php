<?php
    session_start();
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <title>Document</title>
</head>
<body>
    <div class="navbar-area">
        <div class="container">
            <nav class="site-navbar">
                    <a href="#home" class="site-logo">MANILA ZOO</a>
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="tickets.php">TICKETS</a></li>
                        <li><a href="events.php">EVENTS</a></li>
                        <li><a href="animals.php">ANIMALS</a></li>
                        <li><a href="plants.php">PLANTS</a></li>
                    </ul>   
                    
                    <ul class="menu-member">
                        <?php
                            if (isset($_SESSION['userid'])) {
                        ?>
                        <li><a href="signup.php"><?php echo $_SESSION["useruid"]; ?></a></li>
                        <li><a href="login.php" class="header-login-a">LOGOUT</a></li>
                        <?php
                            }
                            else {
                        ?>
                            <li><a href="signup.php">SIGN UP</a></li>
                            <li><a href="login.php" class="header-login-a">LOGIN</a></li>
                        <?php
                            }
                        ?>
                    </ul>   

                    <button class="nav-toggler">
                        <span></span>   
                    </button>
            </nav>
        </div>
        <!-- nav-toggler for mobile version only -->
    </div>

    <div class="hero-section">

    </div>

    <section class="signup-form">
    <h2>Sign Up</h2>
    <form action="includes/signup.inc.php" method="post">
        <div class="form-inputs">
        <div class="input-box">
                <label class="input-label">Username</label>
                <input type="text" name="uid" class="input-1">
            </div>
            <div class="input-box">
                <label class="input-label">Email</label>
                <input type="email" name="email" class="input-1">
            </div>
            <div class="input-box">
                <label class="input-label">Password</label>
                <input type="password" name="pwd" class="input-1">
            </div>
            <div class="input-box">
                <label class="input-label">Confirm password</label>
                <input type="password" name="pwdrepeat" class="input-1">
            </div>
            <button type="submit" name="submit">Sign Up</button>
        </div>
    </form>
    </section>

    <section class="signup-form">
    <h2>Log In</h2>
    <form action="includes/login.inc.php" method="post">
        <div class="form-inputs">
            <div class="input-box">
                <label class="input-label">Username/Email</label>
                <input type="text" name="uid" class="input-1">
            </div>
            <div class="input-box">
                <label class="input-label">Password</label>
                <input type="password" name="pwd" class="input-1">
            </div>
            <button type="submit" name="submit">Log In</button>
        </div>
        
    </form>
    </section>
    <script src="js/script.js"></script>

</body>
</html>