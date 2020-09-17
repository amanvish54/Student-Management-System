<?php
session_start();
$con=mysqli_connect("localhost","root","","sirt");
	if($con)
	{   
		$sql="select username,password from admin";
		$res=mysqli_query($con,$sql);
		$dbrec=mysqli_fetch_assoc($res);
		
$_SESSION['uname']=$dbrec['username'];
$_SESSION['pwd']=$dbrec['password'];
}

?>


<html>
<head>
<link href="style.css" rel="stylesheet"/>
<script>
</script>
<br>
<marquee><h1 align="center" id="a1" >STUDENT MANAGEMENT SYSTEM</h1></marquee>

</head>
<body>
<br><br><br><br><hr>
<div align="center">
<ul>
<li><a href="admin.php" title="Home"><b>HOME</b></a></li>
<li><a href="insert.php" title="Create the new Account"><b>CREATE ACCOUNT</b></a></li>
<li><a href="form-update.php" title="Change the information of Account"><b>UPDATE ACCOUNT</b></a></li>
<li><a href="form-delete.php" title="Delete the Account"><b>DELETE</b> </a></li>
<li><a href="logout.php"><b>LOGOUT</b></a></li>

</ul>
</div>
<br><hr><br><br><br>
<div>
<h1 style="font-size:40px;color:blue;"><a href="studlist.php" title="All students Data" style="color:blue;">STUDENT LIST</a></h1>
</div>



</body>
</html>