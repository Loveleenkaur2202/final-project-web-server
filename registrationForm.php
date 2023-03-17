<!DOCTYPE html>
<html>
<head>
	<title>Password Modification Form</title>
	<link href="css/registerFormStyle.css" rel="stylesheet" type="text/css">
    
</head>
<body>
	<br/><br/><br/><br/><br/><br/>
		<form method="post" action="">
			
			<label for="username">Existing Username:</label>
			<input type="text" id="username" name="username" required>
			
			<label for="password">New Password:</label>
			<input type="password" id="password" name="password" required>
			
			<label for="confirm_password">Confirm New Password:</label>
			<input type="password" id="confirm_password" name="confirm_password" required>
			
			<input type="submit" name="modify" value="Modify">
			<input type="submit" name="signin" value="Sign-In">
			
			<?php 
				
				if (isset($_POST['modify'])) {
					
				}
				else if (isset($_POST['signin'])) {
					header("Location: login.php");
					exit();
				}
			?>
			
			<div class="error-message">
				
			</div>
		</form>
	</div>
</body>
</html>