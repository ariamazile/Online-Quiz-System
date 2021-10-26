<?php
include "../conn/connection.php";
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<div style = "margin: ;
    padding: 0;
    text-align: center;
    height: 5% ;
    width: 50% center;
    background-repeat: no-repeat;"> <img src = "../image/um2.jpg" height="300" width="800" > </div>
    
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
					<h3>ADMIN LOGIN FORM</h3>
                        <form action="#" name="form1" method="post">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="username" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">

                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">

                            </div>

                            <button type="submit" name="login" class="btn btn-success btn-block loginbtn">Login</button>
                           

                            <div class="alert alert-danger" id="failure" style="margin-top: 10px; display: none">
                                <strong>Does Not Match!</strong> Invalid Username or Password.
                            </div>
                        </form>
                    </div>
                </div>
			</div>

		</div>   
    </div>

<?php
if(isset($_POST["login"]))
{
    $count=0;
    $res=mysqli_query($link," SELECT * from admin where username='$_POST[username]' and password='$_POST[password]'");

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
    window.location="../admin/header.php"
</script>
        <?php
    }
}  
    ?>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>