<?php
include("connection.php");

if (isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT email, pass FROM SIGNUP WHERE email = ? LIMIT 1");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verify the password using password_verify()
        if (password_verify($pass, $user['pass'])) {
            // Password is correct
            session_start();
            $_SESSION['email'] = $email; // Store user's email in a session
            header("location: main.php"); // Redirect to the main page after successful login
            exit();
        } else {
            echo '<script>alert("Invalid email or password")</script>';
        }
    } else {
        echo '<script>alert("Invalid email or password")</script>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login_page.css">
</head>
<body style="background-image: url(2.jpg);">
    <section>
        <div class="back-ground"></div>
    <div class="login-box" style="filter:blur(0)">
        <form action="" method="post">
            <h2>login</h2>
            <div class="input-box">
                
                    <input type="text" name="email" required>
                    <label for="">Email</label><br>
            </div>
            <div class="input-box">
                    <input type="password" name="pass" required>
                    <label for="">Password</label><br>
            </div>
            <div class="remember-forgot">
                    <label for=""><input type="checkbox">Remember me</label>
                    <a href="forgot_password.php"></a>
            </div>
                    <button type="submit" style="font-weight: bold;" name="login">Login</button>
                    <div class="register-link">
                        <p>Dont have an account?<a href="login.php">Register</a></p>
                    </div>
                
            </div>
        </form>
    </div>
    </section>
</body>
</html>