<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application Information</title>
    <link rel="stylesheet" href="css/intro.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,500&display=swap');
        body {
            background-image: url('2.jpg');
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            min-height: 100vh;
        }
        .container {
            background: transparent; /* Semi-transparent container background */
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            color: white;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
        }
        h1 {
            color: #00abf0; /* Neon-like text color */
            font-size: 2em;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            font-size: 1.5rem;
            border-collapse: collapse;
            border: 2px solid #26d834; /* Neon-like table border */
        }
        th, td {
            padding: 10px;
            text-align: center;
            color: white; /* Neon-like text color */
        }

        tr:nth-child(even) {
            background-color: rgba(0, 255, 0, 0.1); /* Neon-like alternating row color */
        }
        header {
            background-color: #05073c; /* Dark blue background color for the header */
            color: #fff; /* Text color */
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;

        }
        .bx-menu {
            font-size: 24px;
            cursor: pointer;
            color: #fff;
        }

        .bx-menu:hover {
            color: #26d834; /* Green color on hover */
        }
    </style>
</head>
<body style="background-image('2.jpg')">
<script>
    function deleteUser(email) {
    if (confirm('Are you sure you want to delete this application?')) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'delete_user.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        // Successful deletion, you can refresh the page or handle as needed
                        alert('Application successfully deleted.');
                        location.reload(); // Reload the page
                    } else {
                        alert('Application deletion failed.');
                    }
                } else {
                    alert('Error: ' + xhr.status);
                }
            }
        };

        var data = 'email=' + email;
        xhr.send(data);
    }
}

</script>

<header class="header">
    <a href="intro.php" class="logo"><span style="color: rgb(38, 216, 52);">GREEN</span> TEC</a>

    <div class="bx bx-menu" id="menu-icon">

    </div>

    <nav class="navbar" style="padding-right: 0px;">
        <a href="order_detail.php" class="active">Orders</a>
        <a href="user_detail.php" class="active">Users</a>
        <a href="appl_details.php">Job Applications</a>
        <a href="logout.php"><span style="color: rgba(231, 0, 0, 0.822);">Logout</span></a>
    </nav>
</header>

<section>
    <div class="container">
        <h1>Job Application Information</h1>
        <table>
            <tr>
                <th>Sl No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Experience</th>
                <th>Resume</th>
                <th>Action</th> <!-- New column for the delete button -->
            </tr>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "greentec";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Modify the SQL query to select data from the 'job_application' table
                $sql = "SELECT * FROM job_application";
                $slNo=1;
                $result = $conn->query($sql);

                foreach ($result as $row) {
                    echo "<tr>";
                    echo "<td>" . $slNo . "</td>";
                    echo "<td>" . $row['names'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['phno'] . "</td>";
                    echo "<td>" . $row['adrs'] . "</td>";
                    echo "<td>" . $row['exp'] . "</td>";

                    // Create a download link for the resume
                    echo "<td><a href='" . $row['resumes'] . "' download>Download Resume</a></td>";

                    // Add a delete button using 'names' as the identifier
                    echo "<td><button onclick=\"deleteUser('" . $row['email'] . "')\">Delete</button></td>";

                    echo "</tr>";
                    $slNo++;
                }
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }

            $conn = null;
            ?>
        </table>
    </div>
</section>
</body>
</html>
