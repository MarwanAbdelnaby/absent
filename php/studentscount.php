<?php
function countofyearone (){
    require "database.php";
    $query = "SELECT * FROM `students` WHERE `grade` = 1";
    $check = mysqli_query($connection,$query);
    $result = mysqli_num_rows($check);
    echo $result;
}
function countofyeartwo (){
    require "database.php";
    $query = "SELECT * FROM `students` WHERE `grade` = 2";
    $check = mysqli_query($connection,$query);
    $result = mysqli_num_rows($check);
    echo $result;
}
function countofyearthree (){
    require "database.php";
    $query = "SELECT * FROM `students` WHERE `grade` = 3";
    $check = mysqli_query($connection,$query);
    $result = mysqli_num_rows($check);
    echo $result;
}
function countofstudents (){
    require "database.php";
    $query = "SELECT * FROM `students`";
    $check = mysqli_query($connection,$query);
    $result = mysqli_num_rows($check);
    echo $result;
}