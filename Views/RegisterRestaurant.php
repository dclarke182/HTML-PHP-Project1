<?php
  include '../.includes/Signup.inc.php';
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/stylesheet.css?<?=filemtime("css/stylesheet.css")?>"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="background-res">
        <div class="blur2">

        </div>
        <div class="blur">
            <div style="text-align:center" class="container-reg-r">
                <form action="../.includes/Signup.inc.php" method="post" id='login-form' class="login-form">
                    <h1>Register Here</h1>
                    <input type="text" placeholder="Establishment name" id="rest-name" name="rest-name" required></br>
                    <!--<input type="text" placeholder="Enter your email" id="email" name="email" required autocomplete="off"></br>-->
                    <input type="password" placeholder="Create a password" id="pwd" name="pwd" required
                        autocomplete="off"></br>
                    <input type="password" id="confirm-pwd" name="confirm_pwd" value=""
                        placeholder="Confirm your password" autocomplete="off" required></br>
                    <input id="phone" type="tel" name="phone" placeholder="Enter your phone number" required></br>
                    <input type="text" placeholder="Establishment address" id="rest-add" name="rest-add" required></br>
                    <input type="text" placeholder="Establishment city" id="rest-city" name="rest-city" required></br>
                    <!--<input type="submit" value="Create Account" id="register">-->
                    <button type="submitrestaurant" name="submitrestaurant" id="register">Create Account</button>
                    <p>Have an account? <span onclick="location.href='restaurant-login.php'">Login Here!</span></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>