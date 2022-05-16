<?php
if(isset($_GET[id]))&& !empty($_GET['id']){
    $id = $_GET['id'];
    deletepost($id);
    header('location:index.php?status=succes&message=Le post a été supprimé');
}