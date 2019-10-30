<?php
    try {
        $db = new PDO('mysql:host=localhost;dbname=camagru_users', 'root', 'Damian');
    }
    catch (exception $e){
        echo "An error as occurred";
    }
?>