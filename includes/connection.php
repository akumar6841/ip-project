<?php

    //DEFINE CONNECTION VARIABLES
    DEFINE('HOST','localhost');
    DEFINE('DB_NAME','ip_project');
    DEFINE('DB_USER','root');
    DEFINE('DB_PASS','');


    $connection = mysqli_connect(HOST, DB_NAME, DB_USER, DB_PASS);

    if(!$connection){
        die("Database connection failed!!");
    }




?>