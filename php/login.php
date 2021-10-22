<?php
include "connection.php";
?>

<!doctype html>

<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="login.css">

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
             <input  type="text" title="Please enter you username" required="" value="" name="username" id="username" class="form-control"> 
             <span></span>
             <label>Username</label>
         </div> 
         <div class="txt_field">
            <input type="password" title="Please enter your password" required="" value="" name="password" id="password" class="form-control">
            <span></span>
            <label>Password</label>
        </div>
        <input type="submit" value="Sign In">

        </form>
    </div>
<?php
if(isset($_POST["login"]))
{
    $count=0;
    $res=mysqli_query($link,"select * from students where username='$_POST[username]' and password='$_POST[password]'");

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
<!--<script type="text/javascript">-->
    header('Location: header.php');
</script>
        <?php
    }
}  
    ?>


</body>

</html>
