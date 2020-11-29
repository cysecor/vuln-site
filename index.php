<?php
include "actions/connection.php";

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) {
    if($_SESSION['nastavnik'] == 1) {
        header('location:nastavnik/index.php');
    } else {
        header('location:ucenik.php');
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Elektronski Dnevnik</title>
</head>
<body>

<form class="login-form" action="actions/login.php" method="POST">
    <h1>Login</h1>
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form>

</body>
</html>