<html>
<head> 
<link href="style.css" rel="stylesheet">
<script>
function validate()
{
var uname=document.getElementById("a1");
var pwd=document.getElementById("a2");
var sp1=document.getElementById("b1");
var sp2=document.getElementById("b2");
var status=true;
sp1.style.visibility="hidden";
sp2.style.visibility="hidden";
if(uname.value=="")
{
sp1.innerHTML="username is required";
sp1.style.visibility="visible";
sp1.style.color="red";

status=false;
}
if(pwd.value=="")
{
sp2.innerHTML="password is required";
sp2.style.visibility="visible";
sp2.style.color="red";
status=false;
}

return status;

}
</script>
<marquee><h1 align="center" id="a1" >STUDENT MANAGEMENT SYSTEM</h1></marquee>

</head>
<body>
<br><br><br>
<div id="d1"  >
<form action="login.php" name="frm" onsubmit="return(validate())" method="get">
<fieldset >
<legend><b style="font-size:40px;">Admin Login</<b></legend>
<table>
<tr>
<td><b>USER NAME:</b></td><th><input type="text" id="a1" name="uname" placeholder="Enter Username"/></th><td><span id="b1"></span></td>
</tr>
<tr>
<td><b>PASSWORD:</b></td><th><input type="password" id="a2" name="pwd" placeholder="Enter Password"/></th><td><span id="b2"></span></td>
</tr>
<tr>
<th><th><input type="submit" name="submit" value="LOGIN"/></th></th>
</tr>

</table>
</fieldset>
</form>

</div>


<?php
if(isset($_GET['submit']))
{
	
	$a1=$_GET['uname'];
	$a2=$_GET['pwd'];
	$con=mysqli_connect("localhost","root","","sirt");
	if($con)
	{   
		$sql="select username,password from admin";
		$res=mysqli_query($con,$sql);
		$dbrec=mysqli_fetch_assoc($res);
		
		if($dbrec['username']==$a1 && $dbrec['password']==$a2)
		{
			header('Location:admin.html');
		}
		else
		{  
			
			header('Location: error.php');
		}
	}
	else 
	{
		$er=mysqli_error($con);
		echo $er;
		die();
	}
	mysqli_close($con);
}
	

?>

</body>
</html>

