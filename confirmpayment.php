<!doctype html>
<?php require_once("header.php"); ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="css/acss.css" rel="stylesheet">
<link href="css/css_new.css" rel="stylesheet">
<link href="css/pic.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


 <!-- process step bar -->
 <div class="container">
        <ul class="progressbar">
            <li class="active">ลงทะเบียน</li>
            <li class="active">ตรวจสอบ</li>
            <li class="active">ยืนยันข้อมูล</li>
            <li>ชำระเงิน</li>
            <li>เสร็จสิ้น</li>
        </ul>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
        <div class="panel panel-info">
            <div class="panel-heading">
                <h1><center><strong>ยืนยันการชำระเงิน</strong></center></h1>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                        <tr>
                            <td>Tracking Number : </td>
                            <td>YYY-1234</td>
                        </tr>
                        <tr>
                            <td>วันที่สมัคร : </td>
                            <td>DD/MM/YYYY</td>
                        </tr>
                        <tr>
                            <td>Time :</td>
                            <td>HH : MM : SS</td>
                        </tr>
                        <tr>
                            <td>จำนวนเงินรวม :</td>
                            <td>XXX.XX บาท</td>
                        </tr>
                        <tr>
                            <td>ข้อมูลธนาคารสำหรับการโอน</td>
                            <td>ชื่อธนาคาร : <br><br> ประเภทบัญชี : <br><br> หมายเลขบัญชี: <br><br> ชื่อบัญชี : </td>
                        </tr>
                        <tr>
                            <td>จำนวนเงินที่โอน/ฝาก *</td>
                            <td> XXXX.XXX บาท </td>
                        </tr>
                        <tr>
                            <td>วันที่/เวลา บนใบโอนเงิน/ฝากเงิน*</td>
                            <td>ด้วยตัวเอง ณ สถานที่จัดงาน</td>
                        </tr>
                    </tbody>
                  </table>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>

<center>
<button type="button" class="btn btn-warning"><a href="payment.php">ยืนยัน</a></button>
<button type="button" class="btn btn-warning"><a href="register1.php">ย้อนกลับ</a></button>
</center><br>

<?php require_once("footer.php"); ?>  