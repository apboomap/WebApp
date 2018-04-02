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

$_POST['brith_date'] = date("Y-m-d", mktime(0,0,0,$year,$month, $day));

$sql = "INSERT INTO runners (essn, frist_name, last_name, sex, email, brith_date, blood, nationality, country, address, province,  postcode, phone, disease, medicine, allergic_drug, emergency_contact_name, emergency_contact_phone)
        VALUES ('".$_POST["essn"]."', '".$_POST["frist_name"]."','".$_POST["last_name"]."','".$_POST["sex"]."','".$_POST["email"]."','".$_POST["brith_date"]."','".$_POST["blood"]."','".$_POST["nationality"]."','".$_POST["country"]."','".$_POST["address"]."','".$_POST["province"]."','".$_POST["postcode"]."','".$_POST["phone"]."','".$_POST["disease"]."','".$_POST["medicine"]."','".$_POST["allergic_drug"]."','".$_POST["emergency_contact_name"]."','".$_POST["emergency_contact_phone"]."')";

if ($conn->query($sql) === TRUE) {
    header('Location:../register2.5.1.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>