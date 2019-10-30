<?php
    // require "database.php";
    // $DB_INFO = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
    // try{
    //     $connect = new PDO($DB_INFO,DB_USER,DB_PASS);
    //     $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    //     echo "Succesfully connected to the database";
    // }catch(PDOExeption $exeption) { // PD0Expetion handles the connection error in the database 
    //     die("unable to connect to the database");
    // }
    // session_start();
    // include ("database.php");
    // $statement = $db->prepare("INSERT INTO `images` (`imgId`, `imgSrc`, `imgOwner`, `imgLikes`, `imgComments`) VALUES (?, ?, ?, ?)");

    // $statement->execute();
    // header("location: http://localhost:8081/camagru/confirmation.php");

    try 
	{
		$conn = new PDO($DB_DNS, $DB_USER, $DB_PASSWORD);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "CREATE DATABASE IF NOT EXISTS $DB_NAME";
		$conn->exec($sql);
		echo "Database created successfully<br/>";
		$sql = "USE $DB_NAME;";
        $conn->exec($sql);
        
        
        // lets create tables for users, images, likes and comments
        

		$sql = "CREATE TABLE IF NOT EXISTS users 
		(
			user_id INT(255) AUTO_INCREMENT PRIMARY KEY NOT NULL,
			user_name VARCHAR(255) UNIQUE NOT NULL,
			email VARCHAR(255) UNIQUE NOT NULL,
			password TEXT NOT NULL,
			token VARCHAR(32) NOT NULL,
			activated BOOLEAN NOT NULL,
			notifications BOOLEAN NOT NULL	
		)";
		$conn->exec($sql);
        echo "Table 'users' created successfully<br/>";
        

		// create table images that references user with a foreign key
        
		$sql = "CREATE TABLE IF NOT EXISTS images 
		(
			image_id INT(255) AUTO_INCREMENT PRIMARY KEY NOT NULL,
			user_id INT(255) NOT NULL,
			FOREIGN KEY (user_id) REFERENCES users(user_id), 
			content LONGTEXT CHARACTER SET utf8 NOT NULL,
			date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL	
		)";
		$conn->exec($sql);
		echo "Table 'images' created successfully<br/>";

?>