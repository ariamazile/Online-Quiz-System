<?php
session_start();
?>

<div class="col-lg-6 col lg-push3" style="...">

<center>
<h1> All Exam Results </h1>
</center>

<?php
$count=0;
$res=mysqli_query($link, "SELECT * from result where username='$_SESSION[username]' order by id desc ");
$count=mysqli_num_rows($res);

if($count==0)
{
    ?>
    <center>
    <h1> No Results Found </h1>
</center>
<?php

}
else{
    echo"<table class='table table-bordered'>";
    echo"<tr>";
    echo"<th>"; echo "username"; echo "</th>";
    echo"<th>"; echo "exam type"; echo "</th>";
    echo"<th>"; echo "total question"; echo "</th>";
    echo"<th>"; echo "correct answer"; echo "</th>";
    echo"<th>"; echo "wrong aswer"; echo "</th>";
    echo"<th>"; echo "exam time"; echo "</th>";
    echo"</tr>";
    while($row=mysqli_fetch_array($res))
    {
        echo"<tr>";
        echo"<td>"; echo $row["username"]; echo "</td>";
        echo"<td>"; echo $row["exam_type"]; echo "</td>";
        echo"<td>"; echo $row["total_question"]; echo "</td>";
        echo"<td>"; echo $row["correct_answer"]; echo "</td>";
        echo"<td>"; echo $row["wrong_answer"]; echo "</td>";
        echo"<td>"; echo $row["exam_time"]; echo "</td>";
        echo"</tr>";
    }

}
echo "</table>";

?>
