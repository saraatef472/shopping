<?php
session_start();
$host = "localhost:3306";
$user = 'adebexuj_sara';
$pass= 'saraatef';
$dp = 'adebexuj_laps';

$conn = mysqli_connect($host,$user,$pass,$dp);
//connection
if ($conn === false){
  die("connection error");
}

//abstractions
 $title = " Adeb";
$logosrc = "../user/img/al.jpg";
