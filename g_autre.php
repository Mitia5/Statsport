<?php
    include ('function.php');
    $retour = stat_general_autre();
    echo json_encode($retour);

?>