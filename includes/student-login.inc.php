<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Grabbing the data
    $uid =  htmlspecialchars($_POST['student-id'], ENT_QUOTES, 'UTF-8');
    $pwd =  htmlspecialchars($_POST['student-password'], ENT_QUOTES, 'UTF-8');
    $birthyear = htmlspecialchars($_POST['birthyear'], ENT_QUOTES, 'UTF-8');
    $birthmonth = htmlspecialchars($_POST['birthmonth'], ENT_QUOTES, 'UTF-8');
    $birthday = htmlspecialchars($_POST['birthday'], ENT_QUOTES, 'UTF-8');
    
    //Instantiate SignupContr class
    include '../classes/dbh.classes.php';
    include "../classes/student/student-login.classes.php";
    include "../classes/student/student-login-contr.classes.php";
    $login = new LoginContr($uid, $pwd, $birthyear, $birthmonth, $birthday);

    //Running error handlers
    $login->loginUser();

    //Going to back to front page
    // header("location: ../user_home.php?error=none");

}
