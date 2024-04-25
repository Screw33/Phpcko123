<?php

include "database.php";

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    addFunction($username, $password);
}

?>
<a href="web.php">Home</a>
<form action="registracia.php" method="post">
    <input name="username" placeholder="username"/>
    <input name="password" placeholder="password"/>
    <input type="submit" name="submit"></input>
</form>
