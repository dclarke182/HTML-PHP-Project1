<!DOCTYPE html>
<?php
  session_start();
  include '../.includes/Login.inc.php';
?>

<html>

<head>
    <link rel="stylesheet" href="stylesheet.css?<?=filemtime("css/stylesheet.css")?>"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>


</style>

<body>
    <div class="background">
        <div class="blur2">
        </div>
        <div class="blur">
            <div style="text-align:center" class="container-login">
                <form method="post" action="../.includes/Login.inc.php" id='login-form' class="login-form">
                    <h1>Login</h1>
                    <input type="text" placeholder="Email" id="email" name="email"></br>
                    <input type="password" placeholder="Password" id="pwd" name="pwd"></br>
                    <input type="submit" value="Login" id="login-form-submit" name="submit">
                    <p>Need an account? <span onclick="location.href='register.php'">Sign Up</span></p>
                    <p>Are you a restaurant? <span onclick="location.href='restaurant-login.php'">Click here!</span></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>