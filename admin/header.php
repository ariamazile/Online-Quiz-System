<!DOCTYPE html>
<html lang="en" dir="ltr" >
    <head>   
<meta charset="utf-8">
<title>Dashboard</title>
<link rel="stylesheet" href="../css/prof.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
   
    <input type="checkbox" id="check"> 
    <!--header area start-->
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <h3></h3>
        </div>
        <div class="right_area">
            <a href="../admin/logout.php" class="logout_btn">Log out</a>
            
        </div>
    </header>
    <!--header area end-->
    <!--sidebar start-->
        <div class="sidebar">
            <center>
                <img src="../image/1.jpg" class="profile_image" alt="">
                <h4>Mr.Gresola</h4>
            </center>
            <a href="../admin/header.php"><i class="fas fa-chalkboard"></i><span>Dashboard</span></a>
            <a href="../admin/createquiz.php"><i class="fas fa-plus-square"></i><span>Create Quiz</span></a>
            <a href="../admin/selectquestionnaire.php"><i class="fas fa-plus-square"></i><span>Manage Questionnaire</span></a>
            <a href="../admin/postedquiz.php"><i class="fas fa-upload"></i><span>Posted Quiz</span></a>
            <a href="../admin/completedquiz.php"><i class="fas fa-tasks"></i><span>Completed Quiz</span></a>
        </div>
    <!--sidebar end-->
    
    
</body>
</html>
