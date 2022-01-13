<?php
    require "db.php";

    $mesxid = $_POST['mesxid'];
    $mesyid = $_POST['mesyid'];
    $mesnumber = $_POST['mesnumber'];
    $mescontent = $_POST['mescontent'];

    $query = "INSERT INTO chatcontent VALUES(null, '$mesxid', '$mesyid', '$mesnumber', '$mescontent')";
    if (mysqli_query($connect, $query)) {
        echo "success";
    } else {
        echo "error";
    }
?>