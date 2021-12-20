<?php

    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DB','api_crud');

    $db_connect = mysqli_connect(HOST,USER,PASS,DB) or die ('ngga connect ngabs');
    
    header('content-type: application/json');
?>