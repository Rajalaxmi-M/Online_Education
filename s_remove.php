
<?php
require("connectdb.php");
require("header.php");
	if($_SESSION["role"] == '0')
{
	echo "<center><br><div class='msg'>You are not authorized to access this page</div></center>";
	die();
}?>

<?php
require("connectdb.php");
$subcode=$_GET["subject_code"];

$sql="Delete from subject where subcode='$subcode'";
$result=mysqli_query($con,$sql);

if($result)
	echo "<script>location.href='add_subject.php?msg=Removed Successfully';</script>";
else
	echo "<script>location.href='add_subject.php?msg=Not Removed';</script>";

?>