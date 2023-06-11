<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/ee74f8cc5e.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
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