<html>
    <head>

    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Green Leaf Tours</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- font awesome cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- fonts -->
        <link rel = "stylesheet" href = "font/fonts.css">
        <!-- normalize css -->
        <link rel = "stylesheet" href = "css/normalize.css">
        <!-- custom css -->
        <link rel = "stylesheet" href = "css/utility.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel = "stylesheet" href = "css/responsive.css">
        <link rel="stylesheet" href="css/style1.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    <script src="aaaa.js"></script>
        <link rel="stylesheet" href="css/style.css">
        
        <style>

            .customers{
                margin-top:200px;
                background-color:green;
                width:100%;
                height:300px;
            }

        </style>

    </head>
    <body>

<!-- navbar  -->
<nav class="navbar">
    <div class="container flex">
        <button type="button" id="navbar-show-btn" class="flex">
            <i class="fas fa-bars"></i>
        </button>
        <div id="navbar-collapse">
            <button type="button" id="navbar-close-btn" class="flex">
                <i class="fas fa-times"></i>
            </button>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="../index1.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="../../Tour Guide final/#package" class="nav-link">Tours</a>
                </li>
                <li class="nav-item">
                    <a href="../../Tour Guide final/feedback/feedback.php" class="nav-link">Feedbacks</a>
                </li>
                <li class="nav-item">
                    <a href="../../Tour Guide final/AboutUS/about.html" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="../../Tour Guide final/contact.html" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="../../Tour Guide final/user dashboard.html" class="nav-link">My Profile</a>
                </li>
                <li class="nav-item">
                    <a href="myaccount.php" class="nav-link">My account</a>
                </li>
                <li class="nav-item">
                    <a href="logout.php"><button class="btnlogout-popup">Logout</button></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- end of navbar  -->
<div>
<table border="1"class="customers" >

  <tr>
  <th>Package type</th>
	<th>Package name</th>
	<th>Package price</th>
  </tr>
  

<?php

require 'config.php';

// Retrieve records from the bookings table
$sql = "SELECT * FROM package";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo"<tr><th>".$row["Ptype"]."</th>
        <th>".$row["Pname"]."</th>
        <th>".$row["Pprice"]."</th>";
    }
    echo "</table>";
} else {
    echo "No records found";
}
?>
</div>
</body>
</html>
