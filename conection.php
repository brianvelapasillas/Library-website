<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "publications";


    $conection = mysqli_connect($server, $user, $pass,$bd) 
        or die("Unexpected error while connecting to the database");

    mysqli_set_charset($conection, "utf8"); 
