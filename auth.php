<!-- <?php
    session_start();
    include ("connect.php");
    $result = $DB_NAME->query("SELECT username, password FROM users");
    $array = $result->fetchall();
    $x = 0;
    while ($x < count($array))
    {
        if ($array[$x]['username'] === $_POST['username'])
        {
            if ($array[$x]['password'] === $_POST['password'])
            {
                echo "success";
                //header("location: loggedon.php");
            }
        }
        $x++;
    }
?> -->