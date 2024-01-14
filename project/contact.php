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
<!--
<script src="https://smtpjs.com/v3/smtp.j"></script>
        <script>
            function sendEmail(){
                Email.send({
    Host : "smtp.gmail.com",
    Username : "syamr701@gmail.com",
    Password : "68604C3F95DFEE069B2D814FF062E03DD40F",
    To : 'syamr701@gmail.com',
    From : document.getElementById('email').value,
    Subject : "New Contact Form Enquiry",
    Body : "Name: "+document.getElementById('name').value
                    +"<br>Email: "+document.getElementById("email").value
                    +"<br>Ph no: "+document.getElementById("phno").value
                    +"<br>Message: "+document.getElementById("message").value
}).then(
  message => alert("Message Sent Successfully")
);
            }
        </script>-->


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
    
   <!-- <form onsubmit="sendEmail()" reset(); return false;>-->
    <form action="https://formsubmit.co/syamr556@gmail.com" method="POST">
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
                <input type="text" placeholder="Email Subject" required>
                <span class="focus"></span>
            </div>
        </div>

        <div class="textarea-field">
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message" required ></textarea>
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