<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<script type="text/javascript">
function validateForms() {
	
	var x=document.forms["regs"]["adminpass"].value;
	if (x==null || x==""){
		alert("Admin Password must be filled out");
	  	return false;
	  	}
	var x=document.forms["regs"]["position"].value;
	if (x==null || x==""){
	  	alert("Position must be filled out");
	  	return false;
	  	}
	var x=document.forms["regs"]["regusername"].value;
	if (x==null || x==""){
	 	 alert("Username must be filled out");
	  	return false;
	  	}
	var x=document.forms["regs"]["regpassword"].value;
	if (x==null || x==""){
	  	alert("Password must be filled out");
	  	return false;
	  	}
}
</script>
<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />
        <title>Register</title>
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
			<form id="recover" name="regs" method="post" action="register.php" style="height: 332px;" onsubmit="return validateForms()">
				<h1>
				<div style="width: 60px; float:left;">
				</div>
				<div style="width: 60px; float:left;">
				<a href="index.php" id="flipToLogin" class="flipLink">Back</a>
				</div>
				<div style="width: 208px; float:right;">
				Register a new account!
				</div>
				<div class="clearfix"></div>
				</h1>
				<input type="text" name="firstname" id="firstname" placeholder="First Name" required="required"style="width: 240px;" />
				<input type="text" name="lastname" id="lastname" placeholder="Last Name" required="required"style="width: 240px;" />				
				
				<input type="email" name="Email" id="Email" placeholder="thomas@example.com" required="required" style="width: 240px;" />				
				<input type="password" name="pass" id="password" placeholder="Password" required="required"style="width: 240px;" />				
				<input type="password" name="confirmpass" id="confirmpassword" placeholder="Confirm Password" required="required" style="width: 240px;" />
					
				<input type="submit" id="buttonxxxx" name="submit" value="Register" />
			</form>
			

		</div>
		

	<div id="footer">
		&copy 2015 Safaritrek. All rights reserved.</a>
	</div>    

</body>

</html>



