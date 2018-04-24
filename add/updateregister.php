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

if($_POST['flag'] == "1"){
    $flag_full = 1;
    $flag_half = 0;
    $flag_mini = 0;
    $flag_fun = 0;
}else if($_POST['flag'] == "2"){
    $flag_full = 0;
    $flag_half = 1;
    $flag_mini = 0;
    $flag_fun = 0;
}else if($_POST['flag'] == "3"){
    $flag_full = 0;
    $flag_half = 0;
    $flag_mini = 1;
    $flag_fun = 0;
}else if($_POST['flag'] == "4"){
    $flag_full = 0;
    $flag_half = 0;
    $flag_mini = 0;
    $flag_fun = 1;
}

$sqlB = "UPDATE runners_bills
SET flag_full=$flag_full, flag_half=$flag_half, flag_mini=$flag_mini, flag_fun=$flag_fun, size = '".$_POST["size"]."', type_shirt = '".$_POST["type_shirt"]."', getting = '".$_POST["getting"]."' 
 WHERE run_id = $run_id and bill_id = $bill_id";

$_POST['brith_date'] = $_POST['year'].  "-"  .$_POST['month']. "-" .$_POST['day'];

$sql = "UPDATE runners 
SET essn = '".$_POST["essn"]."', frist_name = '".$_POST["frist_name"]."', last_name = '".$_POST["last_name"]."', sex = '".$_POST["sex"]."', email = '".$_POST["email"]."', brith_date = '".$_POST["brith_date"]."', blood = '".$_POST["blood"]."', nationality = '".$_POST["nationality"]."', country = '".$_POST["country"]."', address = '".$_POST["country"]."', province = '".$_POST["province"]."',  postcode = '".$_POST["postcode"]."', phone = '".$_POST["phone"]."', disease = '".$_POST["disease"]."', medicine = '".$_POST["medicine"]."', allergic_drug  = '".$_POST["allergic_drug"]."', emergency_contact_name  = '".$_POST["emergency_contact_name"]."', emergency_contact_phone = '".$_POST["emergency_contact_phone"]."'
WHERE run_id=$run_id";


if ($conn->query($sql) === TRUE and $conn->query($sqlB) === TRUE) {
    echo "Record updated successfully";
    header('Location:../register2.5.1.php');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>