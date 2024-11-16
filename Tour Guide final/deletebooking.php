<?php
include_once 'config.php';

// Get the Ptype from the query string
$id = $_GET['id'];

// Delete the row from the table
$query = "DELETE FROM Bookings WHERE id='$id'";

if (mysqli_query($conn, $query)) {
    echo "<script>alert('Record Deleted Successfully');
    window.location.replace('bookingupdate.php');</script>";
} else {
    echo "<script>alert('Error In Delete: " . mysqli_error($conn) . "');</script>";
}

mysqli_close($conn);
?>