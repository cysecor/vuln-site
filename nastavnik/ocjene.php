<?php include "header.php"; ?>

<div class="ocjene">

    <h3>Ucenikov ID: <?php echo strip_tags($_GET['ucenik_id']); ?></h3>

    <br>

    <a href="dodajOcjenu.php?ucenik_id=<?php echo strip_tags($_GET['ucenik_id']); ?>">Dodaj ocjenu</a>

    <br><br>

    <?php
    $ucenik_id = $mysqli->real_escape_string(strip_tags((int)$_GET['ucenik_id']));

    $sql = "SELECT * FROM ocjene WHERE ucenik_id = " . $ucenik_id;
    $results = $mysqli->query($sql);
    ?>

    <table class="table">
        <tr>
            <th>Predmet</th>
            <th>Ocjena</th>
        </tr>

        <?php
        while($row = $results->fetch_assoc()) {
            ?>

            <tr>
                <td><?php echo $row['predmet']; ?></td>
                <td><?php echo $row['ocjena']; ?></td>
            </tr>

        <?php
        }

        ?>
    </table>

</div>

<?php include "footer.php"; ?>
