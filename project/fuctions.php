<?php
include("connection.php");

function display_data(){
    global $conn;
    $querry="select * from signup";
    $result=mysqli_query($conn, $querry);
    return $result;
}
?>