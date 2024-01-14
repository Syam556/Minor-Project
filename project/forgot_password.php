<!DOCTYPE html>
<html lang="en">


<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $userid = $_POST['userid'];
    $phonenumber = $_POST['phno'];

    // Validate the provided data (e.g., check for empty fields).

    // Check if the provided data matches a user's record in your 'signup' table.
    if (validateUser($email, $userid, $phonenumber)) {
        // User is validated; allow them to reset the password.
        header('location: reset_password.php'); // Redirect to the password reset form.
    } else {
        echo "<script>alert('User not found or data not matching. Please try again.')";
    }
    
}

function validateUser($email, $userid, $phonenumber) {
    // Implement your database logic here to validate the user's data.
    // Query the 'signup' table for the provided data and return true if a match is found.
    // Ensure the use of prepared statements to prevent SQL injection.
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "greentec";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Create a SQL query to retrieve a user's record.
        $sql = "SELECT * FROM signup WHERE email = :email AND userid = :userid AND phno = :phno"; // Use :phno consistently.

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':userid', $userid);
        $stmt->bindParam(':phno', $phonenumber); // Use :phno consistently.
        $stmt->execute();

        $result = $stmt->fetch();

        if ($result) {
            return true; // User found, and data matches.
           
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    
    return false; // User not found or data doesn't match.
}
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="css/login_page.css">
</head>

<body style="background-image:url('2.jpg')">
    <section>
        <div class="login-box" style="filter: blur(0)">

            <form action="" method="POST">
                <h2>Forgot Password</h2>
                <div class="input-box">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="input-box">
                    <label for="userid">User ID:</label>
                    <input type="text" name="userid" id="userid" required>
                </div>
                <div class="input-box">
                    <label for="phonenumber">Phone Number:</label>
                    <input type="text" name="phno" id="phno" required>
                </div>
                <div>
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
