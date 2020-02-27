<?php
if(isset($_GET['username']) || isset($_GET['password']))
{
	$name = $_GET['username'];
	$password = $_GET['password'];
/*	echo $name;
	echo '<br>';
	echo $password;
*/	
	if($password == "mayor" && $name == "pusa" )
	{
		header("LOCATION: WD/php/forms.php");
	}
	else
	{
		?><script>
			alert("incorrect password");		
		</script>
<?php	
	}
}
//echo $_SERVER['PHP_SELF'];
//echo '<br>';
//echo $_SERVER['SERVER_NAME'];
//echo '<br>';
//echo $_SERVER['HTTP_HOST'];
//echo '<br>';
//echo $_SERVER['SCRIPT_NAME'];
//echo '<br>';

?>

<html>
<head>
	<title>PHP Forms</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF']?>" method="get">
	<input type="text" name="username" placeholder="Username"><br>
	<input type="password" name="password" placeholder="password"><br>
	<input type="submit" value="submit">
	</form>

</body>
</html>