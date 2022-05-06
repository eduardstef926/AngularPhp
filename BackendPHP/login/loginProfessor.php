<?php
    session_start();
    include("connection.php");
    include("functions.php");

    // if($_SERVER['REQUEST_METHOD'] == "POST"){
    //     $professorName = $_POST['username'];
    //     $password = $_POST['password'];
    //     if(!empty($professorName) && !empty($password)){
    //         $query = "select * from professor where professor_name = '$professorName' limit 1";
    //         $result = mysqli_query($conn,$query);
    //         if($result){
    //             if($result && mysqli_num_rows($result) > 0){
    //                 $user_data = mysqli_fetch_assoc($result);
    //                 if($user_data['password'] == $password){
    //                     $_SESSION['professor_name'] = $user_data['professor_name'];
    //                     header("Location: indexProfessor.php");
    //                     die;
    //                 }else
    //                 echo "wrong2";
    //             }else
    //                 echo "wrong1";
    //         }
    //     }else
    //         echo "wrong username or password";
    //  }
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    $json = file_get_contents('php://input');
    $array = json_decode($json,true);
    $username = $array['username'];
    $password = $array['password'];
    if(!empty($username) && !empty($password)){
        $query = "select * from professor1 where professor_name = '$username' limit 1";
        $result = mysqli_query($conn,$query);
        if($result){
            if($result && mysqli_num_rows($result) > 0){
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] == $password){
                    echo "correct";
                }else{
                    echo "wrong";
                }
            }else{
                echo "wrong";
            }
        }else
            echo "wrong";
    }else
        echo "wrong";
?>
