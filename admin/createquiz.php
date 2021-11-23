<?php
include "../admin/header.php";
include "../conn/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/createquiz.css">
    <title>Document</title>
</head>
<body>
<div class="page-title">
                    <div class="page-title">

                        <h1>Add Exam</h1>
                   
                    <form name="form1" action="" method="post">
                            <div class="card-header"><strong></strong>
                                <div class="form-group"><label for="exam_name" class=" form-control-label">New Exam </label><input type="text" name="exam_name" placeholder="Add Exam Categories" class="form-control"></div>
                                    <div class="form-group"><label for="quiz_time_in_minutes" class=" form-control-label">Exam Time</label><input type="text"  placeholder="Quiz Time In Minutes" class="form-control" name="quiz_time_in_minutes"></div>
                                    <div class="form-group">
                                        
                                    </div>                           
                                    </div>
                            </div>   
                            <div><input type="submit" name="submit1" value="Add Exams" class="btn-btn-success"></div>
</body>
</html>
<?php
    if(isset($_POST["submit1"]))
    {
        mysqli_query($link,"INSERT into quiz values(NULL,'$_POST[exam_name]','$_POST[quiz_time_in_minutes]')") or die(mysqli_error($link));

        ?>
        <script type="text/javascript">
            alert("quiz title added successfully");
            window.location.href=window.location.href;
        </script>
        <?php
    }
?>


                         


    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Quiz Name</th>
                <th scope="col">Quiz Time</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>

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
