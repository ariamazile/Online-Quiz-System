<?php
include "../admin/header.php";
include "../conn/connection.php";
?>

                    <div class="page-title">
                        <h1>Add Exam</h1>
                    </div>
    

                            <form name="form1" action="" method="post">
                            <div class="card-header"><strong>Add Exam</strong>
                                <div class="form-group"><label for="exam_name" class=" form-control-label">New Exam </label><input type="text" name="exam_name" placeholder="Add Exam Categories" class="form-control"></div>
                                    <div class="form-group"><label for="quiz_time_in_minutes" class=" form-control-label">Exam Time</label><input type="text"  placeholder="Quiz Time In Minutes" class="form-control" name="quiz_time_in_minutes"></div>
                                    <div class="form-group">
                                        <input type="submit" name="submit1" value="Add Exam" class="btn-btn-success">
                                    </div>                           

                            </div>

<?php
    if(isset($_POST["submit1"]))
    {
        mysqli_query($link,"insert into quiz values(NULL,'$_POST[exam_name]','$_POST[quiz_time_in_minutes]')") or die(mysqli_error($link));

        ?>
        <script type="text/javascript">
            alert("exam added successfully");
            window.location.href=window.location.href;
        </script>
        <?php
    }
?>