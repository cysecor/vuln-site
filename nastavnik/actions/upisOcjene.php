<?php
include "../../actions/connection.php";

$predmet = $mysqli->real_escape_string(strip_tags($_POST['predmet']));
$ocjena = $mysqli->real_escape_string(strip_tags($_POST['ocjena']));
$ucenik_id = $mysqli->real_escape_string(strip_tags($_POST['ucenik_id']));

$sql = "SELECT * FROM ocjene WHERE ucenik_id = $ucenik_id AND predmet = '$predmet'";
$result = $mysqli->query($sql);

if($result->num_rows > 0) {
    $error = "Ucenik je vec dobio ocjenu iz ovoga predmeta!";
} else {
    $sql = "INSERT INTO ocjene (ucenik_id, predmet, ocjena) VALUES ('$ucenik_id', '$predmet', '$ocjena')";

    if($mysqli->query($sql)) {
        $_SESSION['message'] = "Ucenik je dobio ocjenu";
        header('location:../dodajOcjenu.php?ucenik_id=' . $ucenik_id);
    } else {
        $error = "Doslo je do greske.";
    }
}

echo $error;