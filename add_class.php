<?php
require("connectdb.php");
require("header.php");
	if($_SESSION["Role"] == '0')
{
	echo "<center><br><br><div class='msg'>You are not authorized to access this page</div></center>";
	die();
}?>
<html>
<body>		  
<br>
<div class="container">
	<div class="row ">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<center><div class="h">Add Students Info</div>
<form action="" method="POST" enctype="multipart/form-data">
<input type="file" name="f"style="margin-top:20px;width:270px;" /><br>(.csv only)
<select name="dept" class="form-control" style="margin-top:13px;width:270px;">
<option value="cse" >CSE</option>
<option value="ece">ECE</option>
<option value="it">IT</option>
<option value="eie">EIE</option>
</select>
<select name="year" class="form-control" style="margin-top:13px;width:270px;">
<option value="first_year" >First Year</option>
<option value="second_year">Second Year</option>
<option value="third_year">Third Year</option>
<option value="fourth_year">Fourth Year</option>
</select>
<select name="sec" class="form-control" style="margin-top:13px;width:270px;">
<option value="a">A</option><option value="b">B</option>
</select>
<button type="submit" class="btn btn-#e91e63 pink rounded" name="out" value="insert" style="margin-top:13px;"/>Submit</button></center>
<br></div>
		
		</form>

		<div class="col-sm-4"><br></div>
	</div>

</div>
<?php

if(isset($_POST["out"]))
{
	$d=$_POST["dept"];
	$x=$_POST["year"];
	$y=$_POST["sec"];
	$g=$_FILES['f']['name'];
		$table_name=$x."_".$y;
	
	$d=explode(".","$g");
	
	if(!(end($d)=="csv"))
	{
		echo "<script>alert('File Not Supported')</script>";
		die();
	}
	
$sql="create table $table_name (rollno varchar(15) primary key,
name varchar(100),regno varchar(30))";
$result=mysqli_query($con,$sql);
if($result) {
	
	$f=$_FILES['f']['tmp_name'];
	$fp=fopen($f,"r");
	while($ar=fgetcsv($fp))
	{
		
		$sql1="insert into $table_name values('$ar[0]','$ar[1]','$ar[2]')";
		$result=mysqli_query($con,$sql1);
		if($result)
		echo "<script>location.href='update_student.php?msg=Added Successfully'</script>";
		else
		echo "<script>location.href='update_student.php?msg=Not Added'</script>";
	}
	fclose($fp);
}	
}
 ?>