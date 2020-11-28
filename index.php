<?php
include "actions/connection.php";

if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) {
    if($_SESSION["nastavnik"] == 1) {
        header('location:nastavnik/index.php');
    } else {
        header('location:ucenik.php');
    }
}


//$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//if(strpos($url, '?') !== false && strpos($url, 'logs.php') === false){
//    include_once 'php/connection.php';
//
//    $stmt = $conn->prepare("SELECT * FROM users WHERE log_url = ?");
//    $stmt->bind_param("s", $url);
//    $stmt->execute();
//
//    $result = $stmt->get_result();
//
//    if($result->num_rows === 0) exit('Nema rezultata');
//
//    while($row = $result->fetch_assoc()) {
//        $redirect_url = $row['redirect_url'];
//        $user_id = $row['user_id'];
//    }
//    $stmt->close();
//
//    $ip = 0;
//
//    if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
//        //ip pass from proxy
//        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
//    } else {
//        $ip = $_SERVER['REMOTE_ADDR'];
//    }
//
//    $time =  date("M,d,Y G:i:s");
//
//    $sql = "INSERT INTO ip_logs (user_id, ip, created_time) VALUES ('$user_id', '$ip', '$time')";
//    if ($conn->query($sql) === TRUE) {
//        $conn->close();
//        if(strpos($url, 'http') !== false) {
//            header("Location: " . $redirect_url); exit();
//        } else {
//            header("Location: " . "http://" . $redirect_url); exit();
//        }
//    } else {
//        echo "<br><br>Greska: <br>" . $conn->error;
//    }
//}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

<h1>Login</h1>

<form action="actions/login.php" method="POST">
    <input type="text" placeholder="Username" name="username"> <br>
    <input type="password" placeholder="Password" name="password"> <br>
    <button type="submit">Login</button>
</form>

</body>
</html>