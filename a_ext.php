<?php
    include ('function.php');
    $retour = stat_attaque_exterieur();
    echo json_encode($retour);

?>