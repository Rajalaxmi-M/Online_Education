<?php
require("connectdb.php");
require("header.php");
	if($_SESSION["role"] == '0')
{
	echo "<center><br><br><div class='msg'>You are not authorized to access this page</div></center>";
	die();
}?>

<html>
<body><br>
<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
				<center><div class='h'>Add Subject</div>

<form action="" method="post" autocomplete="off">										
<input type="text" name="subcode"class="form-control" placeholder="Subject Code" style="margin-top:20px;width:270px;" required/>
<input type="text" name="subname"class="form-control" placeholder="Subject Name"style="margin-top:13px;width:270px;"required/>
<select name="dept" required class="form-control" style="margin-top:13px;width:270px;">
  <option value="cse" >CSE</option>
  <option value="it">IT</option>
  <option value="ece">ECE</option>
  </select>
<select name="year" required class="form-control" style="margin-top:13px;width:270px;">
  <option value="first_year" >First year</option>
  <option value="second_year">Second year</option>
  <option value="third_year">Third year</option>
  <option value="fourth_year">Fourth year</option></select>
<button type="submit" class="btn btn--#e91e63 pink rounded" name="out" value="Insert" style="margin-top:13px" />Submit</button></center><br>


</div>
					
		</form>

		<div class="col-sm-4"><br></div>
	</div></div>
<?php
require("connectdb.php");  
//include('msg.php');
if(isset($_POST["out"]))							
{
	$subcode=$_POST["subcode"];
	$subname=$_POST["subname"];
	$dept=$_POST["dept"];
	$year=$_POST["year"];
	$sql="insert into subject values('$subcode','$subname','$year','$dept')";
$res=mysqli_query($con,$sql);

if($res)
{	

		echo "<br><script>location.href='add_subject.php?msg=Added Successfully'</script>";
}
else
{
		echo "<script>location.href='add_subject.php?msg=Not Added'</script>";
}}
$sql1="select * from subject";                         
$res=mysqli_query($con,$sql1);
if(mysqli_num_rows($res) > 0)
{
echo "<div class='container'>
		<div class='row'>
		<div class='col-sm-3'></div>
		<div class='col-sm-6'>
<center><div class='h'>Subject Details</div></center>
		<table style='margin-top:20px' border=1 class='table table-bordered '>
		<tr class='t'>
<th>Subject Code</th>
<th>Subject Name</th>
<th>Year</th>
<th>Department</th>
<th>Remove</th>
</tr>";

while($row=mysqli_fetch_array($res))
{
	echo"<tr>";
	echo "<td>$row[0]</td>";
	echo "<td>$row[1]</td>";
	echo "<td>$row[2]</td>";
	echo "<td>$row[3]</td>";
	echo "<td><a style='text-decoration:none' href=s_remove.php?subject_code=$row[0]>Remove</a></td>";
	echo"</tr>";

}
echo"</table>";
}
else
		echo "<center><div class='msg'>No Records Found</div></center>";
	echo "</div>		
	<div class='col-sm-3'>	</div>
	</div>";

?>
