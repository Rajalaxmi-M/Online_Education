<?php
require "connectdb.php";
require "header.php";
if($_SESSION["role"] == '1')
{
	echo "<center><br><br><div class='msg'>You are not authorized to access this page</div></center>";
	die();
}
?>

<br><center><div class="h"> Subjects</div>

<?php
//include("msg.php");
$id=$_SESSION['id'];
$sql="select * from subject";
$res=mysqli_query($con,$sql);
echo "<br>";
if(mysqli_num_rows($res) > 0)
	{
	
	while($rows=mysqli_fetch_array($res))
		{	
			//$rows[2] = str_replace("_"," ",$rows[2]);
			$a = strtoupper($rows[1])."-".strtoupper($rows[2]);
		
			//echo "<br>";
			echo"
			<center><font size=4>
			<a style='text-decoration:none;font-family:cambria'; href=syllabus_entry.php?t=$rows[1]>$a</a>
			</font></center><br>";
		
	}
	}
	else 
		echo"<center><div class='msg'>No Records Found</div></center>";
?>      