<!doctype html>
<?php require_once("header.php"); ?>
<link href="css/registerdetail.css" rel="stylesheet">
    
    <!-- slide -->
    <form>
        <div class="container">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active" > 
                        <center><img src="event/RunToSea/even1.jpg" style="width:60%; height:auto"></center>
                        <br>
                    </div>
                    <button onclick="location.href='login.html'" class="btn1" >สมัครเลย</button>
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
                <img src="event/RunToSea/Schedule.png" style="width:50%; height:50%" class="center">
                <h2>ค่าธรรมเนียม</h2>
                <img src="event/RunToSea/Fee.png" style="width:50%; height:50%" class="center">
                <h2>เสื้อที่จะได้ในรายการแข่งขัน</h2>
                <img src="event/RunToSea/shirt1.jpg" style="width:50%; height:50%" class="center"><br>
                <img src="event/RunToSea/shirt2.jpg" style="width:50%; height:50%" class="center">
                <h2>กติกา</h2>
                <h4>กติกาของงานซึ่งผู้สมัครเข้าร่วมการแข่งขันต้องยอมรับและปฏิบัติตาม</h4>
                <h5>1. กติกาของงานสอดคล้องกับกฎหมาย</h5>
                <h5>2. นอกจากกติกาของงานแล้ว ยังประกอบด้วยกติกาการแข่งขัน และกติกาในการสมัคร</h5>
                <h5>3. นักวิ่งผู้เข้าร่วมจะถูกปฏิบัติตามข้อควรระวังของผู้จัดงานเพื่อให้แน่ใจว่าผู้เข้าร่วมเกิดความปลอดภัย และผู้เข้าร่วมจะทำการวิ่งโดยยอมรับความเสี่ยงของตนเอง และผู้จัดงานจะไม่รับผิดชอบหรือต้องระวางโทษต่อการบาดเจ็บหรือเสียชีวิต ไม่ว่ากรณีฝึกซ้อมหรือระหว่างเข้าร่วมแข่งขัน ทั้งนี้ ผู้เข้าร่วมควรพบแพทย์หรือที่ปรึกษาทางสุขภาพก่อนทำการลงทะเบียน และก่อนวันแข่งขันจริง</h5>
                <br><br><br>
                <button onclick="location.href='login.html'" class="btnn" >สมัครเลย</button>
            </div>

            <!--map-->
            <div id="map" class="tabcontent">
                <center><img src="event/RunToSea/map1.jpg" style="width:50%; height:50%"></center>
                <br><br><br>
                <button onclick="location.href='login.html'" class="btnn1" >สมัครเลย</button>
            </div>
            
            <!--type-of-race-->
            <div id="typeRace" class="tabcontent">
                <h2><u>Male (ชาย)</u></h2>
                <h5>รุ่นอายุ 16 - 29 ปี</h5>
                <h5>รุ่นอายุ 30 - 39 ปี</h5>
                <h5>รุ่นอายุ 40 - 49 ปี</h5>
                <br><br><br>
                <button onclick="location.href='login.html'" class="btnn2" >สมัครเลย</button>
            </div>
        </form>
    </div>
    <script src="javascript/registerdetail.js"></script>
<?php require_once("footer.php"); ?> 