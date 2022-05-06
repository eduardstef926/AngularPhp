<?php
    include("connection.php");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    $json = file_get_contents('php://input');
    $array = json_decode($json,true);
    $username = $array['username'];
    $query1 = "select * from coursegrades1 where professor_name = '$username'";
    $result2 = mysqli_query($conn, $query1);
    while($row = mysqli_fetch_array($result2,MYSQLI_NUM)){
           $string1 =  $row[1]." ";
           $string2 = $row[4]."|";
           echo $string1,$string2;
    }
?>