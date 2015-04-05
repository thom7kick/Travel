<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<script type="text/javascript">
function validateForm()
{
var x=document.forms["login"]["username"].value;
if (x==null || x=="")
  {
	$("#diverr").empty().append("Please enter both username and password!");
  	return false;
  }
var x=document.forms["login"]["password"].value;
if (x==null || x=="")
  {
  alert("Password must be filled out");
  return false;
  }
}
</script>
<!DOCTYPE html>
<html>
    <head>
    <style type="text/css">    
    </style>
        <meta charset="utf-8" />
        <title>Login</title>
        <!-- Our CSS stylesheet file -->
        <link rel="stylesheet" href="styles.css" />
    </head>
<body>
<div id="header">
</div>
<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>';
			}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
</div>


		<div id="formContainer">

			<form id="login" name="login" method="post" action="login.php" style="height: 222px;" onsubmit="return validateForm()">

				
				<h1>
				<div style="width: 190px; float:left; margin:0px 60px;">Login your account!
				</div>
				<div style="width: 60px; float:right;">
				</div>
				<div class="clearfix"></div>
				</h1>
				<input type="text" name="Email" id="loginEmail" placeholder="Username" style="width: 240px;" />

				<input type="password" name="pwd" id="loginPass" placeholder="Password" style="width: 240px;" />

				<input type="submit" id="buttonxxxx" name="submit" value="Login" />
				
			</form>			

		</div>
		

	<div id="footer">
		&copy 2015 Safaritrek. All rights reserved.</a>
	</div>    
</body>

</html>



