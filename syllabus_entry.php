<?php
require("connectdb.php");
require("header.php");
if($_SESSION["role"] == '1')
{
	echo "<center><br><br><div class='msg'>You are not authorized to access this page</div></center>";
	die();
}
$a=$_GET["t"];	
?>
<html>

<body>	
<br>	  
<div class="container">
<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
				<center><div class='h'>Add Syllabus for <?php echo "$a"?></div>
				<form action="" method="post" autocomplete="off">
				<input type="text" name="num" id="1" class="form-control" placeholder="Unit Number"  style="margin-top:20px;width:270px;" required />
				<input type="text" name="name" id="2" class="form-control" placeholder="Unit Name"  style="margin-top:13px;width:270px;" required/>
				<input type="textarea" name="syllabus" id="3" class="form-control" placeholder="Syllabus"  style="margin-top:13px;width:270px;" required/>
				<button type="submit" class="btn btn-#e91e63 pink rounded" value="Add" name="sub"  style="margin-top:13px"/>Submit</button></center>
<br>
					
		</div>	</form>	

		<div class="col-md-4"><br></div>
	</div>

</div>


<?php

//include("msg.php");
if(isset($_POST['sub']))	
{
$num=$_POST["num"];
$name=$_POST["name"];
$syllabus=$_POST["syllabus"];
$sql="create table $a (unitno int(1) primary key,unitname varchar(100),syllabus varchar(300))";
$result=mysqli_query($con,$sql);
if($result) {
	$sql1="insert into $a values('$num','$name','$syllabus')";
		$result=mysqli_query($con,$sql1);
		if($result)
		echo "<script>location.href='syllabus_entry.php?msg=Added Successfully'</script>";
		else
		echo "<script>location.href='syllabus_entry.php?msg=Not Added'</script>";
}
echo "<div class='container'>
		<div class='row'>
		<div class='col-sm-3'></div>
		<div class='col-sm-6'>
<center><div class='h'>Syllabus Details</div></center>
		<table style='margin-top:20px' border=1 class='table table-bordered '>
		<tr class='t'>
<th>Unit Number</th>
<th>Unit Name</th>
<th>Syllabus</th>
<th>Remove</th>
</tr>";
echo"<tr>";
	echo "<td>$num</td>";
	echo "<td>$name</td>";
	echo "<td>$syllabus</td>";
	echo "<td><a style='text-decoration:none' href=sy_remove.php?unitno=$num&&name=$a>Remove</a></td>";
	echo"</tr>";
}?>

