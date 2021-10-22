<?php
require_once "connection.php";
?>

<div style = "margin: 0;
    padding: 0;
    text-align: center;
    height: 100%;
    width: 100%;
    background-repeat: no-repeat;"> <img src = "img/um.jpeg" height="600" width="900" > </div>
    
<!doctype html>
<html lang="en" dir="ltr" >
    <head>   
<meta charset="utf-8">
<title>User Login</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div style = "margin: 0;
    padding: 0;
    text-align: center;
    height: 100%;
    width: 100%;
    background-repeat: no-repeat;"> <img src = "img/um2.jpg" height="600" width="900" > </div>

    <div class="center">
        <h1>Sign In</h1>
        <form action="#" name="form1" method="post">
         <div class="txt_field">
             <input for="username" name="password" id="username"type="text" required>
             <span></span>
             <label for="username">Username</label>
         </div> 
         <div class="txt_field">
            <input for="password" name="password" id="password"type="password" required>
            <span></span>
            <label for="password" >Password</label>
        </div>
        <input class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="Sign In">

        <div class="alert alert-danger" id="failure" style="margin-top: 10px; display: none">
            <strong>Does Not Match!</strong> Invalid Username or Password.
        </div>
        </form>
    </div>
</body>
</html>

<?php
if(isset($_POST["login"]))
{
    $count=0;
    $res=mysqli_query($link," SELECT * from students where username='$_POST[username]' && password='$_POST[password]'");

    $count=mysqli_num_rows($res);

    if($count==0)
    {

        ?>
        <script type="text/javascript">
             document.getElementById("failure").style.display="block";
        </script>
        <?php

    }
    else{
        
        ?>
<script type="text/javascript">
    window.location="header.php"
</script>
        <?php
    }
}  
    ?>
