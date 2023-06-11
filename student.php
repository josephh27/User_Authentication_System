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
    <div class="landing-wrapper">
        <img id="landing-shape" src="images/landing_shape.png" alt="image">
        <div class="landing-right">
            <div class="landing-right-inner">
                <img src="images/university_logo.png" alt="Hogwarts Logo">
                <h1>HOGWARTS UNIVERSITY</h1>
                <p class="module-highlight">STUDENT MODULE</p>
                <p>Sign in to start your session</p>
                <input type="text" class="student-id-input">
                <div class="credential-input">
                    <select name="birthmonth" id="birthmonth">
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                    <select name="birthday" id="birthday"></select>
                    <select name="birthyear" id="birthyear"></select>
                </div>
                <input type="text" class="password-input">
                <p>By using this service, you understood and agree to the Hogwarts Online Services Terms of Use and Privacy Statement</p>
            </div>
            
        </div>
    </div>
    <!-- <script src="js/script.js"></script> -->
</body>
</html>