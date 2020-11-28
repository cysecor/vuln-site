<?php include "header.php"; ?>


<h3>Ucenikov ID: <?php echo $_GET['ucenik_id']; ?></h3>
<br>

<a href="dodajOcjenu.php?ucenik_id=<?php echo $_GET['ucenik_id']; ?>">Dodaj ocjenu</a>
<br><br>

<?php
$sql = 'SELECT * FROM ocjene WHERE ucenik_id = ' . $_GET['ucenik_id'];
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