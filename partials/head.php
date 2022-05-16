<?php require 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pageblog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>


<body>
  <div class = 'container-fluid  mt-5 mb-5' >
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid d-flex justify-content-between-evenly ">
        <a class="navbar-brand" href="./">Manga world</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./">Acceuil</a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categories
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php
                $categories = getAllcategories();
                // var_dump($catalogues);
              foreach ($categories as $categorie) { ?>  
                <li><a class="dropdown-item" href="repertoire.php?id=<?php echo $categorie['id']?>"> <?php echo $categorie['name'];?></a></li>
             <?php } ;?>
          </ul>
        </li>
        <?php if(isset($_SESSION['user']) && !empty($_SESSION['user'])){?>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">DECONNEXION</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addpost.php">AJOUTER UN POST</a>
        </li>
        <?php }else{?>
        <li class="nav-item">
          <a class="nav-link" href="signin.php">CONNEXION</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sign_up.php">INSCRIPTION</a>
        </li>
        <?php }; ?>
      </ul>
    </div>
  </div>
</nav>
</div>

