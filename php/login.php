<?php
/*if(isset($_POST['login']))
{
	$un = $_POST['Username'];
	$pw = $_POST['Password'];
	
	if($un=="pusa" && $pw=="mayor")
	{
        header("location:../php/about.php");
        exit();
	}
	else
	{
		echo "<script>alert('incorrect password')</script>";
	
	}
}*/
session_start();
if($_SESSION)
{
	header("location:about.php");
}
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['password'] = $_POST['password'];

	$username = $_SESSION['username'];
	$password = $_SESSION['password'];

	if($username == "pusa" && $password == "mayor"){
		header("location:about.php");
	}else
	?>
<script>
alert("Invalid credentials");
</script>
<?php
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

        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <p>Username</p>
            <input type="text" name="username" placeholder="Username" id="userName" autocomplete="off" required />
            <p>Password</p>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <input type="submit" name="login" value="Login" />
        </form>
    </div>
</body>

</html>