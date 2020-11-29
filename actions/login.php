<?php
include "connection.php";

$username = $mysqli->real_escape_string(strip_tags($_POST['username']));
$password = $mysqli->real_escape_string(strip_tags($_POST['password']));

$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $mysqli->query($sql);

if($result->num_rows == 1) {
    $row = $result->fetch_assoc();

    if(password_verify($password, $row['password'])) {
        $_SESSION['loggedIn'] = TRUE;
        $_SESSION['username'] = $row['username'];
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['nastavnik'] = 0;

        if ($row['nastavnik'] == "1") {
            $_SESSION['nastavnik'] = 1;
            header('location:../nastavnik/index.php');
        } else {
            header('location:../ucenik.php');
        }
    } else {
        echo "Username ili password nijesu tacni.";
    }
} else {
    echo "Username ili password nijesu tacni.";
}