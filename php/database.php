<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'students';

$connection = mysqli_connect($host,$user,$pass);
$select_db = mysqli_select_db($connection,$db);

