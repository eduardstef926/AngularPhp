<?php

function check_loginStudent($conn){
    if (isset($_SESSION['user_id'])) {
        $name = $_SESSION['user_id'];
        $query1 = "select * from students where studentName = $name";
        $result1 = mysqli_query($conn, $query1);
        if ($result1 && mysqli_num_rows($result1) > 0) {
            $user_data = mysqli_fetch_assoc($result1);
            return $user_data;
        }
    }   
}

function check_loginProfessor($conn){
        $name = $_SESSION['user_id'];
        $query2 = "select * from professors where id = $name limit 1";
        $result2 = mysqli_query($conn,$query2);
        if($result2 && mysqli_num_rows($result2) > 0){
            $professor_data = mysqli_fetch_assoc($result2);
            return $professor_data;
        }
}

function getStudentGrades($conn){
        $query3 = "select * from professors";
        $result3 = mysqli_query($conn,$query3);
      //  $result4 = mysqli_query($conn,$query4);
        if($result3 && mysqli_num_rows($result3) > 0){
            $gradeData = mysqli_fetch_assoc($result3);
            return $gradeData;
        }
}

function updateGrade($conn,$student){
    $studentName = $student['studentName'];
    $update = "update from coursegrades where studentName = '$studentName'";
    $result3 = mysqli_query($conn, $update);
}

function random_num($length){
    $text = "";
    if($length < 5){
        $length = 5;
    }
    $len = rand(4,$length);
    for($i=0; $i < $len; ++$i){
        $text .= rand(0,9);
    }
    return $text;
}