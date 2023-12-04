<?php
    include('connexion.php');

  
    function General (){
        $r = array();
        $result = mysqli_query (dbconnect(), "select * from statistique_general");
        while ($line = mysqli_fetch_array($result)) {
            $r[] = $line;
        }
        return $r;
    }

    function Defense (){
        $r = array();
        $result = mysqli_query (dbconnect(), "select * from statistique_defense");
        while ($line = mysqli_fetch_array($result)) {
            $r[] = $line;
        }
        return $r;
    }


    function Attaque (){
        $r = array();
        $result = mysqli_query (dbconnect(), "select * from statistique_attaque");
        while ($line = mysqli_fetch_array($result)) {
            $r[] = $line;
        }
        return $r;
    }


   
?> 
