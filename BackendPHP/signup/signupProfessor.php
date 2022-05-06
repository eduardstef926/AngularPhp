<?php
include("connection.php");
include("functions.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
$json = file_get_contents('php://input');
$array = json_decode($json,true);
$username = $array['username'];
$password = $array['password'];
$user_id = random_num(20) % 100;
echo $user_id,$username, $password;
$query = "insert into professor1(id,professor_name,password) values ('$user_id','$username','$password')";
mysqli_query($conn,$query);
?>