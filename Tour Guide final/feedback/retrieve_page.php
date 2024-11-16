<?php
require 'config.php';

// Fetch feedback from the database
$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output each feedback entry
    while ($row = $result->fetch_assoc()) {
        echo "User ID: " . $row['Uid'] . "<br>";
        echo "User Name: " . $row['Uname'] . "<br>";
        echo "Email: " . $row['Email'] . "<br>";
        echo "Trip Name: " . $row['Tname'] . "<br>";
        echo "Destination: " . $row['Des'] . "<br>";
        echo "Trip Date: " . $row['Date'] . "<br>";
        echo "Ratings: " . $row['Rating'] . "<br><br>";
        echo "<a href='deletefeedback.php?id=" . $row["id"] . "'>Delete</a>";

    }
} else {
    echo "No feedback entries found.";
}

$conn->close();
?>
