<?php

class Login extends Dbh { 
    
    protected function getUser($email, $pwd){
        $stmt = $this->connect()->prepare('SELECT Pass FROM customers WHERE Email = ?');
        
        if(!$stmt->execute(array($email))){
            //$stmt = NULL;
            header("location: ../Views/Login.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0){

            $stmt= null;
            header("location: ../Views/Login.php?error=usernotfound1");
            exit();
        }
        
        $pwd_check = $stmt->fetchAll();
        $checkPwd = password_verify($pwd, $pwd_check[0]['Pass']);

        if($checkPwd == false){
            $stmt= null;
            header("location: ../Views/Login.php?error=incorrectpassword");
            exit(); 
        }
        if($checkPwd == true){
            $stmt = $this->connect()->prepare('SELECT * FROM customers WHERE Email = ? AND Pass = ?;');

            if(!$stmt->execute(array($email, $pwd))){
                //$stmt = NULL;
                header("location: ../Views/Login.php?error=stmtfailed");
                exit();
            }

            if($stmt->rowCount() == 0){

                $stmt= null;
                header("location: ../Views/Login.php?error=usernotfound2");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["ID"] = $user[0]["ID"];
            $_SESSION["FName"] = $user[0]["FName"];
            
            $stmt = NULL;
        }
    
        
    }
    
}