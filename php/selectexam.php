<?php
session_start();
if(!isset($_SESSION["username"]))
{

    ?>
    <script type="text/javascript">
        window.location="login.php";
    <?php
}
?>
<?php
include "conn/connection.php";
?>


<div class="row">
<?php
$res=mysqli_query($link," SELECT * from quiz");
while($row=mysqli_fetch_array($res))
{
    ?>
<input type="button" class="btn btn-success form-control" value="<?php echo $row["exam_name"]; ?>" onclick="set_exam_type_session(this.value);">
    <?php

}
?>


<script type="text/javascript">
    function set_exam_type_session(exam_name)
    {
    var xmlhttp=new XMLHttpRequest();
    mxlhttp.onreadystatechange=function() {
        if(xmlhttp.readyState==4 && xmlhttp.status==200){
            window.location="dashboard.php";
        }
    };
    xmlhttp.open("GET", "foarajax/set_exam_type_session.php?exam_name="+ exam_name, true);
    xmlhttp.send(null);
}

</script>
