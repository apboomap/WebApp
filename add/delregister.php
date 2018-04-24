<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marathon";
$conn = new mysqli($servername, $username, $password,$dbname);
mysqli_set_charset($conn, "utf8");


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$run_id = $_GET["id"];
session_start();
$bill_id = $_SESSION['bill_id'];
$event_id = $_SESSION['event_id'];


$sql = "DELETE FROM runners_bills WHERE bill_id='$bill_id' and run_id='$run_id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    $conn->close();
    header('Location:../register2.5.1.php');
} else {
    echo "Error deleting record: " . $conn->error;
}
 
$conn->close();
?>