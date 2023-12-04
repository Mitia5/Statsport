<?php
    include ('function.php');
    $retour = stat_attaque_autre();
    echo json_encode($retour);

?>