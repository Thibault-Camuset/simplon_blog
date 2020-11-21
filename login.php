<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Blog</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    
<?php
if (isset($_POST['input-username'])) {

    require('PHP/UserManager.php');

    $manager = new UserManager();
    $manager->checkUser($_POST['input-username'], $_POST['input-password']);

    header( "refresh:1; url=./index.php" ); 

} else {  
?>
<form id="login-form" method="POST" action="">
    <h3 id="connect-title">Connectez-vous</h3>
    <input type="text" id="input-username" name="input-username" placeholder="Username"/>
    <input type="text" id="input-password" name="input-password" placeholder="Password"/>
    <div id="login-flex-row">
        <a href="register.php" id="goto-add-user">Register</a>
        <input type="submit" id="user-register-submit" value="Log-In"/>
    </div>
</form>
<?php } ?>

</body>
</html>