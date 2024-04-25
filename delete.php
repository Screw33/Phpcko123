<?php

include "database.php";

if (isset($_POST["submit"])) {
    $id = $_POST["id"];

    deleteFunction($id);
}

?>

<a href="web.php">Home</a>
<form action="delete.php" method="post">
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