<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    if ($newPassword !== $confirmPassword) {
        // Passwords do not match, handle the error (e.g., redirect to an error page).
        header('location: error_page.php');
        exit();
    }

    // Validate the new password (e.g., length requirements).

    // Hash the new password for security. You can use PHP's password_hash function.
    $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);

    // Implement your database connection logic here to update the user's password.
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "greentec";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Update the user's password in the 'signup' table. Replace 'userid' with the user's identifier.
        $userid = $_SESSION['user_id']; // Get the user's ID from the session.

        $stmt = $conn->prepare("UPDATE signup SET password = :password WHERE userid = :userid");
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':userid', $userid);
        $stmt->execute();

        // Password updated successfully; you can redirect to a success page.
        header('location: login_page.php');
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        // Handle the error (e.g., redirect to an error page).
        header('location: error_page.php');
        exit();
    }
} else {
    // Redirect to an error page for invalid access.
    header('location: error_page.php');
    exit();
}
?>

