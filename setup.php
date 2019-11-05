<?php
    require("database.php");
    try 
	{
		$conn = new PDO($DB_SERVER, $DB_USER, $DB_PASSWORD);
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
			activated BOOLEAN DEFAULT false,
			notification_recieved BOOLEAN NOT NULL	
		)";
		$conn->exec($sql);
        echo "The users table was successfully created<br/>";
        

		// create table images that references user with a foreign key
        
		$sql = "CREATE TABLE IF NOT EXISTS images 
		(
			image_id INT(255) AUTO_INCREMENT PRIMARY KEY NOT NULL,
			user_id INT(255) NOT NULL,
			FOREIGN KEY (user_id) REFERENCES users(user_id), 
			image LONGTEXT CHARACTER SET utf8 NOT NULL,
			date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL	
		)";
		$conn->exec($sql);
		echo "The images table was successfully created<br/>";

		// create table comments that will reference user with a foreign key

		$sql = "CREATE TABLE IF NOT EXISTS comments
		(
			comment_id INT(255) AUTO_INCREMENT PRIMARY KEY NOT NULL,
			user_id INT(255) NOT NULL,
			FOREIGN KEY (user_id) REFERENCES users(user_id),
			date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
			comment TEXT NOT NULL
		)";
		$conn->exec($sql);
		echo "The comments table was successfully created<br/>";

	// create table likes that will reference user with a foreign key

		$sql = "CREATE TABLE IF NOT EXISTS likes
		(
			like_id INT(255) AUTO_INCREMENT PRIMARY KEY NOT NULL,
			user_id INT(255) NOT NULL,
			FOREIGN KEY (user_id) REFERENCES users(user_id),
			like_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,	
			like_count INT NOT NULL
		)";
		$conn->exec($sql);
		echo "The likes table was successfully created<br/>";
}
catch(PDOException $e){
	echo $sql . "<br>" . $e->getMessage();
}
?>