<?php require __DIR__ . '/../template/header.php'; 

use App\Controller\UserController;
$userController = new UserController();

if (!isset($_POST['user-name-input'])) { ?>

<form id="add-user-form" method="POST" action="">
    <input type="hidden" name="c" value="user"/>
    <input type="hidden" name="a" value="adduser"/>
    <h3>Ajouter un nouvel utilisateur</h3>
    <input type="text" id="user-name-input" name="user-name-input" placeholder="Nom d'Utilisateur" required/>
    <input type="text" id="user-email-input" name="user-email-input" placeholder="Email" required/>
    <input type="password" id="password-input" name="password-input" placeholder="Mot de Passe" required/>
    <input type="text" id="firstname-input" name="firstname-input" placeholder="Prénom" required/>
    <input type="text" id="lastname-input" name="lastname-input" placeholder="Nom de Famille" required/>
    <div id="radio-register-role">
        <label>Admin<input type="radio" id="admin-user" name="user-type-input" value="admin" /></label>
        <label>Rédacteur<input type="radio" id="redac-user" name="user-type-input" value="redac" /></label>
        <label>Utilisateur<input type="radio" id="normal-user" name="user-type-input" value="user" checked/></label>
    </div>
   
    <input type="submit" id="form-add-submit" value="Valider"/>
</form>

<?php } else {
$username = $_POST['user-name-input'];
$email = $_POST['user-email-input'];
$password = $_POST['password-input'];
$firstname = $_POST['firstname-input'];
$lastname = $_POST['lastname-input'];
$usertype = $_POST['user-type-input'];



$userController->userRepository->addUser($username, $email, $password, $firstname, $lastname, $usertype);
?>

<div id="user-added-finish">
<p id="user-added-confirm">Utilisateur bien ajouté!</p>
<p>Vous allez être redirigé vers la page d'accueil dans quelques secondes, sinon, cliquez <a href="/">ICI</a> pour être redirigé</p>
</div>

<?php header( "refresh:3; url=/" ); 
}?>

<?php require __DIR__ . '/../template/footer.php'; ?>
