<?php
    include ('function.php');
    $retour = stat_defense_autre();
    echo json_encode($retour);

?>