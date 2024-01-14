<?php
include("connection.php");

$userid = "";
$email = "";

if (isset($_POST['submit'])) {
    $userid = $_POST['userid'];
    $name = $_POST['names'];
    $phno = $_POST['phno'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $conf = $_POST['conf'];

    // Check if the user ID already exists
    $checkUserId = "SELECT * FROM SIGNUP WHERE userid='$userid'";
    $resultUserId = mysqli_query($conn, $checkUserId);
    $numUserId = mysqli_num_rows($resultUserId);

    if ($numUserId > 0) {
        echo '<script>alert("User ID already exists!")</script>';
        // Clear the email and confirm password fields
        $email = "";
        $conf = "";
    } else {
        $checkEmail = "SELECT * FROM SIGNUP WHERE email='$email'";
        $resultEmail = mysqli_query($conn, $checkEmail);
        $numEmail = mysqli_num_rows($resultEmail);

        if ($numEmail > 0) {
            echo '<script>alert("Email already exists!")</script>';
            // Clear the user ID and confirm password fields
            $userid = "";
            $conf = "";
        } else {
            // Hash the password
            $hashedPassword = password_hash($pass, PASSWORD_BCRYPT);

            $stmt = $conn->prepare("INSERT INTO SIGNUP(userid, names, phno, email, pass) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $userid, $name, $phno, $email, $hashedPassword);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                // Successful registration, redirect to the login page with a success message
                header("Location: login_page.php?registration=success");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }
        }
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login_page.css">
</head>
<body style="background-image: url(2.jpg);">
    <section>
        <div class="back-ground"></div>
    <div class="login-box" style="filter:blur(0);height:600px">
        <form action="" method="post">
            <h3 style="align-items: center;color:white;margin-left:40%">Register</h3>
            <div class="input-box">
                
                    <input type="text" name="userid" required>
                    <label for="">User ID</label><br>
            </div>
            <div class="input-box">
                
                    <input type="text" name="names" required>
                    <label for="">Name</label><br>
            </div>
            <div class="input-box">
                
                    <input type="number" name="phno" required>
                    <label for="">Ph no</label><br>
            </div>
            <div class="input-box">
                
                    <input type="email" name="email" required>
                    <label for="">Email</label><br>
            </div>
            <div class="input-box">
                    <input type="password" name="pass" required>
                    <label for="">Password</label><br>
            </div>
            
            <div class="input-box">
                    <input type="password" name="conf" required>
                    <label for="">Confirm Password</label><br>
            </div>
          <button type="submit" style="font-weight: bold;" name="submit">SIGN UP</button>
                   
        </form>
    </div>
    </section>
</body>
</html>
