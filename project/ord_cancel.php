<?php
include("connection.php");

if (isset($_POST['cancel'])) {
    $email = $_POST['Email'];
    $userid = $_POST['userid'];

    // Check if an order with the provided email and user ID exists
    $sql = "SELECT * FROM booking WHERE userid='$userid'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num > 0) {
        $del = "DELETE FROM booking WHERE userid='$userid'";
        if (mysqli_query($conn, $del)) {
            echo '<script>alert("Order Cancelled")</script>';
        } else {
            echo '<script>alert("Failed to cancel the order")</script>';
        }
    } else {
        echo '<script>alert("No order exists with the provided email and username")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Cancellation</title>
    <link rel="stylesheet" href="css/login_page.css">
    <link rel="stylesheet" href="css/intro.css">
</head>
<body style="background-image: url(2.jpg);">
    <header class="header">
        <a href="main.php" class="logo"><span style="color: rgb(38, 216, 52);">GREEN</span> TEC</a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <nav class="navbar">
            <a href="main.php" class="active">Home</a>
            <a href="main.php" class="active">About</a>
            <a href="contact.php">Contact</a>
            <a href="booking.php">Booking</a>
            <a href="logout.php"><span style="color: rgba(231, 0, 0, 0.822);">Logout</span></a>
        </nav>
    </header>
    <section style="font-size: 1.5rem; font-weight: 1.5rem">
        <div class="back-ground"></div>
        <div class="login-box" style="filter: blur(0)">
            <form action="" method="post">
                <h2>Order Cancellation</h2>
                <div class="input-box">
                    <input type="email" name="Email" required>
                    <label for="">Email</label><br>
                </div>
                <div class="input-box">
                    <input type="text" name="userid" required>
                    <label for="">Username</label><br>
                </div>
                <button type="submit" name="cancel" style="font-weight: bold;">Cancel Order</button>
            </form>
        </div>
    </section>
</body>
</html>
