
<?php
	require("connectdb.php");
	require("header.php");
	if($_SESSION["role"] == '0')
{
	echo "<center><br><br><div class='msg'>You are not authorized to access this page</div></center>";
	die();
}
	$a=$_GET["Id"];
	$sql="update login set Status=0 where Id='$a'";
	$res=mysqli_query($con,$sql);
	if($res)
{	echo "<script>location.href='add_teacher.php?msg=Removed Successfully';</script>";
}
else
{
	echo "<script>location.href='add_teacher.php?msg=Not Removed';</script>";
}

?>
