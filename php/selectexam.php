<?php
session_start();
if(!isset($_SESSION["username"]))
{

    ?>
    <script type="text/javascript">
        window.location="login.php";
    </script>
    <?php
}
?>


<?php
include "conn/connection.php";
?>


<div class="row" style="...">

<div class="col-lg-6 col-lg-push-3" style="min-height: 500px; background-color: white;">
<?php
$res=mysqli_query($link," SELECT * from quiz");
while($row=mysqli_fetch_array($res))
{
    ?>
<input type="button" class="btn btn-success form-control" value="<?php echo $row["exam_name"]; ?>" style="margin-top: 10px background-color:blue; color:blue" onclick="set_exam_type_session(this.value);">
    <?php

}
?>
</div>
</div>


<script type="text/javascript">
function set_exam_type_session(quiz)
    {
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
        if(xmlhttp.readyState==4 && xmlhttp.status==200){

            window.location="dashboard.php";
        }
    };
    xmlhttp.open("GET", "forajax/set_exam_type_session.php?quiz="+ quiz, true);
    xmlhttp.send(null);
}
</script>
