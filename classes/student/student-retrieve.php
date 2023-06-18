<?php
class studentData extends Dbh {
    public function retrieveData() {
        $stmt = $this->connect()->prepare('SELECT * FROM student');
        if (!$stmt->execute()) {
            $stmt = null;
            header("location: admintab.php?error=stmtfailed");
            exit();
        }  
        return $stmt;
    }
}