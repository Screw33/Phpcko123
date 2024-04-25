<?php

include "database.php";

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $id = $_POST["id"];

    updateFunction($username, $password, $id);
}

?>

<a href="web.php">Home</a>
<form action="update.php" method="post">
    <input name="username" placeholder="username"/>
    <input name="password" placeholder="password"/>
    <select name="id">
        <?php
            $res = getFunction();
            while($row = mysqli_fetch_assoc($res)){
                $id = $row["userId"];
                echo "<option value='$id'>$id</option>";
            }
        ?>
    </select>
    <input type="submit" name="submit"></input>
</form>