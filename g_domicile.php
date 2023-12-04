<?php
    include ('function.php');
    $retour = stat_general_domicil();
    echo json_encode($retour);

?>