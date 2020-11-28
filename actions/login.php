<?php
include 'connection.php';

$username = $mysqli->real_escape_string(stripslashes(strip_tags($_POST["username"])));
$password = $mysqli->real_escape_string($_POST["password"]);

$sql = "SELECT * FROM users WHERE username = '".$username."'AND password = '".$password."'";
$result = $mysqli->query($sql);

if($result->num_rows == 1){
    $row = $result->fetch_assoc();

    $_SESSION["loggedIn"] = TRUE;
    $_SESSION["username"] = $row["username"];
    $_SESSION["user_id"] = $row["id"];
    $_SESSION["nastavnik"] = 0;

    if($row["nastavnik"] == "1") {
        $_SESSION["nastavnik"] = 1;
        header('location:../nastavnik/index.php');
    } else {
        header('location:../ucenik.php');
    }


} else{
    $error = "Netacan username ili password!<br>";
}

echo $error;