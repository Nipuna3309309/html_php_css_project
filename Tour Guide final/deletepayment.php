<?php
require 'config.php';

// Get the id from the query string
$id = $_GET["id"];

// Delete the row from the table
$query = "DELETE FROM payment WHERE paymentid='$id'";

if (mysqli_query($conn, $query)) {
    echo "<script>alert('Record Deleted Successfully');
    window.location.replace('updatepayment.php');</script>";
} else {
    echo "<script>alert('Error In Delete: " . mysqli_error($conn) . "');</script>";
}

mysqli_close($conn);
?>