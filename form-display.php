<html>
<head>
<link href="style.css" rel="stylesheet">
<marquee><h1 align="center" id="a1" >STUDENT MANAGEMENT SYSTEM</h1></marquee>

<p align="right"><a href="admin.html">BACK TO HOME</a></p>


<?php  
$con=mysqli_connect("localhost","root","","sirt");
if($con)
{
	$sql="select * from Student";
	$res=mysqli_query($con,$sql);
	while($dbrec=mysqli_fetch_assoc($res))
	{
		echo $dbrec['Sno']."<br>";
		echo $dbrec['sname']."<br>";
		echo $dbrec['branch']."<br>";
		echo $dbrec['sem']."<br>";
		echo $dbrec['per']."<br>";
		echo "<hr>";
	}
	mysqli_close($con);
}

?>