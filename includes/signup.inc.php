<?php      
  if(isset($_POST["submit"])){

    //Grabbing DATA
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $confirm_pwd = $_POST["confirm_pwd"];
    $phone = $_POST["phone"]; 

    //Create class object
    include '../Models/Dbh.class.php';
    include '../Models/Signup.class.php';
    include '../Controllers/UserSignupContr.class.php';
    
    $signup = new SignupContr($email, $pwd, $confirm_pwd, $phone);

    $signup->signupUser();

    header("location: ../Views/RestaurantMenu.php?error=none");  
  }

      