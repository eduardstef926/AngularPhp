<?php

session_start();

if(isset($_SESSION['professor_name'])){
    unset($_SESSION['professor_name']);
}


header("Location: loginProfessor.php");
die;