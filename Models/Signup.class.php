<?php

class Signup extends Dbh { 
    
    protected function setUser($email, $pwd, $phone){
        $stmnt = $this->connect()->prepare('INSERT INTO customers (Email, Pass, PhoneNumber) VALUES (?, ?, ?);');
       
        //$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmnt->execute(array($email, $pwd, $phone))){
            //$stmnt = NULL;
            header("location: ../Views/Login.php?error=stmntfailed");
            exit();
        }
        $stmnt = NULL;
    }
    
    protected function checkUser($email){
        $check = $this->connect()->prepare('SELECT Email FROM customers WHERE Email = ?;');

        if(!$check->execute($email)){
            $check = NULL;
            header("location: ../Views/Login.php?error=checkfailed");
            exit();
        }

        $resultCheck;
        if($check->rowCount() > 0){
            $resultCheck = false;
        }
        else{
            $resultCheck = true;
        }
        
        return $resultCheck;
    }
}