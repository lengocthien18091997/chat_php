<?php
    require "db.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO account VALUES(null, '$username', '$password', '$name', '$phone')";
    if (mysqli_query($connect, $query)) {
        echo "success";
    } else {
        echo "error";
    }
?>