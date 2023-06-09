<?php

class SignupContr extends Signup{
    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdRepeat, $email) {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }

    public function signupUser() {
        if ($this->emptyInput() == false) {
            //echo "Empty input.";
            header('location: ../index.php?error=emptyinput');
            exit();
        }
        if ($this->invalidUid() == false) {
            //echo "Invald username.";
            header('location: ../index.php?error=username');
            exit();
        }
        if ($this->invalidEmail() == false) {
            //echo "Invalid email.";
            header('location: ../index.php?error=email');
            exit();
        }
        if ($this->passwordMatch() == false) {
            //echo "Password does not match.";
            header('location: ../index.php?error=passwordmatch');
            exit();
        }
        if ($this->userFound() == false) {
            //echo "User not found.";
            header('location: ../index.php?error=usernametaken');
            exit();
        }   

        $this->setUser($this->uid, $this->pwd, $this->email);   
    }

    private function emptyInput() {
        $result;
        if (empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidUid() {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail() {
        $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function passwordMatch() {
        $result;
        if ($this->pwd !== $this->pwdRepeat) {
            $result = false;
        }  else {
            $result = true;
        }
        return $result;
    }

    private function userFound() {
        $result;
        if ($this->checkUser($this->uid, $this->email)) {
            $result = false;
        }  else {
            $result = true;
        }
        return $result;
    }

    public function fetchUserId($uid) {
        $userId = $this->getUserId($uid);
        return $userId[0]['users_id'];
    }
}