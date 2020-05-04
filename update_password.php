<?php
require("connectdb.php");
require "header.php";
?>

<html>
<body><br>		  
<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<center><div class='h'>Update Password</div>
				<form method="post" action="">
					<input type="password" name="newpwd" id="newpwd" class="form-control" placeholder="New password" style="margin-top:20px;width:270px;" required/>
					<input type="password" name="confpwd" id="confpwd" class="form-control" placeholder="Confirm password" style="margin-top:13px;width:270px;" required/>
					<b><button type="submit" class="btn btn-#e91e63 pink rounded" name="h" value="Change" style="margin-top:13px;color:white;" 
					/>Submit</button></b></center><br>
					
				
			</div></form>
	

		<div class="col-sm-4"><br></div>
	</div>
	</div>
<?php
$id=$_SESSION['id'];
//include('msg.php');
if(isset($_POST["h"]))
{
	
$a=md5(($_POST["newpwd"]));
$b=md5(($_POST["confpwd"]));
if($a==$b)
{
	$sql="update  Login set Password='$b' where id=$id";
	$res=mysqli_query($con,$sql);
	if($res)
	{
		echo "<script>location.href='update_password.php?msg=Password Changed'</script>";
	}
	else
		echo mysqli_error($con);

	}
else
		echo "<script>location.href='update_password.php?msg=Password Not Changed'</script>";
}
?>