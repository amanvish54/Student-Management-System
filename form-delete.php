<html>
<head>
<link href="style.css" rel="stylesheet">
<script>
</script>
<marquee><h1 align="center" id="a1" >STUDENT MANAGEMENT SYSTEM</h1></marquee>

<p align="right"><a href="admin.html">BACK TO HOME</a></p>
</head>

<body>
<div>

<form action="form-delete.php" method="post">
<fieldset>
<legend style="font-size:40px;color:blue;text-shadow:1px 1px 1px white;"><B>Delete Account</b></legend>
<table class"td1">
<tr>
<td><b>Enrollment No:</b></td><th><input type="text" name="sno" /></th><th><input type="submit" name="update" value="DELETE"/></th></tr>
</table>
</form>
</fieldset>
</div>
<?php
if(isset($_POST['update']))
{
$a=$_POST["sno"];
$con=mysqli_connect("localhost","root","","sirt");	
if($con)
{

$sql="select * from Student where sno=$a";
$res=mysqli_query($con,$sql);
//echo mysqli_num_rows($res)." rows are affected<br>";
if(mysqli_num_rows($res)>0)
{
		
$sql="delete from student where sno=$a";
	$res=mysqli_query($con,$sql);
	if($res)
	{
		
		echo "<h1 class='hh1'><b>Data deleted successfully</b></h1><br>";
	}
	else 
	{
		$er=mysqli_error($con);
		echo "<h1 class='hh1'>".$er."</h1><br>";
		echo "<h1 class='hh1'>failed to execute query<h1><br>";
	}
}
else 
{
	echo"<h1 class='hh1'>NO SUCH RECORD FOUND</h1><br>";
}
}
}
?>



</body>
</html>