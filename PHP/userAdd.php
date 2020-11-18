<?php 

require('Connexion.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="utf-8">
    <meta name="author" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="CSS/styles.css">
    <title></title>
</head>
<body>

<?php

$email = $_POST['user-email-input'];
$password = $_POST['password-input'];
$firstname = $_POST['firstname-input'];
$lastname = $_POST['lastname-input'];
$usertype = $_POST['user-type-input'];

require('UserManager.php');

$manager = new UserManager();
$manager->addUser($email, $password, $firstname, $lastname, $usertype);

?>
<p>Utilisateur bien ajouté!</p>

</body>
</html>