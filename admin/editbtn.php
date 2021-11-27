<?php
include "../conn/connection.php";
include "../admin/header.php";
$quiz_id=$_GET["id"];
$res=mysqli_query($link, "SELECT * from quiz where quiz_id=$quiz_id");
while($row=mysqli_fetch_array($res))
{
    $exam_name=$row["exam_name"];
    $quiz_time_in_minutes=$row["quiz_time_in_minutes"];
}
?>
  <link rel="stylesheet" href="../css/editbtn.css">
<div class="page-title">
                        <h1>Edit Exam</h1>
                    </div>
    <div class="editbtn">
                            <form name="form1" action="" method="post">
                            <div class="card-header"><strong>Edit Exam</strong>
                                <div class="form-group"><label for="exam_name" class=" form-control-label">New Exam </label><input type="text" name="exam_name" placeholder="Add Exam Categories" class="form-control" value="<?php echo $exam_name; ?>"></div>
                                    <div class="form-group"><label for="quiz_time_in_minutes" class=" form-control-label">Exam Time</label><input type="text"  placeholder="Exam Time In Minutes" class="form-control" name="quiz_time_in_minutes" value="<?php echo $quiz_time_in_minutes; ?>"></div>
                                    <div class="form-group">
                                        <input type="submit" name="submit1" value="Add Exam" class="btn-btn-success">
                                    </div>                           

                            </div>
                            </div>
<?php
    if(isset($_POST["submit1"]))
    {
        mysqli_query($link,"UPDATE quiz set exam_name='$_POST[exam_name]',quiz_time_in_minutes='$_POST[quiz_time_in_minutes]' where quiz_id=$quiz_id") or die(mysqli_error($link));

        ?>
        <script type="text/javascript">
            window.location="editquiz.php";
        </script>
        <?php
    }
?>