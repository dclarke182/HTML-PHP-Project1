<?php

class RSignup extends Dbh { 
    
    protected function setUserR($restname, $pwd, $phone, $address, $city){

        $stmnt = $this->connect()->prepare('INSERT INTO restaurants (RName, Pass, PhoneNumber, address_line_1, address_line_3) VALUES (?, ?, ?, ?, ?);');

        if(!$stmnt->execute(array($restname, $pwd, $phone, $address, $city))){
            //$stmnt = NULL;
            header("location: ../restaurant-login.php?error=stmntfailed");
            exit();
        }

        $stmnt = NULL;
    }
    
    protected function checkUserR($restname){

        $check = $this->connect()->prepare('SELECT RName FROM restauarants WHERE RName = ?;');

        if(!$check->execute($restname)){
            $check = NULL;
            header("location: ../restaurant-login.php?error=checkfailed");
            exit();
        }

        $resultCheck = 0;

        if($check->rowCount() > 0){
            $resultCheck = false;
        }
        else{
            $resultCheck = true;
        }
        
        return $resultCheck;
    }
}