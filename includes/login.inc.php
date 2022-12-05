<?php      
  if(isset($_POST["submit"])){

    //Grabbing DATA
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    //Create class object
    include '../Models/Dbh.class.php';
    include '../Models/Login.class.php';
    include '../Controllers/UserLoginContr.class.php';
    
    $Login = new LoginContr($email, $pwd);

    $Login->loginUser();

    header("location: ../Views/RestaurantMenu.php?error=none");  
  }

      
