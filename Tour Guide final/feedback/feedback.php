<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["User_Name"];
    $email = $_POST["Email"];
    $tripname = $_POST["Trip_Name"];
    $destination = $_POST["Destination"];
    $checkDate = $_POST["Trip_Date"];
    $ratings = $_POST["ratings"];

    $sql = "INSERT INTO feedback (Uid, Uname, Email, Tname, Des, Date, Rating) VALUES ('', '$username', '$email', '$tripname', '$destination', '$checkDate', '$ratings')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Feedback submitted successfully.');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>



<!DOCTYPE HTML>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="style/style4.css">
    
    <style>
        body {
  background-image: url("images/uk.jpg"); 
  background-attachment: fixed;
  min-height: 100px;
}
    </style>
</head>
<body>
    <form action="feedback.php" style="border:1px solid #ccc" method ="post">

        <div class="container">
            <center><h1>Tour Feedback</h1></center>
            <hr>
      
            <label for="User Name"><b>User Name</b></label><br>
            <input type="text" placeholder="Enter Name" name="User_Name" required><br>
      
            <label for="Email"><b>Email</b></label><br>
            <input type="text" placeholder="kk@gmail.com" name="Email" required><br>
      
            <label for="Trip Name"><b>Trip Name</b></label><br>
            <input type="text" placeholder="Enter Text" name="Trip_Name" required><br>
      
            <label for="Destination"><b>Destination</b></label><br>
            <input type="text" placeholder="Enter Text" name="Destination" required><br>

            <label for="ratings"><b>Ratings</b></label><br>
            <input type="text" placeholder="Enter Text" name="ratings" required><br>
      
            <div class="date">
                <label for="Trip Date"><b>Trip Date</b></label><br>
                <input type="date" name="Trip_Date" required><br><br>
            </div>
      
           
           
      
            <div class="clearfix">
                <button type="submit" class="submitbtn">Submit</button>
            </div>
        </div>
    </form>
    <table class="customers">
  <tr>
    <th>User Name</th>
    <th>Email</th>
    <th>Trip Name</th>
    <th>Destination</th>
    <th>Ratings</th>
    <th>Trip Date</th>
  </tr>
  
 <?php
 require 'config.php';

$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr class='aa'>";
        echo "<td>" . $row["Uname"] . "</td>";
        echo "<td>" . $row["Email"] . "</td>";
        echo "<td>" . $row["Tname"] . "</td>";
        echo "<td>" . $row["Des"] . "</td>";
        echo "<td>" . $row["Date"] . "</td>";
        echo "<td>" . $row["Rating"] . "</td>";
        
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>No records found</td></tr>";
}
?>
</table>

</body>
</html>
