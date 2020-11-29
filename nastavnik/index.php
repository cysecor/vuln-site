<?php include "header.php"; ?>

<?php
if (isset($_SESSION['message'])) {
    echo "<p class='message-success'>" . $_SESSION['message'] . "</p>";
    unset($_SESSION['message']);
}

$sql = "SELECT * FROM users WHERE nastavnik != 1";
$result = $mysqli->query($sql);
?>

<h1>Lista ucenika</h1>

<table class="table">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>#</th>
    </tr>

    <?php

    while($row = $result->fetch_assoc()) { ?>

        <tr>
            <td><?php echo $row['username'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><a href="ocjene.php?ucenik_id=<?php echo $row['id']; ?>">Vidi ocjene</a></td>
        </tr>

    <?php }

    ?>

</table>



<?php include "footer.php"; ?>