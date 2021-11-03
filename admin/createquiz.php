<?php
include "../admin/header.php";
include "../conn/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Quiz</title>
    <link rel="stylesheet" href="../css/createquiz.css">
</head>
<body>
<div class= "center">
<form action="#" name="form1" method="post">
   <div class="txt_field">
   <input type="text" title="Quiz Title" required="" placeholder="Quiz Title">
     <span></span>
    <label class="quiz-title" for="quiz-title"></label>
    </div>
 <div class="wrapper">
<textarea placeholder="Quiz Description" title="Quiz Description" required></textarea>
</div>
      </form>
  </div>
  <div class="box"> 
  <form action="#" name="form1" method="post">
 <div class="wrapper1">
<textarea placeholder="Question" title="Question" required></textarea>
</div>
      </form>
  </div>
</body>
</html>