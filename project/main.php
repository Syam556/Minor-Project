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

        <nav class="navbar" style="padding-right: 0px;">
            <a href="#home"  class="active">Home</a>
            <a href="#about" class="active">About</a>
            <a href="contact.php">Contact</a>
            <a href="booking.php">Booking</a>
            <a href="application.php">Job Application</a>
            <a href="logout.php"><span style="color: rgba(231, 0, 0, 0.822);">Logout</span></a>
            
        </nav>
    </header>

    <!--home section design-->

    <section class="home" id="home">
        <div class="home-content">
            <h1>Welcome to <span><span style="color: rgb(38, 216, 52);">GREEN</span> TEC</span></h1><h2><pre>An E-waste collecting community</pre></h2><br>
            <div class="text-animate">
                <h3>Reduce,Reuse & Recycle</h3><br><br>
            </div>
        </div>

        <div class="home-sci">
            <a href="https://www.facebook.com/profile.php?id=100095477143581&mibextid=ZbWKwL"><i class='bx bxl-facebook' ></i></a>
            <a href="https://twitter.com/Green_tec_"><i class='bx bxl-twitter' ></i></a>
            <a href="https://www.linkedin.com/in/green-tec-a0343b287"><i class='bx bxl-linkedin' ></i></a>
        </div>

        <div class="home-imgHover"></div>

    </section>
<!--about secion-->
    <section class="about" id="about">
        <h2 class="heading">About <span>Us</span></h2>

        <div class="about-img">
            <img src="#" alt="">
            <span class="circle-spin"></span>
        </div>

        <div class="about-content">
            <h3><span style="color: rgb(38, 216, 52);">GREEN</span> TEC</h3>
            <p>One of the major problems faced by India , a developing country is 
                E-waste. It is a popular, informal name for electronic products 
                nearing the end of their useful life. E-wastes are considered 
                dangerous, as certain components of some electronic products 
                contain materials that are hazardous, depending on their condition 
                and density. The hazardous content of these materials pose a threat 
                to human health and environment. So it should be properly 
                disposed but most people can't do it and that's where our app 
                comes in. It enables the User to send an alert and one of our 
                employees will make contact with them and collect the e-waste 
                which is then disposed safely
            </p>
            <div class="btn-box btns">
                <a href="about.php" class="btn">Know More</a>

            </div>
        </div>

    </section>

    <!--foter section-->
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2023 by <span style="color: rgb(38, 216, 52);">GREEN</span> TEC |  All Rights Reserved.</p>
        </div>

        <div class="footer-iconTop">
            <a href="#"><i class='bx bx-up-arrow-alt'></i></a>
        </div>
    </footer>
    <script src="script-intro.js"></script>
</body>
</html>