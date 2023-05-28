<?php

class ProfileInfoContr extends ProfileInfo {
    private $userId;
    private $userUid;
    
    public function __construct($userId, $userUid) {
        $this->userId = $userId;
        $this->userUid = $userUid;
    }

    public function defaultProfileInfo() {
        $profileAbout = "Tell people about yourself! Your interests, hobbies, or favorite TV show!";
        $profileTitle = "Hi! I am " . $this->$userUid;
        $profileText = "Welcome to my profile page! Soon I'll be able to tell you more about myself, and what you can find on my profile page.";

        $this->setProfileInfo($profileAbout, $profileTitle, $profileText, $userId);
    }

    public function updateProfileInfo($about, $introTitle, $introText) {
        //Error handlers
        if ($this->emptyInputCheck($about, $introTitle, $introText)) {
            header("location: ../profilesettings.php?error=emptyinput");
            exit();
        }

        $this->setNewProfileInfo($about, $introTitle, $introText, $this->userId);
    }

    private function emptyInputCheck($about, $introTitle, $introText) { 
        $result;
        if (check($about) || check($introTitle) || check($introText)) {
            $result = true;
        } else {
            $result = false;
        }
        
        return $result;
    }
}