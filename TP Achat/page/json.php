<?php
    include ('../inc/function.php');
    header( "Content-Type: application/json"); 
    
    $retour = General();
    echo json_encode($retour);

?>