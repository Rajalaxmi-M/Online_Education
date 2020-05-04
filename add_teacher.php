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
<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
				<center><div class='h'>Add Faculty</div>
				<form action="" method="post" autocomplete="off">
				<input type="text" name="id" id="1" class="form-control" placeholder="ID"  style="margin-top:20px;width:270px;" required />
				<input type="text" name="name" id="2" class="form-control" placeholder="Name"  style="margin-top:13px;width:270px;" required/>
				<input type="text" name="dept" id="3" class="form-control" placeholder="Department"  style="margin-top:13px;width:270px;" required/>
				<button type="submit" class="btn btn-#e91e63 pink rounded" value="Add" name="sub"  style="margin-top:13px"/>Submit</button></center>
<br>
					
		</div>	</form>	

		<div class="col-md-4"><br></div>
	</div>

</div>


<?php
//include('msg.php');
$sql1="select * from login where role=0 and status=1";
	$res1=mysqli_query($con,$sql1);
	if(mysqli_num_rows($res1) > 0)
	{
		echo "<div class='container'>
		<div class='row'>
		<div class='col-md-3'></div>
		<div class='col-md-6'>
		
		<center><div class='h'>Faculty Info</div></center>

		<table style='margin-top:20px'  class='table table-bordered '>
		";
			echo"<tr  class='t'>
			<th>ID </th>
			<th>Name </th>
			<th>Department </th>
			<th>Remove Faculty </th>
			</tr>";

		while($row=mysqli_fetch_array($res1))
		{
		
			echo "<tr>";
			echo "<td>$row[0]</td>";
			echo "<td>$row[1]</td>";
			echo "<td>$row[5]</td>";
			echo "<td><a style='text-decoration:none' href=f_remove.php?Id=$row[0]>Remove</a></td>";
			echo "</tr>";
		}
		echo "</table>";
	}

	else	
		echo "<br><center><div class='h'>No Records Found</div></center>";
	echo "</div>		
	<div class='col-md-3'>	</div>
	</div></div>";
	

if(isset($_POST['sub']))	
{
$id=$_POST["id"];
$name=$_POST["name"];
$dept=$_POST["dept"];
$pass=md5("$id");
$role=0;
$status=1;
$sql="insert into Login values('$id','$name','$pass','$role','$status','$dept')";
$res=mysqli_query($con,$sql);
if($res)
{	

		echo "<br><script>location.href='add_teacher.php?msg=Added Successfully'</script>";
}
else
{
		echo "<script>location.href='add_teacher.php?msg=Not Added'</script>";
}
}?>
