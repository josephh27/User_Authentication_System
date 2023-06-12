<?php

class LoginContr extends Login{
    private $uid;
    private $pwd;
    private $birthyear;
    private $birthmonth;
    private $birthday;

    public function __construct($uid, $pwd, $birthyear, $birthmonth, $birthday) {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->birthyear = $birthyear;
        $this->birthmonth = $birthmonth;
        $this->birthday = $birthday;
    }

    public function loginUser() {
        if ($this->emptyInput() == false) {
            header('location: ../student.php?error=emptyinput');
            exit();
        }
        $this->getUser($this->uid, $this->pwd, $this->birthyear, $this->birthmonth, $this->birthday);   
    }

    private function emptyInput() {
        $result;
        if (empty($this->uid) || empty($this->pwd)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
?>