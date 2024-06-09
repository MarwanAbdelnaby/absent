<?php

if (isset($_POST['user']) && isset($_POST['pass'])){
    require "database.php";
    $user = $_POST["user"];
    $pass = md5($_POST["pass"]);
    $query = "select * from users where username='$user' and password='$pass'";
    $check = mysqli_query($connection,$query);
    $result = mysqli_num_rows($check);
        if ($result>0){
            session_start();
            $row = mysqli_fetch_assoc($check);
            $_SESSION["id"] = $row['id'];
            header("Location: ../dashboard.php");
        }else{
            header("Location: ../?error");
        }
    }else{
    header("Location: ../");
}



  