<html>
<head>
	<title> My First PHP Files </title>
</head>
<body>

<?php 
$name = "kimGie JepwilLean";
$num = 10;
$arr = ['jep', 'wil', 'kim', 'mayor'];

echo $name;
echo "<br><br>"; 
echo $num;
echo "<br><br>"; 

for($i = 0; $i < 10; $i++){
	echo $i;
	echo "<br>";
}
echo "<br>"; 
for($i = 0; $i <= 3; $i++){
	echo $arr[$i];
	echo "<br>";
}
echo "<br>"; 

$i=9;

for($x=1; $x<=$i; $x++)
{
	for($y=1; $y<=$i; $y++)
	{
		if($y==1 || $x==9)
		{
			echo "* ";
		}
		else
		{
			echo " ";
		}
		
	
	}
echo "<br>";
}
echo "<br>";
for($a=1; $a<=$i; $a++)
{
	for($s=1; $s<=$i; $s++)
	{
		if($a==1 || $s==1 || $a==5 || $s==9 )
		{
			echo "* ";
		}
		else
		{
			echo ".. ";
		}
		
	
	}
echo "<br>";
}

?>

</body>
</html>