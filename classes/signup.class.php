<?php

class Signup extends Dbh { 
    
    protected function setUser($email, $pwd, $phone){

        $stmnt = $this->connect()->prepare('INSERT INTO customers (Email, Pass, PhoneNumber) VALUES (?, ?, ?);');

        if(!$stmnt->execute(array($email, $pwd, $phone))){
            //$stmnt = NULL;
            header("location: ../login.php?error=stmntfailed");
            exit();
        }

        $stmnt = NULL;
    }
    
    protected function checkUser($email){

        $check = $this->connect()->prepare('SELECT Email FROM customers WHERE Email = ?;');

        if(!$check->execute($email)){
            $check = NULL;
            header("location: ../login.php?error=checkfailed");
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