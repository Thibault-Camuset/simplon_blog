<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Blog</title>
</head>
<body>
    

    
<form id="add-user-form" method="POST" action="PHP/userAdd.php">
<input type="text" id="user-email-input" name="user-email-input" placeholder="Email"/>
<input type="text" id="password-input" name="password-input" placeholder="Mot de Passe"/>
<input type="text" id="firstname-input" name="firstname-input" placeholder="Prénom"/>
<input type="text" id="lastname-input" name="lastname-input" placeholder="Nom de Famille"/>
<label>User<input type="radio" id="normal-user" name="user-type-input" value="user" checked/></label>
<label>Admin<input type="radio" id="admin-user" name="user-type-input" value="admin" /></label>
<input type="submit" id="add-submit" value="Valider"/>
</form>



</body>
</html>