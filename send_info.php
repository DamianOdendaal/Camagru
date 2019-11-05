<!-- <?php
    include ("connect.php");
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $result = $DB_NAME->prepare("INSERT INTO `users` (`id`, `username`, `password`, `email`, `status`) VALUES (NULL, ?, ?, ?, ?)");
    $result->bindValue(1, $username);
    $result->bindValue(2, $password);
    $result->bindValue(3, $email);
    $result->bindValue(4, 'inactive');
    $result->execute();
    $to = $email;
    $msg = "http://localhost:8080/camagru/verified.php";
    mail($to, "click below", $msg);
    header("location: index.php");
?> -->