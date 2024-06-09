<?php

if (isset($_POST['name']) && isset($_POST['studentnumber']) && isset($_POST['parrentnumber'])){
    require "database.php";
    $name = $_POST['name'];
    $studentnumber = $_POST["studentnumber"];
    $parrentnumber  = $_POST["parrentnumber"];
    $first  = $_POST["firstdegree"];
    $second  = $_POST["seconddegree"];
    $third  = $_POST["thirddegree"];
    $forth  = $_POST["fourthdegree"];
    $fifth  = $_POST["fifthdegree"];
    $sixth  = $_POST["sithdegree"];
    $seventh  = $_POST["seventhdegree"];
    $year = $_GET["year"];
    $query = "INSERT INTO `students`(`name`, `snumber`, `pnumber`, `1st`, `2nd`, `3rd`, `4th`, `5th`, `6th`, `7th`, `grade`) VALUES ('$name','$studentnumber','$parrentnumber','$first','$second','$third','$forth','$fifth','$sixth','$seventh','$year')";$check = mysqli_query($connection,$query);
    header("Location: ../year.php?year=".$year);


}