<?php
if(isset($_POST['login']))
{
	$un = $_POST['Username'];
	$pw = $_POST['Password'];
	
	if($un=="pusa" && $pw=="mayor")
	{
        header("location:../html/resume.html");
        exit();
	}
	else
	{
		echo "<script>alert('incorrect password')</script>";
	
	}
}
?>

<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="../css/style2.css">
 <title>Login Page</title>
</head>

 <body>
	<div id="login-box">
	<img src="../images/Cat03.jpg" alt="Pusa ni Yorme" width="100" height="100" class="img">
		<h1>Pusa ni Yorme</h1>			

			<form method="post">
			<p>Username</p>
				<input type="text" name="Username" placeholder="Username" id="userName" autocomplete="off" required/>
			<p>Password</p>
				<input type="password" name="Password" placeholder="Password" id="password" required>
				<input type="submit" name="login" value="Login" />
			</form>
	</div>
  </body>

</html>


