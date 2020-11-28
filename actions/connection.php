<?php
session_start(); // ovo dodati kad krenem register i login da radim

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "elektronski_dnevnik";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}