<?php
include "../conn/connection.php";
$quiz_id=$_GET["id"];
$exam_name='';
$res=mysqli_query($link,"SELECT * from quiz where quiz_id=$quiz_id");
while($row=mysqli_fetch_array($res))
{
    $exam_name=$row["exam_name"];    
}
?>

<form name="form1" action="" method="POST">
                    <div class="page-title">
                        <h1>Add Question inside <?php echo "<font color='red'>" .$exam_name. "</font>"; ?></h1>
                    </div>
    
                            <form name="form1" action="" method="post">
                            <div class="card-header"><strong>Add New Questions</strong>
                                <div class="form-group"><label for="questions" class=" form-control-label">New Question </label><input type="text" name="question" placeholder="Add Question" class="form-control"></div>
                                <div class="form-group"><label for="questions" class=" form-control-label">Add Option </label><input type="text" name="choices1" placeholder="Add Option 1" class="form-control"></div>
                                <div class="form-group"><label for="questions" class=" form-control-label">Add Option </label><input type="text" name="choices2" placeholder="Add Option 2" class="form-control"></div>
                                <div class="form-group"><label for="questions" class=" form-control-label">Add Option </label><input type="text" name="choices3" placeholder="Add Option 3" class="form-control"></div>
                                <div class="form-group"><label for="questions" class=" form-control-label">Add Option </label><input type="text" name="choices4" placeholder="Add Option 4" class="form-control"></div>
                                <div class="form-group"><label for="questions" class=" form-control-label">Add Answer </label><input type="text" name="answer" placeholder="Add Answer" class="form-control"></div>
                                        <input type="submit" name="submit1" value="Add Question" class="btn-btn-success">
                                    </div>                           

                            </div>
                        </form>

<?php
if(isset($_POST["submit1"]))
{
$loop=0;

    $count=0;
    
    $res=mysqli_query($link, "SELECT * from questions where title='$exam_name' order by id asc") or die(mysqli_error($link));
    
    $count=mysqli_num_rows($res);

    if($count==0)
    {
        
    }
    else{
        while ($row=mysqli_fetch_array($res))
        {
            $loop=$loop+1;
            mysqli_query($link,"UPDATE questions set question_no='$loop' where question_id=$row[id]");
        }
    }

    $loop=$loop+1;
    mysqli_query($link, "INSERT into questions values (NULL,'$loop','$_POST[question]','$_POST[choices1]','$_POST[choices2]','$_POST[choices3]','$_POST[choices4]','$_POST[answer]','$exam_name') ") or die (mysqli_error($link));

}

?>