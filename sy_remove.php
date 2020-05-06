
<?php
	require("connectdb.php");
	require("header.php");
	//include("msg.php");
	if($_SESSION["role"] == '0')
{
	echo "<center><br><br><div class='msg'>You are not authorized to access this page</div></center>";
	die();
}
	$b=$_GET["unitno"];
	
	$sql1="delete from $a  where subcode='$b' ";
	$res1=mysqli_query($con,$sql1);
if($res1)
{	echo "<script>location.href='syllabus_entry.php?msg=Removed Successfully';</script>";
}
else
{
	echo "<script>location.href='syllabus_entry.php?msg=Not Removed';</script>";
}


?>
