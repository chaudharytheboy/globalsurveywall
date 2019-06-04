<?php
$host = "localhost";
$user = "root";
$password = "";
$db_name = "walmart2";
$conn = mysqli_connect($host, $user, $password,$db_name);
 if(!$conn){
    die("could not connect : " . mysqli_error());
}?>