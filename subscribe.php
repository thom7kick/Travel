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

mysqli_query($con,"INSERT INTO visitors (Email)
VALUES ('$Email')");
header("location: index.php");


?>