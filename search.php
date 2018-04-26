<!DOCTYPE html>
<html>
<?php 
$event_id = $_GET['id'];
?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Search Runner</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="javascript/search.js"></script>
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" type="text/css" media="screen" href="search.css" />

    <style>
    #show1{
        display:none;
    }

    #show2{
        display:none;
    }
    #show3{
        display:none;
    }

    </style>

</head>

<?php require_once("header.php"); ?>


<body>
<br>

<center>
    <div class="w3-container">
        <div class="w3-row">
                <center> <h2>ค้นหานักวิ่ง</h2> </center>   <br>
                        <div id="custom-search-input">
                                <div class="dropdown btn-group">
                                    <button id="name1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" placeholder="ประเภทการค้นหา">
                                        ประเภทการค้นหา 
                                        <span class="caret"></span>
                                    </button>

                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                    
                                        <li id="press1"><a href="#"> ค้นหาจากชื่อ-นามสกุล </a></li>
                                        <li id="press2"><a href="#"> ค้นหาจากเลขบัตรประชาชนหรือพาสปอร์ต </a></li> 
                                        <li id="press3"><a href="#"> ค้นหาจากเลขที่ใบสมัคร </a></li>
                                                                                                       
                                    </ul>
                                </div>
                        </div>

                        <br>
                        <p> <h4 id="noti"> โปรดเลือกวิธีการค้นหา </h4></p>
                                                               
                </div>
        </div>
</center>

<center>
    <div class="w3-container">
        <div class="w3-row">
                                <div id="show1">
                                <form action="search.php?search=first&&id=<?=$event_id?>" method="post">
                                    <div class="input-group col-md-4">
                                            <input type="text" name ="name" class="search-query form-control" placeholder="ค้นหาจากชื่อ-นามสกุล" />
                                                <span class="input-group-btn">
                                                    <button class="btn btn-primary" type="submit">
                                                        <span class=" glyphicon glyphicon-search" style="color:rgb(255,255,255)"></span>
                                                    </button>
                                                </span>   
                                                                       
                                        </div>
                                        </form> 
                                </div>

                                <div id="show2">
                                    <form action="search.php?search=essn&&id=<?=$event_id?>" method="post">
                                        <div class="input-group col-md-4">
                                        
                                            <input type="text" name ="name" class="search-query form-control" placeholder="ค้นหาจากเลขบัตรประชาชนหรือพาสปอร์ต" />
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary" type="submit">
                                                    <span class=" glyphicon glyphicon-search" style="color:rgb(255,255,255)"></span>
                                                </button>
                                            </span>
                                        </div>    
                                    </form> 
                                </div> 

                                <div id="show3">
                                    <form action="search.php?search=num&&id=<?=$event_id?>" method="post">
                                        <div class="input-group col-md-4">
                                            <input type="text" name ="name" class="search-query form-control" placeholder="ค้นหาจากเลขที่ใบสมัคร" />
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary" type="submit">
                                                    <span class=" glyphicon glyphicon-search" style="color:rgb(255,255,255)"></span>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                <div>                    
            </div>
        </div>
</center>

<br>
<br>

<center>
    <div class="w3-container">
        <div class="w3-row">
            <div class="dropdown btn-group">
                <button  id="name2" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    เลือกประเภทการวิ่ง 
                    <span class="caret"></span>
                </button>
                
                    <ul class="dropdown-menu" role="menu">                       
                        <li id="type1"><a href="search.php?type=All&&id=<?=$event_id?>">All</a></li>
                        <li id="type2"><a href="search.php?type=Full&&id=<?=$event_id?>">Full Marathon</a></li>
                        <li id="type3"><a href="search.php?type=Half&&id=<?=$event_id?>">Half Marathon</a></li>
                        <li id="type4"><a href="search.php?type=Mini&&id=<?=$event_id?>">Mini Marathom</a></li>
                        <li id="type5"><a href="search.php?type=Fun&&id=<?=$event_id?>">Fun run</a></li>                       
                    </ul>   
            </div>   

            <button href="" type="button" class="w3-btn w3-ripple w3-round-xlarge w3-border w3-red">
                <a href="register1.php" class="w3-text-white"> สมัครเลย </a>               
            </button>  

        </div> 
    </div>
</center>

<br>

<!--table-->
<div class="w3-container">
    <center><h3><p>ผลลัพธ์</p></h3></center>  <br>                                                                                        
    <div class="w3-responsive">
        <div class="w3-row">                       
            <div class="col-md-8 col-md-offset-2">
                <table class="w3-table-all w3-border w3-centered w3-hoverable w3-card-4">
                    <thead>
                        <tr class="w3-blue">
                            <th>ชื่อ</th>
                            <th>นามสกุล</th>
                            <th>อายุ</th>
                            <th>สัญชาติ</th>
                            <th style="width:196px">ประเภทการวิ่ง</th>
                            <th>Waiver</th>      
                        </tr>
                    </thead>
                </table>
        </div>
        <div class="col-md-8 col-md-offset-2 " style="height:300px; overflow:scroll;">
                <table class="w3-table-all w3-border w3-centered w3-hoverable w3-card-4">
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
                        
                        if(empty($_GET['search'])){
                            if(empty($_GET['type']) or $_GET['type'] == "All" ){
                            $sql = "SELECT runners.frist_name, runners.last_name, runners.brith_date, runners.nationality, runners_bills.flag_full , runners_bills.flag_half , runners_bills.flag_mini , runners_bills.flag_fun
                                    FROM runners, runners_bills , bills
                                    WHERE bills.event_id = $event_id AND bills.flag_success = 1 AND bills.bill_id = runners_bills.bill_id AND runners_bills.run_id = runners.run_id
                                    ORDER by runners.frist_name ASC";
                            }else if($_GET['type'] == "Full"){
                                $sql = "SELECT runners.frist_name, runners.last_name, runners.brith_date, runners.nationality, runners_bills.flag_full , runners_bills.flag_half , runners_bills.flag_mini , runners_bills.flag_fun
                                FROM runners, runners_bills , bills
                                WHERE bills.event_id = $event_id AND bills.flag_success = 1 AND bills.bill_id = runners_bills.bill_id AND runners_bills.run_id = runners.run_id  AND runners_bills.flag_full = 1
                                ORDER by runners.frist_name ASC";
                            }else if($_GET['type'] == "Half"){
                                $sql = "SELECT runners.frist_name, runners.last_name, runners.brith_date, runners.nationality, runners_bills.flag_full , runners_bills.flag_half , runners_bills.flag_mini , runners_bills.flag_fun
                                FROM runners, runners_bills , bills
                                WHERE bills.event_id = $event_id AND bills.flag_success = 1 AND bills.bill_id = runners_bills.bill_id AND runners_bills.run_id = runners.run_id AND runners_bills.flag_half = 1
                                ORDER by runners.frist_name ASC";
                            }else if($_GET['type'] == "Mini"){
                                $sql = "SELECT runners.frist_name, runners.last_name, runners.brith_date, runners.nationality, runners_bills.flag_full , runners_bills.flag_half , runners_bills.flag_mini , runners_bills.flag_fun
                                FROM runners, runners_bills , bills
                                WHERE bills.event_id = $event_id AND bills.flag_success = 1 AND bills.bill_id = runners_bills.bill_id AND runners_bills.run_id = runners.run_id AND runners_bills.flag_mini = 1
                                ORDER by runners.frist_name ASC";
                            }else if($_GET['type'] == "Fun"){
                                $sql = "SELECT runners.frist_name, runners.last_name, runners.brith_date, runners.nationality, runners_bills.flag_full , runners_bills.flag_half , runners_bills.flag_mini , runners_bills.flag_fun
                                FROM runners, runners_bills , bills
                                WHERE bills.event_id = $event_id AND bills.flag_success = 1 AND bills.bill_id = runners_bills.bill_id AND runners_bills.run_id = runners.run_id AND runners_bills.flag_fun = 1
                                ORDER by runners.frist_name ASC";
                            }
                        }else{
                            $fname = "'".$_POST['name']."%'"; 
                            if($_GET['search'] == "first"){
                                $sql = "SELECT runners.frist_name, runners.last_name, runners.brith_date, runners.nationality, runners_bills.flag_full , runners_bills.flag_half , runners_bills.flag_mini , runners_bills.flag_fun
                                FROM runners, runners_bills , bills
                                WHERE runners.frist_name LIKE $fname AND bills.event_id = $event_id AND bills.bill_id = runners_bills.bill_id AND runners_bills.run_id = runners.run_id
                                ORDER by runners.frist_name ASC";
                            }else if($_GET['search'] == "essn"){
                                $sql = "SELECT runners.frist_name, runners.last_name, runners.brith_date, runners.nationality, runners_bills.flag_full , runners_bills.flag_half , runners_bills.flag_mini , runners_bills.flag_fun
                                FROM runners, runners_bills , bills
                                WHERE runners.essn LIKE $fname AND bills.event_id = $event_id AND bills.bill_id = runners_bills.bill_id AND runners_bills.run_id = runners.run_id
                                ORDER by runners.frist_name ASC";
                            }
                        }
                        $result = $conn->query($sql);

                        $conn->close();
                    ?> 
                    <?php 
                    if(!empty($result)){
                        while($row = $result->fetch_assoc()): 
                            $date = explode('-', $row['brith_date']);
                            $age = date("Y") - $date[0];

                            $text = "";
                            if(!empty($row["flag_full"])){
                            $text = "Full Marathon";
                            } else if(!empty($row["flag_half"])){
                            $text = "Half Marathon";
                            }else if(!empty($row["flag_mini"])){
                            $text = "Mini Marathon";
                            }else if(!empty($row["flag_fun"])){
                            $text = "Funrun Marathon";
                            }

                    ?>    
                        <tbody>
                        <tr>
            
                            <td style="padding-left:16px;width:108px;"><?=$row['frist_name']?></td>
                            <td style="width:118px;"><?=$row['last_name']?></td>
                            <td><?=$age?></td>
                            <td style="width:116px;"><?=$row['nationality']?></td>
                            <td style="width:246px;"><?=$text?></td>
                            <td><a href="#"><span class="glyphicon glyphicon-list-alt"></span></a></td>
                        </tr>
                    <?php endwhile; ?> 
                    <?php
                        }
                    ?>
                        </tbody>
                </table>
            </div>
        </div>
        <br><center><a href="registerdetail.php?id=2"><button class="btn btn-success"> ย้อนกลับ </button></a> </center>
    </div>      
</div>

<br>
</body>
</html>

<?php require_once("footer.php"); ?>