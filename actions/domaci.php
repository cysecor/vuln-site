<?php
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES['domaci']['name']);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if($_FILES['domaci']['size'] > 500000) {
    echo "Fajl je preveliki";
    $uploadOk = 0;
}

if($uploadOk == 0) {
    echo "Tvoj fajl nije uploadovan.";
} else {
    if (move_uploaded_file($_FILES['domaci']['tmp_name'], $target_file)) {
        echo "Fajl je uploadovan!";
    } else {
        echo "Greska pri uploadovanju, provjeri permissions.";
    }
}