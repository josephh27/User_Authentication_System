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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- <script src="https://kit.fontawesome.com/ee74f8cc5e.js" crossorigin="anonymous"></script> -->
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <div class="nav-container">
            <nav class="site-navbar">
                    <a href="#home" class="site-logo">CODE SPACE</a>
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="tickets.php">ANNOUNCEMENTS</a></li>
                        <li><a href="events.php">EVENTS</a></li>
                    </ul>   
                    
                    <ul class="menu-member">
                        <?php
                            if (isset($_SESSION['userid'])) {
                        ?>
                        <li><a href="profile.php"><?php echo $_SESSION["useruid"]; ?></a></li>
                        <li><a href="includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>
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