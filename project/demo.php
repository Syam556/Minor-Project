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
</head>
<body>
    <header class="header">
        <a href="dashboard.php" class="logo"><span style="color: rgb(38, 216, 52);">GREEN</span> TEC</a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <nav class="navbar">
            <a href="dashboard.php" class="active">Dashboard</a>
            <a href="order_detail.php">Orders</a>
            <a href="user_detail.php">Users</a>
            <a href="dashboard.php">Applications</a>
            <a href="dashboard.php"></a>
        </nav>
    </header>

    <section class="dashboard" id="dashboard">
        <iframe src="default_content.php" name="dashboard_frame" id="dashboard_frame"></iframe>
    </section>

    <script>
        // JavaScript code to change the content in the iframe
        document.querySelector('.navbar a').addEventListener('click', function () {
            var iframe = parent.document.getElementById('dashboard_frame');
            var link = this.href;
            iframe.src = link;
        });
    </script>
</body>
</html>
