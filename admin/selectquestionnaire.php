<?php
include "../conn/connection.php";
?>

                    <div class="page-title">
                        <h1>Select Quiz</h1>
                    </div>
    
                    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Quiz Name</th>
                <th scope="col">Quiz Time</th>
                <th scope="col">Select</th>
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
        <td><a href="questionnaire.php?id=<?php echo $row["quiz_id"]; ?>">Select</td>
    </tr>

    <?php
}

?>


                         