<html>
<head>
<link href="style.css" rel="stylesheet">
<h1>STUDENT MANAGEMENT SYSTEM</h1>
<p align="right"><a href="admin.html">BACK TO HOME</a></p>
<style>
table{

border-color:red;
}
th
{
	text-shadow:0px 0px white;
}

</style>

<?php  
$con=mysqli_connect("localhost","root","","sirt");
if($con)
{   echo "<h1>Student List<h1><br>";
	$sql="select * from Student";
	$res=mysqli_query($con,$sql);
	echo "<table border='2' align='center'><tr><th>Enrollment No.</th><th>Student Name</th><th>Branch</th><th>Semester</th><th>Percentage</th></tr>";
	while($dbrec=mysqli_fetch_assoc($res))
	{
		echo "<tr>";
		echo "<th>".$dbrec['Sno']."</th>";
		echo "<th>".$dbrec['sname']."</th>";
		echo "<th>".$dbrec['branch']."</th>";
		echo "<th>".$dbrec['sem']."</th>";
		echo "<th>".$dbrec['per']."</th>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_close($con);
}

?>