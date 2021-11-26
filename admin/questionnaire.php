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
    <!DOCTYPE html>
<html lang="en" dir="ltr" >
    <head>   
<meta charset="utf-8">
<title>Dashboard</title>
<link rel="stylesheet" href="../css/questionnaire.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
         
 
    <input type="checkbox" id="check"> 
    <!--header area start-->
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <h3></h3>
        </div>
        <div class="right_area">
            <a href="../admin/logout.php" class="logout_btn">Log out</a>
            
        </div>
        
    </header>
    <!--header area end-->
    <!--sidebar start-->
        <div class="sidebar">
            <center>
                <img src="../image/1.jpg" class="profile_image" alt="">
                <h4>Mr.Gresola</h4>
            </center>
            <a href="../admin/header.php"><i class="fas fa-chalkboard"></i><span>Dashboard</span></a>
            <a href="../admin/createquiz.php"><i class="fas fa-plus-square"></i><span>Create Quiz</span></a>
            <a href="../admin/selectquestionnaire.php"><i class="fas fa-tasks"></i></i><span>Manage Questionnaire</span></a>
            <a href="../admin/editquiz.php"><i class="fas fa-edit"></i><span>Edit Quiz</span></a>
            <a href="../admin/completedquiz.php"><i class="fas fa-check-double"></i><span>Completed Quiz</span></a>
        </div>
    <!--sidebar end-->
    <form name="form1" action="" method="POST">
                        <div class="page-title">
                            <h1>Add Question in <?php echo "<font color='red'>" .$exam_name. "</font>"; ?></h1>
                        </div>
        <div class= "quiz">
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
                                </div>
                            </form>

</body>
</html>
   
    <?php
    if(isset($_POST["submit1"]))
    {
    $loop=0;

        $count=0;
        
        $res=mysqli_query($link, "SELECT * from questions where title='$exam_name' order by question_id asc") or die(mysqli_error($link));
        
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
        mysqli_query($link, "INSERT into questions values (NULL,'$loop','$_POST[question]','$_POST[choices1]','$_POST[choices2]','$_POST[choices3]','$_POST[choices4]','$_POST[answer]','$exam_name')") or die (mysqli_error($link));


        ?>
        <script type="text/javascript">
            alert("question added succesfully");
            window.location.href=window.location.href;
        </script>
        <?php
    }

    ?>

<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-body">
    <table class="table-content">
        <tr>
            <th>No</th>
            <th>Questions</th>
            <th>Choices1</th>
            <th>Choices2</th>
            <th>Choices3</th>
            <th>Choices4</th>
            <th>Edit</th>
            <th>Delete</th>
</tr>


    <?php
    $res=mysqli_query($link," SELECT * from questions where title='$exam_name' order by question_no asc");
    while($row=mysqli_fetch_array($res))
    {
        echo "<tr>";
        echo "<td>"; echo $row["question_no"]; echo "</td>";
        echo "<td>"; echo $row["question"]; echo "</td>";
        echo "<td>"; echo $row["choices1"]; echo "</td>";
        echo "<td>"; echo $row["choices2"]; echo "</td>";
        echo "<td>"; echo $row["choices3"]; echo "</td>";
        echo "<td>"; echo $row["choices4"]; echo "</td>";
echo "<td>";

    ?>
        <a href="editquestion.php?id=<?php echo $row["question_id"]; ?>&id1=<?php echo $quiz_id; ?>">Edit</a>
    <?php

echo "</td>";

echo "<td>";

    ?>
        <a href="deletequestion.php?id=<?php echo $row["question_id"]; ?>&id1=<?php echo $quiz_id; ?> ">Delete</a>
    <?php

echo "</td>";
        echo "</tr>";
    }
    ?>
    </table>    
</div>    
</div>
</div>
</div>
