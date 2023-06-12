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
                <p class="module-highlight">FACULTY MODULE</p>
                <p>Sign in to start your session</p>
                <form class="faculty-form" action="includes/faculty-login.inc.php" method="post">
                    <input type="text" class="login-input" name="faculty-id" placeholder="Faculty Number">
                    <div class="credential-input">
                        <select class="dropdown" name="birthmonth" id="birthmonth">
                            <option value="">Birthmonth</option>
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
                        <select class="dropdown" name="birthday" id="birthday">
                            <option value="">Birthday</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                        <select class="dropdown" name="birthyear" id="birthyear">
                            <option value="">Birthyear</option>
                        </select>
                    </div>
                    <input type="text" class="login-input password-input" name="faculty-password" placeholder="Password">
                    <input type="submit" name="submit" value="Submit">
                </form>
                
                <p>By using this service, you understood and agree to the Hogwarts Online Services Terms of Use and Privacy Statement</p>
            </div>
        </div>
    </div>
    <script src="js/login.js"></script>
</body>
</html>