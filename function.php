<?php
    include('connexion.php');
    //STATIQUE GENERAL
    function stat_general_domicil (){
        $r = array();
        $result = mysqli_query (dbconnect(), "select * from statistique_general where categorie='domicil';");
        while ($line = mysqli_fetch_array($result)) {
            $r[] = $line;
        }
        return $r;
    }
    function stat_general_exterieur(){
        $r = array();
        $result = mysqli_query (dbconnect(), "select * from statistique_general where categorie='exterieur';");
        while ($line = mysqli_fetch_array($result)) {
            $r[] = $line;
        }
        return $r;
    }
    function stat_general_autre(){
        $r = array();
        $result = mysqli_query (dbconnect(), "select * from statistique_general where categorie='general';");
        while ($line = mysqli_fetch_array($result)) {
            $r[] = $line;
        }
        return $r;
    }

    //STATIQTIQUE DEFENSE 
    function stat_defense_domicil (){
        $r = array();
        $result = mysqli_query (dbconnect(),"select * from statistique_defense where categorie='domicil';");
        while ($line = mysqli_fetch_array($result)) {
            $r[] = $line;
        }
        return $r;
    }
    function stat_defense_exterieur (){
        $r = array();
        $result = mysqli_query (dbconnect(), "select * from statistique_defense where categorie='exterieur';");
        while ($line = mysqli_fetch_array($result)) {
            $r[] = $line;
        }
        return $r;
    }
    function stat_defense_autre (){
        $r = array();
        $result = mysqli_query (dbconnect(), "select * from statistique_defense where categorie='general';");
        while ($line = mysqli_fetch_array($result)) {
            $r[] = $line;
        }
        return $r;
    }

    //STATISTIQUE ATTAQUE
    function stat_attaque_domicil (){
        $r = array();
        $result = mysqli_query (dbconnect(),"select * from statistique_attaque where categorie='domicil';");
        while ($line = mysqli_fetch_array($result)) {
            $r[] = $line;
        }
        return $r;
    }
    function stat_attaque_exterieur (){
        $r = array();
        $result = mysqli_query (dbconnect(), "select * from statistique_attaque where categorie='exterieur';");
        while ($line = mysqli_fetch_array($result)) {
            $r[] = $line;
        }
        return $r;
    }
    function stat_attaque_autre (){
        $r = array();
        $result = mysqli_query (dbconnect(), "select * from statistique_attaque where categorie='general';");
        while ($line = mysqli_fetch_array($result)) {
            $r[] = $line;
        }
        return $r;
    }




?>