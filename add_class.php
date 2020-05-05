<?php
require("connectdb.php");
require("header.php");
	if($_SESSION["role"] == '0')
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
//include('msg.php');
$new=array("first_year_a_cse","first_year_b_cse","second_year_a_cse","second_year_b_cse",
"third_year_a_cse","third_year_b_cse","fourth_year_a_cse","fourth_year_b_cse,
first_year_a_ece","first_year_b_ece","second_year_a_ece","second_year_b_ece",
"third_year_a_ece","third_year_b_ece","fourth_year_a_ece","fourth_year_b_ece",
"first_year_a_it","second_year_a_it","third_year_a_it","fourth_year_a_it"
);
$x="show tables";
$y=mysqli_query($con,$x);
if(mysqli_num_rows($y) > 0)
	{
		$flag =1;
	while($row=mysqli_fetch_array($y))
	{
	if(in_array($row[0],$new))
		{
			if($flag == 1)
			{
				echo "<div class='container'>
	<div class='row'>
	<div class='col-md-3'></div>
	<div class='col-md-6'>
<center><div class='h'>Class Details</div></center>
	<table style='margin-top:13px' border=1 class='table table-bordered '>";		
	echo"<tr class='t'>
		<th>Class_Name </th>
		<th>Section </th>
		<th>Department </th>
		
		<th>Remove_Student</th>
		</tr>";
			}
			
			echo "<tr>";
		$b=explode("_",$row[0]);
		echo "<td>$b[0]_$b[1]</td>";
		echo "<td>$b[2]</td>";
		echo "<td>$b[3]</td>";
		//<th>View_Student</th>echo "<td><a style='text-decoration:none' href=stud_view.php?classname=$b[0]_$b[1]_$b[2]_$b[3]>View</a></td>";
		echo "<td><a style='text-decoration:none' href=c_remove.php?classname=$b[0]_$b[1]_$b[2]_$b[3]>Remove</a></td>";
		echo "</tr>";
		$flag++;
		}
		
	}
		
		echo "</table>";
	}
	if($flag==1)	
		echo "<br><center><div class='h'>No Records Found</div></center>";
	echo "</div>		
	<div class='col-sm-3'>	</div>
	</div>";
if(isset($_POST["out"]))
{
	$d=$_POST["dept"];
	$x=$_POST["year"];
	$y=$_POST["sec"];
	$g=$_FILES['f']['name'];
		$table_name=$x."_".$y."_".$d;
	
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
		echo "<script>location.href='add_class.php?msg=Added Successfully'</script>";
		else
		echo "<script>location.href='add_class.php?msg=Not Added'</script>";
	}
	fclose($fp);
}	
}
 ?>
