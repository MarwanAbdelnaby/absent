<?php

    $id = $_GET['id'];
    require "database.php";
    $studentnumber = $_POST["studentnumber"];
    $parrentnumber = $_POST["parrentnumber"];
    $first = $_POST["firstdegree"];
    $second = $_POST["seconddegree"];
    $third = $_POST["thirddegree"];
    $fourth = $_POST["fourthdegree"];
    $fifth = $_POST["fifthdegree"];
    $sixeth = $_POST["sithdegree"];
    $seventh = $_POST["seventhdegree"];
    $query = "UPDATE `students` SET `snumber`='$studentnumber',`pnumber`='$parrentnumber',`1st`='$first',`2nd`='$second',`3rd`='$third',`4th`='$fourth',`5th`='$fifth',`6th`='$sixeth',`7th`='$seventh' WHERE `id` = $id";
    $check = mysqli_query($connection,$query);
    header("Location: ../dashboard.php");



