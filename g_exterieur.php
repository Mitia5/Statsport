<?php
    include ('function.php');
    $retour = stat_general_exterieur();
    echo json_encode($retour);

?>