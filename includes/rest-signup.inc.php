<?php      
  if(isset($_POST["submit"])){

    //Grabbing DATA
    $restname = $_POST["rest-name"];
    $pwd = $_POST["pwd"];
    $confirm_pwd = $_POST["confirm_pwd"];
    $phone = $_POST["phone"]; 
    $address = $_POST["rest-add"]; 
    $city = $_POST["rest-city"];
      
    //Create class object
    include '../classes/dbh.class.php';
    include '../classes/rest-signup.class.php';
    include '../classes/rest-signup-contr.php';
    
    $signup = new RSignupContr($restname, $pwd, $confirm_pwd, $phone, $address, $city);

    $signup->signupUserR();

    header("location: ../restaurantMenu.php?error=none");  
  }

      