<?php
require 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $userid = $_POST["User ID"];
    $username = $_POST["User Name"];
    $email = $_POST["Email"];
    $tripname = $_POST["Trip Name"];
    $destination = $_POST["Destination"];
    $checkDate = $_POST["Trip Date"];
    $ratings = $_POST["ratings"];

    $sql = "INSERT INTO bookings (Uid, Uname, Email, Tname, Des, Date, Rating) VALUES ('$userid', '$username', '$email', '$tripname', '$destination', '$checkDate', '$ratings')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Feedback submitted successfully."); window.location.href = "retrieve_page.php";</script>';
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

