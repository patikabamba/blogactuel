<?php
session_start();
include "partials/head.php"; ?>
<?php

if (isset($_SESSION["user"]) && !empty($_SESSION["user"])) {

//   var_dump($_SESSION["user"]);
  if (isset($_POST) && !empty($_POST)) {
//    var_dump($_POST); 
//     var_dump($_FILES);
// Les données utiles pour la fonction addpost()
$userid = $_SESSION['user']['id'];
$titre = $_POST['titre'];
$image = $_FILES['image'];
$content = $_POST['content'];
$categories_id = $_POST['categorie'];
$date = date("Y-m-d H:i:s");
// Verification et destination de l'image

$upload_dir = 'image/';
$from = $image['tmp_name'];
$name = uniqid();
$lastdot = strrpos($name, '.');
$ext = substr($image['name'], $lastdot);
$to = $upload_dir.$name.$ext;
move_uploaded_file($from,$to);



addpost($titre, $content, $date, $to, $categories_id, $userid);
header('location:index.php?status=succes&message=Votre article a bien été enregistré');
  }
}else{
    echo "Vous devez etre connecté pour ajouter un article";
}
?>





<div class="container">
<form action=" " method="POST" enctype="multipart/form-data">
    <div>
        <label for="titre">titre</label>
        <input id= 'titre' type="text" name="titre" class = "form-control">
   </div>
   <div>
        <label for="image">image</label>
        <input  id = "image" type="file" name="image" class = "form-control">
   </div>
   <div>

        <label for="content">content</label>
        <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
   </div> 
     <div>
     <select class="form-select" aria-label="Default select example" name="categorie">
  <option selected>Open this select menu</option>
  <?php
  $categories = getAllcategories();
  foreach ($categories as $categorie) {
?>
  <option value="<?php echo $categorie['id'] ?>"><?php echo $categorie['name'] ?></option>
<?php
  }
  ?>
</select>
   </div>
     <input class="btn btn-primary" type="submit" value="publier"> 
</form>