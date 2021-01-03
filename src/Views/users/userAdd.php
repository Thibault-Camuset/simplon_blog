<?php require __DIR__ . '/../template/header.php'; ?>

<?php
$username = $_POST['user-name-input'];
$email = $_POST['user-email-input'];
$password = $_POST['password-input'];
$firstname = $_POST['firstname-input'];
$lastname = $_POST['lastname-input'];
$usertype = $_POST['user-type-input'];

use App\Controller\UserController;
$userController = new UserController();

$userController->userRepository->addUser($username, $email, $password, $firstname, $lastname, $usertype);
?>

<div id="user-added-finish">
<p id="user-added-confirm">Utilisateur bien ajouté!</p>
<p>Vous allez être redirigé vers la page d'accueil dans quelques secondes, sinon, cliquez <a href="../index.php">ICI</a> pour être redirigé</p>
</div>

<?php header( "refresh:3; url=../index.php" ); ?>

<?php require __DIR__ . '/../template/footer.php'; ?>