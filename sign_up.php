
<?php
// require 'functions.php';


include 'partials/head.php';


if (isset($_POST) && !empty($_POST)){
     $psaudo = htmlentities($_POST['psaudo']);
     $email = htmlentities($_POST['email']);
     $password_clean = htmlentities($_POST['password']);
     $password_hash = password_hash($password_clean, PASSWORD_BCRYPT);
     register($psaudo, $password_hash, $email);
}
?>
<?php
if(isset($_POST["form"]) && !empty($_POST["form"])){
     echo password_hash(),
}
?>

<h1> Formulaire de connection </h1>
<form action=" " method="POST">
    <div>
        <label for="psaudo">Psaudo</label>
        <input id= 'psaudo' type="text" name="psaudo" class = "form-control"><br>
   </div>
   <div>
        <label for="email">Email</label>
        <input  id = "email" type="email" name="email" class = "form-control"><br>
   </div>
   <div>

        <label for="password">Mot de passe</label>
        <input  id = "password" type="password" name="password"><br>
   </div>    
     <button type= "submit"> Envoyez</button>
      
</form>
