<?php
session_start();

if($_SESSION['username'] == "")
{
    header("location:phpforms.php");
}
$username=$_SESSION['username'];
$firstname=$_SESSION['firstname'];
$lastname=$_SESSION['lastname'];
$email=$_SESSION['email'];
$age=$_SESSION['age'];

echo $username;
echo "<br>";
echo $firstname;
echo "<br>";
echo $lastname;
echo "<br>";
echo $email;
echo "<br>";
echo $age;

?>

<br>

<a href="logout.php" >Log-out</a>