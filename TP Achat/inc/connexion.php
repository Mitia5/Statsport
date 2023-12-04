<?php
    function dbconnect()
    {
        static $connect = null;
        if ($connect === null) {
            $connect = mysqli_connect('localhost', 'root', '', 'achat');
        }
        return $connect;
    }
?>