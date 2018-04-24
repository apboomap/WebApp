<!DOCTYPE html>
<?php 
 $event_id = $_GET['id'];
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Payment Status</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" media="screen" href="statusPayment.css" />
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid 
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){
            background-color: #f2f2f2;
        }

        th {
            background-color: rgb(14, 16, 117);
            color: white;
        }
    </style>
    
</head>


<body>
<?php require_once("header.php"); ?>
<?php if(empty($_POST['name'])){?>
<br>
<div class="container">
    <div class="row">
        <center> <h2> สถานะการชำระเงิน </h2> <br>
            <div id="custom-search-input">
                <form action="statusPayment.php" method="post">
                    <div class="input-group col-md-6">
                        <input type="text" name="name" class="  search-query form-control" placeholder="ค้นหาจากชื่อ-นามสกุล" size="100"/>
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit">
                                    <span class=" glyphicon glyphicon-search" style="color:rgb(255,255,255)"></span>
                                </button>
                             </span>
                    </div>       
                </form> 
             </div>
        </center>
    </div>
</div>

<!--table-->

<div class="w3-container">
            <div class="w3-responsive"> 
                <div class="w3-row">                       
                        <div class="col-md-8 col-md-offset-2">
                            <table class="w3-table-all w3-border w3-centered w3-hoverable w3-card-4">
                                <thead>
                                <tr>
                                    <th>ชื่อ</th>
                                    <th>นามสกุล</th>
                                    <th>สถานะ</th>  
                                </tr>
                                </thead>
                            </table>
                        </div>
                            <div class="col-md-8 col-md-offset-2" style="height:300px; overflow:scroll;">
                                <table class="w3-table-all w3-border w3-centered w3-hoverable w3-card-4">   
                                <tbody>
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
                                
                                    $sql = "SELECT runners.frist_name, runners.last_name, bills.flag_success
                                            FROM runners, runners_bills , bills
                                            WHERE bills.event_id = $event_id AND bills.bill_id = runners_bills.bill_id AND runners_bills.run_id = runners.run_id
                                            ORDER by runners.frist_name ASC";
                                    $result = $conn->query($sql);

                                    $conn->close();
                                ?> 
                                <?php while($row = $result->fetch_assoc()): ?>    
                                <tr>
                                    <td><?=$row['frist_name']?></td>
                                    <td><?=$row['last_name']?></td>
                                    <?php
                                    if(!empty($row['flag_success'])){
                                    ?>
                                        <td style="color:blue">ชำระเรียบร้อย</td>
                                    <?php
                                    }else{
                                    ?>    
                                         <td style="color:red">ยังไม่ได้ชำระ</td>
                                    <?php } ?>                   
                                </tr>
                                <?php endwhile; ?> 
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>  
           
</div>
<br>

    <?php 
}else{
?>
<br>
<div class="container">
    <div class="row">
        <center> <h2> สถานะการชำระเงิน </h2> <br>
            <div id="custom-search-input">
                <form action="statusPayment.php" method="post">
                    <div class="input-group col-md-6">
                        <input type="text" name="name" class="  search-query form-control" value=<?=$_POST['name']?> size="100"/>
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit">
                                    <span class=" glyphicon glyphicon-search" style="color:rgb(255,255,255)"></span>
                                </button>
                             </span>
                    </div>       
                </form> 
             </div>
        </center>
    </div>
</div>

<!--table-->

<div class="w3-container">
            <div class="w3-responsive"> 
                <div class="w3-row">                       
                        <div class="col-md-8 col-md-offset-2">
                            <table class="w3-table-all w3-border w3-centered w3-hoverable w3-card-4">
                                <thead>
                                <tr>
                                    <th>ชื่อ</th>
                                    <th>นามสกุล</th>
                                    <th>สถานะ</th>  
                                </tr>
                                </thead>
                            </table>
                        </div>
                            <div class="col-md-8 col-md-offset-2" style="height:300px; overflow:scroll;">
                                <table class="w3-table-all w3-border w3-centered w3-hoverable w3-card-4">   
                                <tbody>
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
                                    $fname = "'".$_POST['name']."%'";                                      
                                    $sql = "SELECT runners.frist_name, runners.last_name, bills.flag_success
                                            FROM runners, runners_bills , bills
                                            WHERE runners.frist_name LIKE $fname AND bills.event_id = $event_id AND bills.bill_id = runners_bills.bill_id AND runners_bills.run_id = runners.run_id
                                            ORDER by runners.frist_name ASC";
                                    $result = $conn->query($sql);

                                    $conn->close();
                                ?> 
                                <?php while($row = $result->fetch_assoc()): ?>    
                                <tr>
                                    <td><?=$row['frist_name']?></td>
                                    <td><?=$row['last_name']?></td>
                                    <?php
                                    if(!empty($row['flag_success'])){
                                    ?>
                                        <td style="color:blue">ชำระเรียบร้อย</td>
                                    <?php
                                    }else{
                                    ?>    
                                         <td style="color:red">ยังไม่ได้ชำระ</td>
                                    <?php } ?>                   
                                </tr>
                                </tr>
                                <?php endwhile; ?> 
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>  
           
</div>


<?php } ?>
</body>
</html>

<br>
<br>
<br>
<br>


<?php require_once("footer.php"); ?>