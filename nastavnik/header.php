<?php
include '../actions/connection.php';

if($_SESSION['nastavnik'] == 0) {
    header('location:../ucenik.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nastavnikov dnevnih</title>
</head>
<body>

<h1>Nastavnikov Dnevnik</h1>


<a href="noviUcenik.php">Dodaj novog ucenika</a>

<a href="../actions/logout.php">Logout</a>

<hr>