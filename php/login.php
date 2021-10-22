<?php
require_once "connection.php";
?>
<!doctype html>
<html lang="en" dir="ltr" >
    <head>   
<meta charset="utf-8">
<title>Log In Form</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div style = "margin: 0;
    padding: 0;
    text-align: center;
    height: 100%;
    width: 100%;
    background-repeat: no-repeat;"> <img src = "../image/um2.jpg" height="600" width="900" > </div>

    <div class="center">
        <h1>Sign In</h1>
        <form method ="POST">
         <div class="txt_field">
             <input type="text" required>
             <span></span>
             <label>Username</label>
         </div> 
         <div class="txt_field">
            <input type="password" required>
            <span></span>
            <label>Password</label>
        </div>
        <input type="submit" value="Sign In">

        </form>
    </div>
</body>
</html>
<?php
if(isset($_POST["login"]))
{
    $count=0;
    $res=mysqli_query($link," SELECT * from students where username='$_POST[username]' and password='$_POST[password]'");

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
