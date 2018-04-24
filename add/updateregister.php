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

// $run_id = $_GET["id"];
// session_start();
// $bill_id = $_SESSION['bill_id'];
// $event_id = $_SESSION['event_id'];

$sql = "UPDATE runners 
SET frist_name='John' ,last_name='Doe' WHERE run_id=1";

$sqlB = "UPDATE runners_bills
SET flag_full='0', flag_half='1', flag_mini='0', flag_fun='0' WHERE run_id = 1 and bill_id = 1";


// $sql = "UPDATE runners 
// SET essn, frist_name, last_name, sex, email, brith_date, blood, nationality, country, address, province,  postcode, phone, disease, medicine, allergic_drug, emergency_contact_name, emergency_contact_phone
// WHERE run_id=2";

if ($conn->query($sql) === TRUE and $conn->query($sqlB) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>