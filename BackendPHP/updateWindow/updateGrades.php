<?php
    include("connection.php");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    $json = file_get_contents('php://input');
    $array = json_decode($json,true);
    $username = $array['username'];
    $newgrade = $array['newgrade'];
    $query1 = "update coursegrades1 set grade='$newgrade' where studentName='$username'";
    mysqli_query($conn, $query1);
    echo $username;
?>