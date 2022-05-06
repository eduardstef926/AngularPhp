<?php
    session_start();
    
    include("connection.php");
    include("functions.php");

    // $name = $_SESSION['professor_name'];
    // $professorNameQuery = "select  * from professor where professor_name = '$name' limit 1";
    // $resultName = mysqli_query($conn, $professorNameQuery);
    // $professor = mysqli_fetch_assoc($resultName);
    // $professorName = $professor['professor_name'];
    // $courseGrades = "select * from coursegrades where professor_name = '$professorName' limit 1";
    // $resultGrades = mysqli_query($conn,$courseGrades);
    // $student = mysqli_fetch_assoc($resultGrades);
    // updateGrade($conn,$student);
    // $getCourse = "select * from coursegrades where professor_name = '$professorName'";
    // if($_SERVER['REQUEST_METHOD'] == "POST"){
    //     $user_name = $_POST['username'];
    //     $newgrade = $_POST['password'];
    //     if(!empty($user_name) && !empty($newgrade)){
    //         $query3 = "select * from coursegrades where studentName = '$user_name' limit 1";
    //         $result3 = mysqli_query($conn,$query3);
    //         if($result3){
    //             if($result3 && mysqli_num_rows($result3) > 0){
    //                $query4 = "update coursegrades set grade = '$newgrade' where studentName = '$user_name'";
    //                mysqli_query($conn,$query4);
    //             }
    //         }
    //     }
    // }
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    $json = file_get_contents('php://input');
    $array = json_decode($json,true);
    $username = $array['username']; 
    $query1 = "select * from coursegrades1 where professor_name = '$username' limit 1";
    $result2 = mysqli_query($conn, $query1);
    $course = mysqli_fetch_assoc($result2);
    echo $course['course'];
?>
