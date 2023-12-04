<?php
    include ('function.php');
    $retour = stat_defense_exterieur();
    echo json_encode($retour);

?>