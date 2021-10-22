<?php

require("connection.php");



function check_login($con)
{

	if(isset($_SESSION['user_id']))
	{

		$id = $_SESSION['user_id'];
		$query = "select * from students where student_id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: testlogin.php");
	die;

}


function getUsersData($con, $user_name)
{
	// $id = getId($con, $idRaw);
	$array = array();
	$query = mysqli_query($con, "SELECT * FROM students WHERE username='.$user_name.'");
	// $query = mysqli_query($con, "SELECT * FROM users WHERE user_name='{$user_name}'");
	while ($row = mysqli_fetch_assoc($query)) 
	{
		//  $array['id'] = $row['id']; 

		//  echo "{$array['id']}";
		 $array['user_id'] = $row['user_id'];
		//   echo "{$array['user_id']}";n
		//  $array['user_name'] = "sadfasdasdasdasd";
		 $array['user_name'] = $row['user_name'];
		 $array['password'] = $row['password'];

		 
	}
	return $array;
}



function encryptPassword($raw): string {
	return password_hash($raw, PASSWORD_BCRYPT);
}



function isBlank(string $input): bool
{
    return empty($input) || ctype_space($input);
}

