<?php

class RestSignup extends Dbh { 

    protected function setRestaurant($restname, $pwd, $phone, $address, $city){

        $stmt = $this->connect()->prepare('INSERT INTO restaurants (RName, Pass, PhoneNumber, address_line_1, address_line_3) VALUES (?, ?, ?, ?, ?);');

        if(!$stmt->execute(array($restname, $pwd, $phone, $address, $city))){
            $stmt = NULL;
            header("location: ../Views/RestaurantLogin.php?error=stmtfailed");
            exit();
        }

        $stmt = NULL;
    }
    
    protected function checkRestaurant($restname){

        $check = $this->connect()->prepare('SELECT RName FROM restauarants WHERE RName = ?;');

        if(!$check->execute($restname)){
            $check = NULL;
            header("location: ../Views/RestaurantLogin.php?error=checkfailed");
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