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

<div id="content-home">

    <?php if(isset($_SESSION['userName'])) { ?>

    <p>Bienvenue <?php echo $_SESSION['userName']; ?></p>

    <a id="goto-deconnect" href="deconnect.php">Se déconnecter</a>

    <?php } else { ?>

    <a id="goto-login-form" href="login.php">Se connecter/s'inscrire</a>

    <?php } ?>
    
</div>

</body>
</html>