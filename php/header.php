<?php
	
	session_start();

	if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== false) {
		header('location: login.php');
		exit;
	}
?>


<!doctype html>
<html lang="en" dir="ltr" >
    <head>   
<meta charset="utf-8">
<title>Dashboard</title>
<link rel="stylesheet" href="css/dashboard.css">
</head>
<body> 
<nav>
    <label class="Name"> <a href="#" style="color: white;">Student Name</a></label>
    <ul>
        <li><a class="active" href="#"> Home </a> </li>
        <li><a href="#"> Quiz </a> </li>
        <li><a href="#" class="button" > Log out </a> </li>
    </ul>
</nav>
</body>
</html>