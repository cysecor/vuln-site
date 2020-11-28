<?php include "header.php"; ?>

<h3>Ucenikov ID: <?php echo strip_tags($_GET['ucenik_id']); ?></h3>
<br>

<a href="dodajOcjenu.php?ucenik_id=<?php echo htmlspecialchars(strip_tags((int)$_GET['ucenik_id'])); ?>">Dodaj ocjenu</a>
<br><br>

<?php
$ucenik_id = $mysqli->real_escape_string(strip_tags((int)$_GET['ucenik_id']));

$sql = 'SELECT * FROM ocjene WHERE ucenik_id = ' . $ucenik_id;
$result = $mysqli->query($sql);
?>

<table border="1">

    <tr>
        <th>Predmet</th>
        <th>Ocjena</th>
    </tr>

    <?php
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

<?php include "footer.php"; ?>