<?php

session_start();

?>


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
if(isset ($SESSION_['userName'])) {

?>

<p>Bienvenue <?php echo $_SESSION['userName']; ?></p>

<?php
} else {
?>

<div id="content-home">
<a id="goto-login-form" href="login.php">Se connecter/s'inscrire</a>
</div>

<?php
}
?>

</body>
</html>