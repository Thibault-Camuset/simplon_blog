<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $page_title ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<div id="navbar">

<?php
    if (isset($_SESSION['userName']) && $_SESSION['userRole'] == 'Admin') { ?>
        <div id="admin-buttons">
            <form method="GET">
                <input type="hidden" name="c" value="user"/>
                <input type="hidden" name="a" value="admin"/>
                <input type="submit" id="admin-pannel-button" value="Panneau d'admin">
            </form> 
        </div>
    <?php } ?>


        <div id="home-button">
            <a id="home-button-input" href="./index.php">Home</a>
        </div>

  

        <div id="log-buttons">
            <?php if(isset($_SESSION['userName'])) { ?>

            <form id="logout-form" action="" method="GET">
            <input type="hidden" name="c" value="user"/>
            <input type="hidden" name="a" value="logout"/>
                <input type="submit" id="goto-login-form" value="Bienvenue <?php echo $_SESSION['userName']; ?>! Se déconnecter">
            </form>

            <?php } else { ?>

            <form id="login-form" action="" method="GET">
            <input type="hidden" name="c" value="user"/>
            <input type="hidden" name="a" value="login"/>
                <input type="submit" id="goto-login-form" value="Se connecter/s'inscrire">
            </form>

            <?php } ?>
        </div>
    </div>