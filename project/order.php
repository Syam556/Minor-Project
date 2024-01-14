

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
        body{
            font-size: 1rem;
        }
        .input-box{
            font-size: larger;
        }
    </style>
</head>
<body style="background-image: url(2.jpg);">
    <header class="header">
        <div class="bx bx-menu" id="menu-icon"></div>
        <a href="main.php" class="logo"><span style="color: rgb(38, 216, 52);">GREEN</span> TEC</a>
        <nav class="navbar" style="justify-content: center; align-items: center;">
            <a href="main.php" class="active">Home</a>
            <a href="logout.php"><span style="color: rgba(231, 0, 0, 0.822);">Logout</span></a>
        </nav>
    </header>

    <section class="contact" style="align-items: center; justify-content:center;align-self: center;margin-left: 25%;margin-top: 5%;">
        <div class="order-box">
            <form action="" method="post">
                <h2>Order</h2>
                <div class="input-box">
                    <input type="text" name="userid" style="font-size: medium;" required>
                    <label for="userid">Username</label>
                </div>
                <div class="input-box">
                    <input type="textarea" name="address" style="font-size: medium;" required>
                    <label for="address">Address</label>
                </div>
                <div class="input-box">
                    <label for="weight">Weight:</label>
                    <select name="weight" id="" placeholder="Weight" style="font-size: medium;margin-top:2rem; width: 90%; background: none;">
                        
                        
                          <option value="0-60" id="options">0-60</option>
                          <option value="60-150">60-150</option>
                          <option value="150+">150+</option>
                      </select>
                </div>
                <div class="btn-box btns" style="margin-left: 30%;margin-top:10%">
                    <button type="submit" name="submit" style="font-weight: bold; align-items: center; justify-content: center;" class="btn">ORDER</button>
                </div>
            </form>
        </div>
    </section>
    <?php
include("connection.php");

if (isset($_POST['submit'])) {
    $userid = $_POST['userid'];
    $address = $_POST['address'];
    $weight = $_POST['weight'];

    // Check if the order for the given user already exists
    $sql = "SELECT * FROM booking WHERE userid='$userid'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo '<script>alert("Order already exists for this user")</script>';
    } else {
        // Insert the new order
        $insert = "INSERT INTO booking(userid, adrs, wght) VALUES('$userid', '$address', '$weight')";
        if (mysqli_query($conn, $insert)) {
            
            echo '<script>alert("Order successfully placed")</script>';
        } else {
            echo '<script>alert("Failed to insert the order")</script>';
        }
    }
}
?>
</body>
</html>
