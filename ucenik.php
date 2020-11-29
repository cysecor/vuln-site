<?php
include "actions/connection.php";

if($_SESSION['nastavnik'] == 1) {
    header('location:nastavnik/index.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Ucenik</title>
</head>
<body>

<a href="actions/logout.php">logout</a>

<br><br>

<form style="background-color: #fff; padding: 30px;" method="POST" id="domaciUpload" enctype="multipart/form-data" action="actions/domaci.php">
    <h1>Uploaduj domaci</h1>
    <input type="file" name="domaci">
    <button type="submit" id="uploadBtn">Uploaduj</button>
</form>

<h1>Tvoje ocjene</h1>

<table class="table">
    <tr>
        <th>Predmet</th>
        <th>Ocjena</th>
    </tr>

    <?php
    $sql = 'SELECT * FROM ocjene WHERE ucenik_id = ' . $_SESSION['user_id'];
    $result = $mysqli->query($sql);

    while ($row = $result->fetch_assoc()) {
        ?>

        <tr>
            <td><?php echo $row['predmet'] ?></td>
            <td><?php echo $row['ocjena'] ?></td>
        </tr>

        <?php
    }
    ?>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>