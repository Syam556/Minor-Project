<?php
include("connection.php");

if (isset($_POST['login'])){
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $sql="SELECT userid,pass from admintbl where userid='$email' and pass='$pass'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);

    if($num>0){
        header("location:ad_index.php");
    }
    else{
        echo'<script>alert("INVALID EMAIL OR PASSWORD")</script>';
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
    <div class="login-box" style="filter:blur(0)">
        <form action="" method="post">
            <h2>login</h2>
            <div class="input-box">
                
                    <input type="text" name="email" required>
                    <label for="">User Id</label><br>
            </div>
            <div class="input-box">
                    <input type="password" name="pass" required>
                    <label for="">Password</label><br>
            </div>
            <div class="remember-forgot">
                    <label for=""><input type="checkbox">Remember me</label>
                    <a href="#"></a>
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