<!doctype html>
<?php require_once("header.php"); ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="css/acss.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!------ Include the above in your HEAD tag ---------->


 <!-- process step bar -->
 <div class="container">
        <ul class="progressbar">
            <li class="active">ลงทะเบียน</li>
            <li class="active">ตรวจสอบ</li>
            <li>ยืนยันข้อมูล</li>
            <li>ชำระเงิน</li>
            <li>เสร็จสิ้น</li>
        </ul>
    </div>

    
<div class="container">
        <div class="container">
            
        <header class="clearfix">
                <div id="logo">
            <h3>นักวิ่งคนที่1</h3>
            <a href="registerrunner2_1.html"><span></span></a>
            </div>
            <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </button>
        </header>

        <header class="clearfix">
                <div id="logo">
            <h3>+เพิ่มเพื่อน</h3>
            <a onclick ="document.getElementById('id01').style.display='block'"><span></span></a>
            </div>
            <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </button>
        </header>
        
        </div>

</div>
    <div class="carousel-inner">
            <div class="item active container" > 
                <button onclick ="document.getElementById('id02').style.display='block'" class="btnnn">กรอกแบบสอบถาม</button>	
                <button onclick="location.href='register2.5.2.php'" class="btnn" >ต่อไป</button>
            </div>
    </div>
<div class="w3-container">
    <div id="id01" class="w3-modal">
        <div class="w3-modal-content">
            <div class="w3-container">
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                    <p>Some text. Some text. Some text.</p>
                    <p>Some text. Some text. Some text.</p>
                    <p>Some text. Some text. Some text.</p>
                    <p>Some text. Some text. Some text.</p>
                    <p>Some text. Some text. Some text.</p>
            </div>
        </div>
    </div>
    <div id="id02" class="w3-modal">
        <div class="w3-modal-content">
            <div class="w3-container">
                <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                    <div class="form-group col-md-12">
                        <label for="inputCity">1.ทราบ event จากช่องทางไหน</label>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="primary" class="btn btn-primary">Facebook <input type="checkbox" id="primary" ></label>
                        <label for="success" class="btn btn-success">Line <input type="checkbox" id="success" ></label>
                        <label for="warning" class="btn btn-warning">Friend <input type="checkbox" id="warning" ></label>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputCity">2.รู้จักเว็บไซต์เราได้อย่างไร</label>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="primary" class="btn btn-primary">Facebook <input type="checkbox" id="primary" ></label>
                        <label for="success" class="btn btn-success">Line <input type="checkbox" id="success" ></label>
                        <label for="warning" class="btn btn-warning">Friend <input type="checkbox" id="warning" ></label>
                    </div>


                    <div class="carousel-inner">
                        <div class="item active container" > 	
                            <button onclick="location.href='register2.5.2.php'" class="pume" >บันทึก</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<?php require_once("footer.php"); ?>   
