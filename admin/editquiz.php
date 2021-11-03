<?php
include "../conn/connection.php";
?>

<div class="card-body">
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
