<?php

class  SignupContr extends Signup {

    private $email;
    private $pwd;
    private $confirm_pwd;
    private $phone;

    public function __construct($email, $pwd, $confirm_pwd, $phone){
        $this->email = $email;
        $this->pwd = $pwd;
        $this->confirm_pwd = $confirm_pwd;
        $this->phone = $phone;
    }

    public function signupUser(){
        $this->setUser($this->email, $this->pwd, $this->phone);
    }

    public function emptyInput(){
        $result;

        if(empty($this->email) || empty($this->pwd) || empty($this->confirm_pwd) || empty($this->phone) ){
            $result = false;

        }
        else {
            $result = true;
        }

        return $result;
    }
}