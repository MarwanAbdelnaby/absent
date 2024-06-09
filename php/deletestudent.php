<?php

$id = $_GET["id"];
require "database.php";
$query = mysqli_query($connection,"DELETE FROM `students` WHERE `id` = $id");
header("Location: ../dashboard.php")
?>