<?php include "header.php"; ?>

<?php
if(isset($_SESSION['message'])) {
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}
?>

<form method="POST" action="actions/upisOcjene.php">
    <input type="hidden" name="ucenik_id" value="<?php echo $_GET['ucenik_id'] ?>">

    <select name="predmet">
        <option value="Programiranje">Programiranje</option>
        <option value="Matematika">Matematika</option>
        <option value="Engleski">Engleski</option>
        <option value="Hemija">Hemija</option>
        <option value="Fizika">Fizika</option>
    </select> <br>

    <input type="number" name="ocjena" max="5" min="1"> <br>

    <button type="submit">Ocjeni</button>
</form>

<?php include "footer.php"; ?>
