<?php require __DIR__ . '/../template/header.php'; 

use App\Controller\UserController;

if (isset($_POST['input-username'])) {

    $userController = new UserController();

    $userController->userRepository->checkUser($_POST['input-username'], $_POST['input-password']);

} else {  
?>
    <div id="login-whole-form">
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
  
        
        <div>
            <input type="submit" id="user-login-submit" value="Se Connecter"/>
        </div>
    
</form>

    <h5>Pas encore inscrit?</h5>
    <form id="register-form-button" action="" method="GET">
            <input type="hidden" name="c" value="user"/>
            <input type="hidden" name="a" value="register"/>
            <input type="submit" id="goto-add-user" value="Créer un compte  "/>
        </form>
            </div>

<?php } ?>






<?php require __DIR__ . '/../template/footer.php'; ?>