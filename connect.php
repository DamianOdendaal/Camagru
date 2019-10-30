<?php
    require "database.php";
    $DB_INFO = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
    try{
        $connect = new PDO($DB_INFO,DB_USER,DB_PASS);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        echo "Succesfully connected to the database";
    }catch(PDOExeption $exeption) { // PD0Expetion handles the connection error in the database 
        die("unable to connect to the database");
    }
?>