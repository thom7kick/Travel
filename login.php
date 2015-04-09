
<?php
//Start session
session_start();
 
//Include database connection details
require_once('connect.php');
 
//Array to store validation errors
$errmsg_arr = array();
 
//Validation error flag
$errflag = false;
 
/*/Function to sanitize values received from the form. Prevents SQL injection
function clean($str)
	{
		$str = @trim($str);
		if(get_magic_quotes_gpc())
			{
			$str = stripslashes($str);
			}
		return mysqli_real_escape_string($con,$str);
	}*/
 
//Sanitize the POST values
$username = mysqli_real_escape_string($con,$_POST['Email']);
$password = mysqli_real_escape_string($con,$_POST['pwd']);

 
//Create query
$qry="SELECT * FROM users WHERE Email='$username' AND pwd='$password'";
$result=mysqli_query($con,$qry);
 
//Check whether the query was successful or not
if($result) 
{
	
	if(mysqli_num_rows($result) > 0) {
	//Login Successful
	session_regenerate_id();
	$member = mysqli_fetch_assoc($result);
	$_SESSION['SESS_ID'] = $member['UserID'];
	$_SESSION['SESS_FIRST_NAME'] = $member['FName'];
	$_SESSION['SESS_LAST_NAME'] = $member['LName'];
	session_write_close();
	header("location: userview.php");
	exit();
	}
	else {
		//Login failed
		$errmsg_arr[] = 'user name and password not found';
		$errflag = true;
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: logview.php");
		exit();
		}
	}
}
else {
die("Query failed");
}
?>