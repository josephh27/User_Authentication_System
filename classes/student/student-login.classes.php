<?php
function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

class Login extends Dbh{
    protected function getUser($uid, $pwd, $birthyear, $birthmonth, $birthday) {
        $stmt = $this->connect()->prepare('SELECT student_password FROM student WHERE student_id = ?;');
        
        if (!$stmt->execute(array($uid))) {
            $stmt = null;
            header("location: ../student.php?error=stmtfailed");
            exit();
            }   

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header('location: ../student.php?error=usernotfound');
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $checkPwd = password_verify($pwd, $pwdHashed[0]["password"]);
        
        if (!($pwd === $pwdHashed[0]['student_password'])) {
            $stmt = null;
            header('location: ../student.php?error=wrongpassword');
            exit();

        } else {
            $stmt = $this->connect()->prepare('SELECT * FROM student WHERE student_id = ? AND student_password = ?;');
            if (!$stmt->execute(array($uid, $pwdHashed[0]["student_password"]))) {
                $stmt = null;
                header("location: ../student.php?error=stmtfailed");
                exit();
            }   

            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header('location: ../student.php?error=usernotfound');
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $birthdate = date_create($birthyear . '-' . $birthmonth . '-' . $birthday);

            if (date_create($user[0]['birth_date']) != $birthdate) {
                $stmt = null;
                header('location: ../student.php?error=invalidcredentials');
                exit();
            }

            session_start();
            $_SESSION['username'] = $user[0]['first_name'];
            $stmt = null;
        }
    }
}