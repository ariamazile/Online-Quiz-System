<?php
session_start();
include "conn/connection.php";
$quiz=$_GET["quiz"];
$_SESSION["quiz"]=$quiz;

$res=mysqli_query($link,"select * from quiz where exam_name='$quiz'");
while($row=mysqli_fetch_array($res))
{
    $_SESSION["exam_time"]=$row["quiz_time_in_minutes"];
}
date_default_timezone_set('Asia/Kolkata');
$date = date("Y-m-d H:i:s");
$_SESSION["end_time"]=date("Y-m-d H:i:s", strtotime($date . "+$_SESSION[exam_time] minutes"));
$_SESSION["exam_start"]="yes";
?>