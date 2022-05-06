<?php
    session_start();
    
    include("connection.php");
    include("functions.php");

    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    $json = file_get_contents('php://input');
    $array = json_decode($json,true);
    $userId = $array['username'];
    $currentIndex = $array['currentIndex'];
    $index = 0;
    $query1 = "select * from coursegrades1 where studentName = '$userId'";
    $result2 = mysqli_query($conn, $query1);
    while ($index < $currentIndex + 4) {
        if ($index >= $currentIndex) {
            if ($row = mysqli_fetch_array($result2, MYSQLI_NUM)) {
                $string1 =  $row[4]." ";
                $string2 = $row[3]."|";
                echo $string1,$string2;
            }
        }else{
            if ($row = mysqli_fetch_array($result2, MYSQLI_NUM)) {
                $string1 =  $row[4]." ";
                $string2 = $row[3]."|";
            }
        }
        $index ++;
    }

?>

