<?php
include "../conn/connection.php";
include "../admin/header.php";
$question_id=$_GET["id"];
$id1=$_GET["id1"];

$question="";
$choices1="";
$choices2="";
$choices3="";
$choices4="";
$answer="";
$res=mysqli_query($link, "SELECT * from questions where question_id=$question_id");
while($row=mysqli_fetch_array($res))
{
    $question=$row["question"];
    $choices1=$row["choices1"];
    $choices2=$row["choices2"];
    $choices3=$row["choices3"];
    $choices4=$row["choices4"];
    $answer=$row["answer"];
}
?>
<link rel="stylesheet" href="../css/editquestion.css">
<div class="page-title">
    <h1>Update Question</h1>
</div>

<div class="edit">
<form name="form1" action="" method="POST">
<form name="form1" action="" method="post">
<div class="card-header"><strong>Update Questions</strong>
<div class="form-group"><label for="questions" class=" form-control-label">New Question </label><input type="text" name="question" placeholder="Add Question" class="form-control" value="<?php echo $question; ?>"></div>
<div class="form-group"><label for="questions" class=" form-control-label">Add Option </label><input type="text" name="choices1" placeholder="Add Option 1" class="form-control" value="<?php echo $choices1; ?>"></div>
<div class="form-group"><label for="questions" class=" form-control-label">Add Option </label><input type="text" name="choices2" placeholder="Add Option 2" class="form-control" value="<?php echo $choices2; ?>"></div>
<div class="form-group"><label for="questions" class=" form-control-label">Add Option </label><input type="text" name="choices3" placeholder="Add Option 3" class="form-control" value="<?php echo $choices3; ?>"></div>
<div class="form-group"><label for="questions" class=" form-control-label">Add Option </label><input type="text" name="choices4" placeholder="Add Option 4" class="form-control" value="<?php echo $choices4; ?>" ></div>
<div class="form-group"><label for="questions" class=" form-control-label">Update Answer </label><input type="text" name="answer" placeholder="Add Answer" class="form-control" value="<?php echo $answer; ?>"></div>
<input type="submit" name="submit1" value="Add Question" class="btn-btn-success">
</div>                           
</div>
</div>
</form>


<?php
if(isset($_POST["submit1"]))
{
    mysqli_query($link, " UPDATE questions set question='$_POST[question]',choices1='$_POST[choices1]',choices2='$_POST[choices2]',choices3='$_POST[choices3]',choices4='$_POST[choices4]',answer='$_POST[answer]' where question_id=$question_id  ");

    ?>
    <script type="text/javascript">
        window.location="questionnaire.php?id=<?php echo $id1 ?>";
        </script>
        <?php

}

?>