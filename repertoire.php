
<?php
session_start();
include'partials/head.php';
if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = ($_GET['id']);
    // var_dump($id); 
    // echo $id;

$limo = getAllpostscategoriebyid($id);
// var_dump ($limo);
// echo $li['titre'];
// echo ' l\'Article s\'intitule '. $li['titre']. '<br>';
// echo 'Voici votre article '. $li['content'].'<br>';
// echo 'date '.$li['date'];
?>
<div class='container-fluid mt-2 mb-5'>
    <div class='row'>
        <?php foreach ($limo as $li) { ?>
            <div class="col-12 col-md-6 col-lg-6 col-xl-4 col-xxl-3">
                <div class="card text-center mt-1 pb-0 h-100" style="width: 18rem;">
                     <img src="<?php echo $li['image'] ?>" class="card-img-top img-fluid" alt="...">
                          <div class="card-body">
                               <h3 class="card-title"><?php echo $li['titre'] ?></h3>
                               <p class="card-text"><?php echo $li['content'] ?></p>
                               <h6 class="card-title"><?php echo $li['date'] ?></h6>
                               <a href="single.php?id= <?php echo $li['id'] ?>" class="btn btn-primary">Voir EN PLUS...</a>
                           </div>
                </div>
            </div>
        <?php }; ?>
    </div>
</div>
<?php
}
?>
<?php
include'partials/footer.php';
 ?>   