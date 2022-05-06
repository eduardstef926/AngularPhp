 <?php
     session_start();
     include("connection.php");
    // include("connection.php");
    // include("functions.php");

    // if($_SERVER['REQUEST_METHOD'] == "POST"){
	// 	$user_name = $_POST['user_name'];
	// 	$password = $_POST['password'];
	// 	if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
	// 		$query = "select * from students where studentName = '$user_name' limit 1";
	// 		$result = mysqli_query($conn, $query);
	// 		if($result){
	// 			if($result && mysqli_num_rows($result) > 0){
	// 				$user_data = mysqli_fetch_assoc($result);
	// 				if($user_data['password'] === $password){
	// 					$_SESSION['user_id'] = $user_data['studentName'];
						// header("Location: indexStudent.php");
			            // die;
	// 				}else
    //                     echo "wrong2";
	// 			}else
    //                 echo "wrong1";
	// 		}
	// 	}else{
	// 		echo "wrong username or password!";
	// 	}
	// }
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    $json = file_get_contents('php://input');
    $array = json_decode($json,true);
    $username = $array['username'];
    $password = $array['password'];
    if(!empty($username) && !empty($password)){
        $query = "select * from students where studentName = '$username' limit 1";
        $result = mysqli_query($conn,$query);
        if($result){
            if($result && mysqli_num_rows($result) > 0){
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] == $password){
                   // $_SESSION['user_id'] = $user_data['studentName'];
                    echo "correct";
                }else 
                    echo "wrong2";
            }else
                echo "wrong1";
        }else
            echo "wrong username or password";
    }
?>
