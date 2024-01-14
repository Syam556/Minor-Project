<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "greentec";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['userid'])) {
        $email = $_POST['userid'];

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Prepare and execute a DELETE query based on the email
            $stmt = $conn->prepare("DELETE FROM booking WHERE userid = :userid");
            $stmt->bindParam(':userid', $email, PDO::PARAM_STR);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false]);
            }
        } catch (PDOException $e) {
            echo json_encode(['success' => false]);
        }

        $conn = null;
    } else {
        echo json_encode(['success' => false]);
    }
} else {
    echo json_encode(['success' => false]);
}
?>
