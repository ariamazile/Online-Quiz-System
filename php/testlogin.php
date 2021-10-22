<?php

session_start();	

require("connection.php");
require("function.php");
$msg = '';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

	//something was posted
	$user_name = $_POST['user_name'];
	$password =  $_POST['password'];
	
	if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

		//read from database
		$query = "SELECT * FROM students WHERE username = '$user_name' limit 1";
		$result = mysqli_query($con, $query);


		if ($result) {
			if ($result && mysqli_num_rows($result) > 0) {
				$user_data = mysqli_fetch_assoc($result);
				
				if (password_verify($password, $user_data['password'])) {

					$_SESSION['user_id'] = $user_data['id'];
					$_SESSION['user_name'] = $user_name;
					header("Location: dashboardstudent.html");
					die;
				}
				else {
					$msg = "Wrong Username or Password!";
				}
			}
		}

		$msg = "Wrong Username or Password!";
	} else {
		$msg = "Wrong Username or Password!";
	}
}

?>

<!doctype html>
<html lang="en" dir="ltr" >
    <head>   
<meta charset="utf-8">
<title>Sign In</title>
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
