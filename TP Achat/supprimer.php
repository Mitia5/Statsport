<?php
    include ('../inc/function.php');
    header( "Content-Type: application/json"); 
    
    $supp=supprimer();
    echo json_encode($supp);

?>