<?php

class  RestSignupContr extends RestSignup {

    private $restname;
    private $pwd;
    private $confirm_pwd;
    private $phone;
    private $address;
    private $city;

    public function __construct($restname, $pwd, $confirm_pwd, $phone, $address, $city){

        $this->restname = $restname;
        $this->pwd = $pwd;
        $this->confirm_pwd = $confirm_pwd;
        $this->phone = $phone;
        $this->address = $address;
        $this-> city = $city;

    }

    public function signupRestaurant(){

        $this->setRestaurant($this->restname, $this->pwd, $this->phone, $this->address, $this->city);
    }

    public function emptyInput(){

        $result = 0;

        if(empty($this->restname) || empty($this->pwd) || empty($this->confirm_pwd) || empty($this->phone) || empty($this->address) || empty($this->city)){
            $result = false;

        }
        else {
            $result = true;
        }

        return $result;
    }

}