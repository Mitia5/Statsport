<?php
    include ('function.php');
    $retour = stat_defense_domicil();
    echo json_encode($retour);

?>