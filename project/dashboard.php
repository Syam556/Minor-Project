

<?php
session_start();
error_reporting(0);
include('connection.php');

if (strlen($_SESSION['vamsaid']==0)) {
  header('location:logout.php');
  } else{



  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/intro.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,500&display=swap');
        body{
            background-image: url(2.jpg);
        }
        </style>
</head>
<body>
    <script src="script.js"></script>

    <header class="header">
        <a href="intro.php" class="logo"><span style="color: rgb(38, 216, 52);">GREEN</span> TEC</a>

        <div class="bx bx-menu" id="menu-icon">

        </div>

        <nav class="navbar">
            <a href="main."  class="active">Home</a>
            <a href="#about" class="active">About</a>
            <a href="contact.php">Contact</a>
            <a href="booking.php">Booking</a>
            <a href="application.php">Job Application</a>
            <a href="logout.php"><span style="color: rgba(231, 0, 0, 0.822);">Logout</span></a>
        </nav>
    </header>
    <div class="main_content" id="main-content">

        
    
        
    
        <div class="page">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="dashboard.php">Dashboard</a>
            </nav>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card widget_2 big_icon traffic">
                            <div class="body" style="border:solid #000 1px">
                                 <?php 
                            $sql2 ="SELECT * from  booking ";
    $query2 = $dbh -> prepare($sql2);
    $query2->execute();
    $results2=$query2->fetchAll(PDO::FETCH_OBJ);
    $totnewreq=$query2->rowCount();
    ?>
                              





                              <?php } ?>