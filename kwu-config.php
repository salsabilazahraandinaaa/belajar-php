<?php
    $mysqli = new mysqli("localhost","root","","kwu_salsabilla");
    if ($mysqli -> connect_errno){
        echo "failed to connect to MySQL:" .$mysqli -> connect_error;
        exit();

    }
?>