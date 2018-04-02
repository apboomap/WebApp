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
$event_id = $_GET['id'];


$sql = "SELECT * FROM events WHERE event_id = $event_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$sqla = "SELECT * FROM shirts WHERE event_id = $event_id";
$resulta = $conn->query($sqla);
$rowa = $resulta->fetch_assoc();

$last_id = $conn->insert_id;
session_start();
$_SESSION['event_id'] = $event_id;





$conn->close();

?>

<!doctype html>
<?php require_once("header.php"); ?>
<link href="css/registerdetail.css" rel="stylesheet">
    <!-- slide -->
        <div class="container">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active" > 
                        <center><img src="<?=$row["img"]?>" style="width:60%; height:auto"></center>
                        <br>
                    </div>
                    <form name="test" method="post" action="add/addbill.php">
                        <button class="btn1" >สมัครเลย</button>
                    </form>
                </div>

            <!-- tab bar -->
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'detail')">รายละเอียด</button>
                <button class="tablinks" onclick="openCity(event, 'map')">แผนที่</button>
                <button class="tablinks" onclick="openCity(event, 'typeRace')">ประเภทการเเข่ง</button>
            </div>
            <!--rule-->
            <div id="detail" class="tabcontent">
                <h2><u>กำหนดการ</u></h2>
                <img src="<?=$row["img"]?>" style="width:50%; height:50%" class="center">
                <h2>ค่าธรรมเนียม</h2>
                <img src="<?=$row["charge"]?>" style="width:50%; height:50%" class="center">
                <h2>เสื้อที่จะได้ในรายการแข่งขัน</h2>
                <img src="<?=$rowa["img1"]?>" style="width:50%; height:50%" class="center"><br>
                <img src="<?=$rowa["img2"]?>" style="width:50%; height:50%" class="center">
                <h2>กติกา</h2>
                <?php
                    $text = file($row["rules"]);
                    foreach($text as $index=>$value){
                        echo $value."<br />";
                    }
                ?>
                <br><br><br>
                <form name="test" method="post" action="add/addbill.php">
                        <button class="btn1" >สมัครเลย</button>
                    </form>
            </div>

            <!--map-->
            <div id="map" class="tabcontent">
                <center><img src="<?=$row["map"]?>" style="width:50%; height:50%"></center>
                <br><br><br>
                <form name="test" method="post" action="add/addbill.php">
                        <button class="btn1" >สมัครเลย</button>
                    </form>
            </div>
            
            <!--type-of-race-->
            <div id="typeRace" class="tabcontent">
                <?php
                    $text = file($row["generation_competing"]);
                    foreach($text as $index=>$value){
                        echo $value."<br />";
                    }
                ?>
                <br><br><br>
                <form name="test" method="post" action="add/addbill.php">
                        <button class="btn1" >สมัครเลย</button>
                    </form>
            </div>
     
    </div>
    <script src="javascript/registerdetail.js"></script>
<?php require_once("footer.php"); ?> 