<?php
include '../../actions/connection.php';

$username = $_POST["username"];
//$username = $mysqli->real_escape_string(stripslashes(strip_tags($_POST["username"])));
$password = $mysqli->real_escape_string(($_POST["password"]));
$email = $mysqli->real_escape_string(stripslashes(strip_tags($_POST["email"])));

$sql = 'SELECT * FROM users WHERE username = "'.$username.'"';
$result = $mysqli->query($sql);

if ($result->num_rows > 0){
    $error = "Ovaj username je vec zauzet!<br>";
} else {
    $sql = 'SELECT * FROM users WHERE Email = "' . $email . '"';
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        $error = "Ovaj email je vec zauzet!<br>";
    } else {
        $sql = "SELECT id FROM users ORDER BY id DESC LIMIT 1";
        $result = $mysqli->query($sql);
        $row = $result->fetch_assoc();
        $sql = "INSERT INTO users (username, password, email) VALUES ('$username','$password','$email')";

        if ($mysqli->query($sql)) {
            $_SESSION["message"] = "Nalog za ucenika je uspjesno kreiran.";
            header('location:../index.php');
        } else {
            $error = "Greska pri kreiranju ucenika. Pokusajte opet kasnije.";
        }
    }
}

echo $error;