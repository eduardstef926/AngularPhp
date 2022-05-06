<?php
    session_start();
    include("connection.php");
    include("functions.php");

    if (isset($_POST['student'])) {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user_name = $_POST['user_name'];
            $password = $_POST['password'];
            if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
                $user_id = random_num(20) % 100;
                $query = "insert into students1(id,studentName,password) values ('$user_id','$user_name','$password')";
                mysqli_query($conn, $query);
                header("Location: loginStudent.php");
                die;
            } else {
                echo "Please enter some valid information!";
            }
        }
    }
    if (isset($_POST['professor'])) {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $professorName = $_POST['professor_name'];
            $password = $_POST['password'];
            if (!empty($professorName) && !empty($password) && !is_numeric($professorName)) {
                $professor_id = random_num(20) % 100;
                $query = "insert into professor1(id,professor_name,password) values ('$professor_id','$professorName','$password')";
                mysqli_query($conn, $query);
                header("Location: loginProfessor.php");
                die;
            } else {
                echo "Please enter some valid information!";
            }
        }
    }
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>SignUp Student</title>
</head>
<body>
    <style type="text/css">
        #text{
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
        }
        #button{
            padding: 10px;
            width: 100px;
            color: white;
            background-color: lightblue;
            border: none;
        }
        #box{
            background-color: grey;
            margin: auto;
            width: 300px;
            padding: 20px;
        }
        #box2{
            background-color: grey;
            margin: auto;
            width: 300px;
            padding: 20px;
        }
        </style>
        <div id="box">
            <form method="post">
                <div style="font-size: 20px; margin:10px; color:white">SignUp Student</div>
                <input id="text" type="text" name="user_name"><br><br>
                <input id="text" type="password" name="password"><br><br>
                <input name="student" id="button" type="submit" value="SignUp"><br><br>
                <a href="loginStudent.php">Click to Login</a><br><br>
            </form>
        </div>
        <div id="box2">
            <form method="post">
                <div style="font-size: 20px; margin:10px; color:white">SignUp Professor</div>
                <input id="text" type="text" name="professor_name"><br><br>
                <input id="text" type="password" name="password"><br><br>
                <input name="professor" id="button" type="submit" value="SignUp"><br><br>
                <a href="loginProfessor.php">Click to Login</a><br><br>
            </form>
        </div>
</body>
</html> -->