<?php
include "conn/connection.php";
session_start();
if(!isset($_SESSION["username"]))


?>

<!DOCTYPE html>
<html lang="en" dir="ltr" >
    <head>   
<meta charset="utf-8">
<title>Dashboard</title>
<link rel="stylesheet" href="css/dashboard.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
   
    <input type="checkbox" id="check"> 
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <h3></h3>
        </div>
        <div class="right_area">
            <a href="logout.php" class="logout_btn">Log out</a>
        </div>
    </header>
    
        <div class="sidebar">
            <center>
                <img src="image/2.jpg" class="profile_image" alt="">
                <h4><?php echo $_SESSION["username"]; ?></h4>
            </center>
            <a href="selectexam.php"><i class="fas fa-history"></i></i><span>Select Exam</span></a>
            <a href="quiz_result.php"><i class="fas fa-history"></i></i><span>Quiz History</span></a>

            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 text-right">
            <ul class="breadtime-menu"
            <li><div id="countdowntimer" style="display: block;"></div>
            </li>
           
        </div>
  

<script type="text/javascript">
    setInterval(function(){
        timer();
    },1000);
    function timer()
    {
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
        if(xmlhttp.readyState == 4 && xmlhttp.status==200){
           
           if(xmlhttp.responseText=="00:00:01")
           {
               window.location="result.php";
           }
           document.getElementById("countdowntimer"). innerHTML=xmlhttp.responseText;
        }
    };
    xmlhttp.open("GET", "forajax/load_timer.php", true);
    xmlhttp.send(null);
    }
</script>

</body>
</html>
