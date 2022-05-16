<?php 

require 'connection.php';

function getAllposts(){
    $db = dbconnect();
    $query = $db->query('SELECT* FROM posts ');
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
    return $results;
    // var_dump($results);
}

function getpostbyid( $post_id){
$db = dbconnect();
$query = $db->query("SELECT* FROM posts WHERE id =$post_id");
$result = $query->fetch(PDO::FETCH_ASSOC);
return $result;

}
function getpostbyuser( $users_id){
    $db = dbconnect();
    $query = $db->query("SELECT* FROM users WHERE id = $users_id");
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}
function register($psaudo, $password, $email){
    
 $db = dbconnect();
$query = $db->exec("INSERT INTO  users VALUES  (null, '$psaudo', '$password', '$email')");

}

function getUserInfosByMail($email){
    $db = dbconnect();
    $query = $db->query("SELECT * FROM users WHERE users.email='$email'");
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}
function getAllcategories(){
    $db = dbconnect();
    $query = $db->query('SELECT* FROM categories ');
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}
function getAllpostscategoriebyid($categorie){
    $db = dbconnect();
    $query = $db->query("SELECT* FROM posts WHERE categories_id = '$categorie'");
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
    return $results;
    
}

function addpost($titre, $content, $date, $image, $categorie, $id){
    $db = dbconnect();
    $query = $db->prepare("insert into posts VALUE (null, :titre, :content,:date, :image, :categorie, :user_id)");
    $query->bindparam(':titre',$titre);
    $query->bindparam(':content',$content);
    $query->bindparam(':date',$date);
    $query->bindparam(':image',$image);
    $query->bindparam(':categorie',$categorie);
    $query->bindparam(':user_id',$id);
    $query->execute();

}
function editpost($id, $titre,$content, $image,){
    $db = dbconnect();
     $query = $db->prepare("UPDATE  posts SET titre=:titre,content= :content,image=:image WHERE id=:id)");
     $query->bindparam(':id',$id);
    $query->bindparam(':titre',$titre);
    $query->bindparam(':content',$content);
    $query->bindparam(':image',$image);
    $query->execute();

}
function deletepost($id){
    $db = dbconnect();
    $query = $db->exec("DELETE FROM posts WHERE id = $id");
}
function editcom($psaudo, $content, $post_id){
    $db = dbconnect();
    $query = $db->prepare("INSERT into com VALUE (null, :psaudo, :content,:post_id)");
    $query->bindparam(':psaudo',$psaudo);
    $query->bindparam(':content',$content);
    $query->bindparam(':post_id',$post_id);
    $query->execute();
}


// $catalogues = getAllgaleries();
// foreach ($catalogues as $catalogue) {
//   echo $catalogue['name']."<br>";
// }
