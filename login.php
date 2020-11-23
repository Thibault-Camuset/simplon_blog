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

require('PHP/UserManager.php');
$manager = new UserManager();

if (isset($_POST['input-username'])) {

    $manager->checkUser($_POST['input-username'], $_POST['input-password']);

} else {  
?>

<form id="login-form" method="POST" action="">
    <h3 id="connect-title">Connectez-vous</h3>
    <input type="text" id="input-username" name="input-username" placeholder="Username" required/>
    <input type="password" id="input-password" name="input-password" placeholder="Password" required/>
    <?php 
    if(isset($_SESSION['errorMessage'])) { ?>

    <p id="error-message">
        <?php 
        echo $_SESSION['errorMessage'];
        unset($_SESSION['errorMessage']); 
        ?>
    </p>
    <?php } ?>
    <div id="login-flex-row">
        <a href="register.php" id="goto-add-user">Register</a>
        <input type="submit" id="user-register-submit" value="Log-In"/>
    </div>
</form>
<?php } ?>

</body>
</html>