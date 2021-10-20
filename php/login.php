<?php
include "conn/connection.php";
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body>

	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3>LOGIN FORM</h3>

			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
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
