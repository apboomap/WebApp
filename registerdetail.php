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
                        <center><img src="<?=$row["img"]?>" style="width:820px; height:350px" class="img-responsive"></center>
                        <br>
                    </div>
                    <form name="test" method="post" action="add/addbill.php">
                        <button class="btn1" >สมัครเลย</button>
                    </form>
                </div>

            <!-- tab bar -->
            <!-- <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'detail')">รายละเอียด</button>
                <button class="tablinks" onclick="openCity(event, 'map')">แผนที่</button>
                <button class="tablinks" onclick="openCity(event, 'typeRace')">ประเภทการเเข่ง</button>
            </div> -->
            <div class="topnav" id="myTopnav">
                <a class="tablinks" onclick="openCity(event, 'detail')">รายละเอียด</a>
                <a class="tablinks" onclick="openCity(event, 'map')">แผนที่</a>
                <a class="tablinks" onclick="openCity(event, 'typeRace')">ประเภทการเเข่ง</a>
                <a class="tablinks" onclick="openCity(event, 'typeRace')">รายชื่อนักวิ่ง</a>
                <a class="tablinks" onclick="openCity(event, 'typeRace')">สถานะการชำระเงิน</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            </div>

        
            <!--rule-->
            <div id="detail" class="tabcontent">
                <h2><u>กำหนดการ</u></h2>
                <img src="<?=$row["schedule_event"]?>" style="width:400px; height:200px" class="img-responsive">
                <h2>ค่าธรรมเนียม</h2>
                <img src="<?=$row["charge"]?>" style="width:400px; height:170px" class="img-responsive">
                <?php 
                    if($row["shirtimg1"] != "none" or $row["shirtimg2"] != "none"){ 
                ?>
                <h2>เสื้อที่จะได้ในรายการแข่งขัน</h2>
                <?php 
                    }if($row["shirtimg1"] != "none"){ 
                ?>
                <img src="<?=$row["shirtimg1"]?>" style="width:400px; height:250px" class="img-responsive"><br>
                <?php 
                    }
                    if($row["shirtimg2"] != "none"){
                ?>
                <img src="<?=$row["shirtimg2"]?>" style="width:400px; height:250px" class="img-responsive">
                    <?php } ?>
                <h2>กติกา</h2>
                <?php
                    $text = file($row["rules"]);
                    foreach($text as $index=>$value){
                        echo $value."<br />";
                    }
                ?>
                
                <form name="test" method="post" action="add/addbill.php">
                    <button class="btnn" >สมัครเลย</button>
                </form>
            </div>

            <!--map-->
            <div id="map" class="tabcontent">
                <center><img src="<?=$row["map"]?>" style="width:500px; height:500px" class="img-responsive"></center>
                <br><br><br>
                <form name="test" method="post" action="add/addbill.php">
                        <button class="btnn1" >สมัครเลย</button>
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
                        <button class="btnn2" >สมัครเลย</button>
                    </form>
            </div>
     
    </div>
    <script src="javascript/registerdetail.js"></script> 