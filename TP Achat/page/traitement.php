<?php
    include('../inc/function.php');
    $qtt = $_POST['qtt'];
    $produit = $_POST['produit'];
    $date = $_POST['date'];
    insertAchat($qtt,$produit,$date);
    

?>