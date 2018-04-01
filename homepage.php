<!doctype html>
<?php require_once("header.php"); ?>
    <!-- slide -->
    <div class="container bg-2">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
        
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active " > 
                    <img src="event/CMU/even.jpg" style="width:100%;" class="center">
                    <button onclick="location.href='register1.php'" class="btn" >REGISTRATION IS NOW OPEN</button>
                </div>
        
                <div class="item" >
                    <img src="event/Run To Sea/even1.jpg" style="width:100%;"  class="center">
                    <button onclick="location.href='register1.php'"class="btn">REGISTRATION IS NOW OPEN</button>
                </div>
                
                <div class="item">
                    <img src="event/วิ่งอมยิ้ม/even2.jpg" style="width:100%;"  class="center" >
                    <button onclick="location.href='register1.php'" class="btn">REGISTRATION IS NOW OPEN</button>
                </div>
            </div>
        
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
<?php require_once("footer.php"); ?>   