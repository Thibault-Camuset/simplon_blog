<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="utf-8">
    <meta name="author" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <title></title>
</head>
<body>

<?php
$username = $_POST['user-name-input'];
$email = $_POST['user-email-input'];
$password = $_POST['password-input'];
$firstname = $_POST['firstname-input'];
$lastname = $_POST['lastname-input'];
$usertype = $_POST['user-type-input'];

require('UserManager.php');

$manager = new UserManager();
$manager->addUser($username, $email, $password, $firstname, $lastname, $usertype);
?>

<div id="user-added-finish">
<p id="user-added-confirm">Utilisateur bien ajouté!</p>
<p>Vous allez être redirigé vers la page d'accueil dans quelques secondes, sinon, cliquez <a href="../index.php">ICI</a> pour être redirigé</p>
</div>

<?php header( "refresh:3; url=../index.php" ); ?>

</body>
</html>