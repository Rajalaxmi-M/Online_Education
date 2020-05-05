<?php
require("connectdb.php");
require("header.php");
	if($_SESSION["role"] == '0')
{
	echo "<center><br><br><div class='msg'>You are not authorized to access this page</div></center>";
	die();
}
$a=$_GET["classname"];
$sql="drop table $a";
$result=mysqli_query($con,$sql);
if($result)
{
	echo"<script>location.href='add_class.php?msg=Removed Successfully';</script>";
}
else
	echo"<script>location.href='add_class.php?msg=Not Removed'</script>";
?>