<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "el_dnevnik";

$mysqli = new mysqli($servername, $username, $password, $dbname);

if($mysqli->connect_error) {
    die("Konekcija nije uspjela: " . $mysqli->connect_error);
}