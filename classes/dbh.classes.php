<?php

class Dbh {
    protected function connect() {
        try {
            $username = 'root';
            $password = '';
            $dbh = new PDO('mysql:host=localhost:3307;dbname=ooplogin', $username, $password);
            return $dbh;
        } 
        catch (PDOException $e) {
            echo "Error: " . $e->getMessage() . "<br/>";
            die();
        }
    }    
}

