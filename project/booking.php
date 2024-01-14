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
    <header class="header">
        

        <div class="bx bx-menu" id="menu-icon">

        </div>
        <a href="main.php" class="logo"><span style="color: rgb(38, 216, 52);">GREEN</span> TEC</a>
        <nav class="navbar" style="justify-content: center;align-items: center;">
           
            <a href="main.php"  class="active">Home</a>
            <a href="main.php" class="active">About</a>
            <a href="contact.php">Contact</a>
            <a href="logout.php"><span style="color: rgba(231, 0, 0, 0.822);">Logout</span></a>
        </nav>
    </header>
        <section class="home" id="home">
            <div class="home-content">
                
                <div class="btn-box2" style="align-items: center;justify-content: center;padding-left: 2.3rem;">
                    <a href="order.php" class="btn" style="margin: 2rem;position: relative;width:20rem">HOME PICKUP</a>
                    <a href="delivery.php" class="btn" style="position: relative;width:22rem">WASTE DELIVERY</a>
                    <a href="ord_cancel.php" class="btn" style="width:20rem">CANCEL ORDER</a>
                </div>
           </div>
        </section>
    
</body>