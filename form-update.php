<html>
<head>
<link href="style.css" rel="stylesheet">
<marquee><h1 align="center" id="a1" >STUDENT MANAGEMENT SYSTEM</h1></marquee>


<script>
</script>
<p align="right"><a href="admin.html">BACK TO HOME</a></p>
</head>
<body>

<div id="d2" width="100%">
<form  action="form-update.php" method="post"  border="3px" >
<fieldset>
<legend style="color:blue;text-shadow:1px 1px 1px white;"><font size="40px">Student Information</font></legend>
<table class="td1"  width="50%" height="90%">
<tr><td>Enrollment No:</td><th><input type="text" name="sno" placeholder="Enter Enrollment Number" /></th></tr>
<tr><td>Student Name:</td><th><input type="text" name="sname" placeholder="Enter Student Name"/></th></tr>
<tr><td>Branch</td><th>
<select name="branch">
	<option>~Select~</option>
	<option>CS</option>
	<option>CE</option>
	<option>ME</option>
	<option>IT</option>
	<option>EX</option>
	<option>EC</option>
	
</select>
</th>
</tr>
<tr>  
<td>Semester</td>
<th>
<select name="sem">
	<option>~select~</option>
	<option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
	<option>5</option>
	<option>6</option>
	<option>7</option>
	<option>8</option>
	
</select>
</th></tr>
<tr>
<td>Percentage</td><th><input type="text" name="per" placeholder="Enter Percentage"/></th></tr>
<tr><th colspan="2"><input type="submit" name="update" value="UPDATE"/></th></tr>
</table>
</fieldset>
</form>
</div><br>
<?php
if(isset($_POST['update']))
{
	
$a=$_POST["sno"];
$b=$_POST["sname"];
$c=$_POST["branch"];
$d=$_POST["sem"];
$e=$_POST["per"];
$con=mysqli_connect("localhost","root","","sirt");
//echo "connection establish";  
if($con)
{   
		
$sql="update student set sname='$b',branch='$c',sem=$d,per=$e where sno=$a";
	$res=mysqli_query($con,$sql);
	if($res)
	{
		
		echo "<h1 class='hh1'>Data updated successfully</h1><br>";
	}
	else 
	{
		$er=mysqli_error($con);
		echo "<h1 class='hh1'>".$er."</h1><br>";
		echo "<h1 class='hh1'>Failed to execute query</h1>";
	}
}
else 
{
	echo"<h1 class='hh1'><b>Failure</b></h1>";
}
}
?>

</body>
</html>