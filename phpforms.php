<?php
session_start();
if($_SESSION)
{
	header("location:forms.php");
}
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['firstname'] = $_POST['firstname'];
	$_SESSION['lastname'] = $_POST['lastname'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['age'] = $_POST['age'];

	header("location:forms.php");
}

?>

<html>
<head>
<title>PHP Forms</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
	<br>
	<input type="text" name="username" placeholder="UserName">
	<br>
	<input type="text" name="firstname" placeholder="First Name">
	<br>
	<input type="text" name="lastname" placeholder="Last Name">
	<br>
	<input type="text" name="email" placeholder="E-mail">
	<br>
	<input type="text" name="age" placeholder="Age">
	<br>
	<input type="password" name="password" placeholder="Password">
	<br>
	<input type="submit" value="Login">
	<br>	

</body>
</html>