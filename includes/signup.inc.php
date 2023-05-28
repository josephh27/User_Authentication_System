<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Grabbing the data
    $uid =  $_POST['uid'];
    $pwd =  $_POST['pwd'];
    $pwdRepeat = $_POST['pwdrepeat'];
    $email =  $_POST['email'];

    //Instantiate SignupContr class
    include '../classes/dbh.classes.php';
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);

    //Running error handlers
    $signup->signupUser();

    //Going to back to front page
    header('location: ../index.php?error=none');

}
