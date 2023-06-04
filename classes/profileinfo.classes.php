<?php

    class ProfileInfo extends Dbh {
        protected function getProfileInfo($userId) {
            $stmt = $this->connect()->prepare('SELECT * FROM profiles WHERE profiles_id = ?;');

            if (!$stmt->execute(array($userId))) {
                $stmt = null;
                header('location: ../profile.php?error=stmtfailed');
                exit();
            }

            $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (count($profileData) == 0) {
                $stmt = null;
                // header('location: ../profile.php?error=profilenotfound');
                exit();
            }

            
            return $profileData;
        }

        protected function setNewProfileInfo($profileAbout, $profileTitle, $profileText, $userId) {
            $stmt = $this->connect()->prepare('UPDATE profiles SET profile_about = ?, profile_introtitle = ?,
                profile_introtext = ? WHERE users_id = ?;');

            if (!$stmt->execute(array($profileAbout, $profileTitle, $profileText, $userId))) {
                $stmt = null;
                header('location: ../profile.php?error=stmtfailed');
                exit();
            }

            $stmt = null;
        }

        protected function setProfileInfo($profileAbout, $profileTitle, $profileText, $userId) {
            $stmt = $this->connect()->prepare('INSERT INTO profiles (profiles_about, profiles_introtitle, profiles_introtext, users_id) VALUES (?, ?, ?, ?);');

            if (!$stmt->execute(array($profileAbout, $profileTitle, $profileText, $userId))) {
                $stmt = null;
                header('location: ../profile.php?error=stmtfailed');
                exit();
            }

            $stmt = null;
        }
    }