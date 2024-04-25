<?php
function connection(){
    $db_conn = mysqli_connect("localhost", "root", "", "hodina1204");

    if ($db_conn) {
        echo"Pripojenie OK<br>";
    } else {
        die("Error v pripojeni");
    }

    return $db_conn;
}

function getFunction(){
    $db_conn = connection();
    $q = "SELECT * FROM users";
    $res = mysqli_query($db_conn, $q);
    
    if(!$res){
        die("Zlyhal" . mysqli_error());
    }

    return $res;
}

function updateFunction($username, $password, $id){
    $db_conn = connection();
    $q = "UPDATE users SET username='$username', pass='$password' where userId='$id'";
    $res = mysqli_query($db_conn, $q);
    if(!$res){
        die("zlyhanie" . mysqli_error());
    }    
}

function addFunction($username, $password){
    $db_conn = connection();
    $q = "INSERT INTO users (username, pass) VALUES ('$username', '$password')";
    $res = mysqli_query($db_conn, $q);
    if(!$res){
        die("zlyhanie" . mysqli_error());
    }
    
}

function deleteFunction($id){
    $db_conn = connection();
    $q = "DELETE FROM users WHERE userId='$id'";
    $res = mysqli_query($db_conn, $q);
    if(!$res){
        die("zlyhanie" . mysqli_error());
    }    
}