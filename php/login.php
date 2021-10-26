<?php
require_once "../conn/connection.php";
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin LogIn</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<div style = "margin: 0;
    padding: 10;
    text-align: center;
    height: 10% ;
    width: 50% center;
    background-repeat: no-repeat;"> <img src = "../image/um2.jpg" height="700" width="1000" > </div>
    
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
			</div>
            <div class= "center">
            <h1>Sign In</h1>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="#" name="form1" method="post">
                            <div class="txt_field">
                            <input type="text" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                            <span></span>
                            <label class="userlabel" for="username">Username:</label>
                             </div>
                                <div class="txt_field">
                                <input type="password" title="Please enter your password"  required="" value="" name="password" id="password" class="form-control">
                                <span></span>
                                <label class="passlabel" for="password">Password:</label>
                            </div>
                            <button type="submit" name="login" class="btn btn-success btn-block loginbtn">Sign In</button>
                            <div class="alert alert-danger" id="failure" style="margin-top: 10px; display: none">
                                <strong>Does Not Match!</strong>  <p>Invalid Username or Password.</p>
                            </div>
                        </form>
                    </div>
                </div>
			</div>

		</div>   
    </div>
    </div>
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
    <script src="..//bootstrap.min.js"></script>

</body>

</html>
