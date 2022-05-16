<?php 
// include 'functions.php';
include 'partials/head.php'; 
if (isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
    $post = getpostbyid($id);
    $user = getpostbyuser($post['user_id']);
    // var_dump($post);?>
    <img src="<?php echo $post['image'] ?>" class="img-fluid" alt="...">
                          
    <h3> <?php echo $post['titre'] ?> </h3>
    <p > <?php echo $post['content'] ?> </p>
    <h6> <?php echo $post['date'] ?> </h6>
    <?php
}else{
    header("location:single.php?id=1");
}?>
<div class="container">
        <form action="" method="post">
            <div>
                <label for="psaudo">Psaudo</label>
                <input id="psaudo" class="form-control" name="psaudo" type="text">
            </div>
            <div>
                <label for="content">content</label>
                <input id="content" class="form-control" name="content" type="text">
            </div>
            
            <div class="container form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                <label for="floatingTextarea">Mon commentaire</label>
            </div>

            <a class="btn btn-primary" href="editpost.php?id=<?php echo $id ?>" >Editer</a>
            <a class="btn btn-primary" href="editpost.php?id=<?php echo $id ?>" >Effacer</a>


        </form>
</div>

<?php
include 'partials/footer.php';
?>



