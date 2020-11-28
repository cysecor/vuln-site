<?php include "header.php"; ?>

<h1>Registracija ucenika</h1>

<form action="actions/register.php" method="POST">
    <input type="text" placeholder="Username" name="username"> <br>
    <input type="email" name="email" placeholder="Email"> <br>
    <input type="password" placeholder="Password" name="password"> <br>
    <button type="submit">Register</button>
</form>

<?php include "footer.php"; ?>