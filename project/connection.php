<?php

$hostname="localhost";
$username="root";
$password="";
$db_name="greentec";

$conn = mysqli_connect($hostname,$username,$password,$db_name);

if(!$conn){
    echo"Connection Failed";
}

?>