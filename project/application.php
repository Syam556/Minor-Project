<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phno = $_POST['phno'];
    $adrs = $_POST['address'];
    $exp = $_POST['exp'];
    
    // Handle file upload
    $uploadDir = 'uploads/'; // Specify the directory where you want to store uploaded files
    $resume = ''; // Define a variable to store the file name

    if (isset($_FILES['resumes']) && $_FILES['resumes']['error'] === UPLOAD_ERR_OK) {
        // Debugging: Display uploaded file information
        echo "File Name: " . $_FILES['resumes']['name'] . "<br>";
        echo "File Size: " . $_FILES['resumes']['size'] . "<br>";
        echo "File Type: " . $_FILES['resumes']['type'] . "<br>";

        // Debugging: Check if the directory exists
        if (!file_exists($uploadDir)) {
            echo "Upload directory does not exist!";
        }

        // Generate a unique file name to avoid overwriting
        $resume = $uploadDir . uniqid() . '_' . basename($_FILES['resumes']['name']);

        // Debugging: Display the destination file path
        echo "Destination File: " . $resume . "<br>";

        // Move the uploaded file to the destination directory
        if (move_uploaded_file($_FILES['resumes']['tmp_name'], $resume)) {
            // File upload successful
            echo "File uploaded successfully<br>";
        } else {
            // File upload failed
            echo "File upload failed<br>";
        }
    } else {
        // No file uploaded or an error occurred
        echo "No file uploaded or an error occurred<br>";
    }

    // Handle the coverletter safely using prepared statements
    $coverletter = $_POST['message'];

    // Insert the data into the database using prepared statements
    $sql = "INSERT INTO job_application (names, email, phno, adrs, exp, resumes, coverletter) VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    // Establish a database connection (modify this based on your configuration)
    $conn = new mysqli("localhost", "root", "", "greentec");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create a prepared statement
    $stmt = $conn->prepare($sql);

    // Bind the parameters
    $stmt->bind_param("sssssss", $name, $email, $phno, $adrs, $exp, $resume, $coverletter);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('You have applied successfully. Stay Tuned!)</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    
    <link rel="stylesheet" href="css/contact.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,500&display=swap');
        body{
            background-image: url(2.jpg);
         }


         
        </style>


</head>
<body>

    <header class="header">
        <a href="main.php" class="logo"><span style="color: rgb(38, 216, 52);">GREEN</span> TEC</a>

        <div class="bx bx-menu" id="menu-icon">

        </div>

        <nav class="navbar">
            <a href="main.php"  class="active">Home</a>
            <a href="main.php" class="active">About</a>
            <a href="contact.php">Contact</a>
            <a href="logout.php"><span style="color: rgba(231, 0, 0, 0.822);">Logout</span></a>

        </nav>
    </header>

<section class="contact" id="contact">
    
  
<form action="" method="POST" enctype="multipart/form-data">
        <div class="input-box">
            <div class="input-field">
                <input type="text" placeholder="Full Name" required id="name" name="name">
                <span class="focus"></span>
            </div>

            <div class="input-field">
                <input type="text" placeholder="Email Address" id="email" name="email" required>
                <span class="focus"></span>
            </div>
        </div>

        <div class="input-box">
            <div class="input-field">
                <input type="number" placeholder="Mobile Number" required name="phno" id="phno">
                <span class="focus"></span>
            </div>

            <div class="input-field">
                <input type="text" placeholder="Address" name="address" id="address">
                <span class="focus"></span>
            </div>
        </div>


        <div class="input-box">
            <div class="input-field">
                <input type="number" placeholder="Experience" required name="exp" id="exp">
                <span class="focus"></span>
            </div>

            <div class="input-field">
                <input type="file" name="resumes" required placeholder="Upload resume">
                <span class="focus"></span>
            </div>

        </div>




        <div class="textarea-field">
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Cover Letter" required ></textarea>
            <span class="focus"></span>
        </div>

        <div class="btn-box btns">
            <button type="submit" class="btn">Submit</button>
        </div>

        <input type="hidden" name="_captcha" value="false">


        <input type="hidden" name="_next" value="thanks.php">




    </form>
</section>





<footer class="footer">
    <div class="footer-text">
        <p>Copyright &copy; 2023 by <span style="color: rgb(38, 216, 52);">GREEN</span> TEC |  All Rights Reserved.</p>
    </div>

    <div class="footer-iconTop">
        <a href="#"><i class='bx bx-up-arrow-alt'></i></a>
    </div>
</footer>
    

        
</body>
</html>