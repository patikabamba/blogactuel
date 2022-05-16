<?php 
include 'partials/head.php';
// require 'functions.php';
if(isset($_POST) && !empty($_POST)){
    $email = htmlentities($_POST['email']);
    // var_dump($email);
    $entering_password = htmlspecialchars($_POST['password']);
    //etape 1 : récupérer les données de l'utilisateur
    $userInfos = getUserInfosByMail($email);
    // var_dump($userInfos);
    //etape 2 : comparer le mot de pass saisie avec celui de la base, problème celui ci est chiffré => password_verify
    $hashed_password = $userInfos['password'];
    $isConfirmed = password_verify($entering_password, $hashed_password);
    if($isConfirmed){
        session_start();
        $_SESSION['user'] = $userInfos;
        header('location:index.php');
    
      }

}


?>
<div class="container">
<form action="" method="post">
    <div>
        <label for="email">Email</label>
        <input id="email" class="form-control" name="email" type="email">
    </div>
    <div>
        <label for="password">Password</label>
        <input id="password" class="form-control" name="password" type="password">
    </div>
    <input type="submit" value="Sign In">
</form>
</div>

<?php
include 'partials/footer.php';
?>