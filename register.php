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
    


<form id="add-user-form" method="POST" action="PHP/userAdd.php">
    <h3>Ajouter un nouvel utilisateur</h3>
    <input type="text" id="user-name-input" name="user-name-input" placeholder="Nom d'Utilisateur"/>
    <input type="text" id="user-email-input" name="user-email-input" placeholder="Email"/>
    <input type="text" id="password-input" name="password-input" placeholder="Mot de Passe"/>
    <input type="text" id="firstname-input" name="firstname-input" placeholder="Prénom"/>
    <input type="text" id="lastname-input" name="lastname-input" placeholder="Nom de Famille"/>
    <div id="radio-register-role">
        <label>Admin<input type="radio" id="admin-user" name="user-type-input" value="admin" /></label>
        <label>Rédacteur<input type="radio" id="redac-user" name="user-type-input" value="redac" /></label>
        <label>Utilisateur<input type="radio" id="normal-user" name="user-type-input" value="user" checked/></label>
    </div>
    <input type="submit" id="form-add-submit" value="Valider"/>
</form>




</body>
</html>
