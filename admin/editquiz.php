<?php
include "../conn/connection.php";
?>
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
            <a href="../admin/editquiz.php"><i class="fas fa-edit"></i><span>Edit Quiz</span></a>
            <a href="../admin/postedquiz.php"><i class="fas fa-upload"></i><span>Posted Quiz</span></a>
            <a href="../admin/completedquiz.php"><i class="fas fa-tasks"></i><span>Completed Quiz</span></a>
        </div>
    <!--sidebar end-->
    
    <form action="">
    <div class="card-body">
    <table class="table-content">
        <thead>
            <tr class = "active-row">
                <th scope="col">#</th>
                <th scope="col">Quiz Name</th>
                <th scope="col">Quiz Time</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
        </div>
        </form>
    
    
</body>
</html>

<?php
$count=0;
$res=mysqli_query($link,"SELECT * from quiz");
while($row=mysqli_fetch_array($res))
{
$count=$count+1;
    ?>
     <tr>
        <th scope="row"><?php echo $count; ?> </th>
        <td><?php echo $row["exam_name"]; ?> </td>
        <td><?php echo $row["quiz_time_in_minutes"]; ?> </td>    
        <td><a href="editbtn.php?id=<?php echo $row["quiz_id"]; ?>">Edit</td>
        <td><a href="deletebtn.php?id=<?php echo $row["quiz_id"]; ?>">Delete</a></td>
    </tr>

    <?php
}

?>
