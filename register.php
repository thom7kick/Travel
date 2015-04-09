<?php
include('connect.php');

/*/Function to sanitize values received from the form. Prevents SQL injection
function clean($str)
	{
		$str = @trim($str);
		if(get_magic_quotes_gpc())
			{
			$str = stripslashes($str);
			}
		return mysql_real_escape_string($str);
	}*/
//Sanitize the POST values
$Email = mysqli_real_escape_string($con,$_POST['Email']);
$pass = mysqli_real_escape_string($con,$_POST['pass']);
$confirmpass = mysqli_real_escape_string($con,$_POST['confirmpass']);
$firstname= mysqli_real_escape_string($con,$_POST['firstname']);
$lastname = mysqli_real_escape_string($con,$_POST['lastname']);



mysqli_query($con,"INSERT INTO users (Email, pwd, Creation_Date, FName, LName)
VALUES ('$Email','$pass',NOW(),'$firstname','$lastname')");
header("location: index.php");
?>