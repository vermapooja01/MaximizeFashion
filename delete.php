<?php

include 'db_connection.php';
//include 'order.php'; // Using database connection file here

$conn = mysqli_connect("localhost", "root", "", "maximizefashion");
$id = $_GET['orderid']; // get id through query string

$del = mysqli_query($conn,"delete from orders where orderid = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:neworder.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>