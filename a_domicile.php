<?php
    include ('function.php');
    $retour = stat_attaque_domicil();
    echo json_encode($retour);

?>