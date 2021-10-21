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
    <!--<div class="center">
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				

			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="#" name="form1" method="post">
                            <div class="form-group">
                                <label class="control-label" for="username"></label>
                                <input  type="text" placeholder="username" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">

                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password"></label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">

                            </div>

                            <button type="submit" name="sign in" class="Signinbtn">Sign In</button>

                            <div class="alert alert-danger" id="failure" style="margin-top: 10px; display: none">
                                <strong>Does Not Match!</strong> Invalid Username or Password.
                            </div>
                        </form>
                    </div>
                </div>
			</div>

		</div>   
    </div>-->
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
<script type="text/javascript">
    window.location="demo.php"
</script>
        <?php
    }
}  
    ?>


</body>

</html>
