<?php
session_start();
session_destroy();
header('location:index.php?status=succes&message= vous êtes bien deconnecté');
?>