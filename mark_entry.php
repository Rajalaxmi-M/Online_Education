<?php
require("connectdb.php");
require("header.php");
//include("msg.php");
if($_SESSION["role"] == '1')
{
	echo "<center><br><br><div class='msg'>You are not authorized to access this page</div></center>";
	die();
}
$a=$_GET["t"];
?>
<html lang="en">
<body>

<div class="container"><br>
<center><div class='h'>Student Information</div><br>

<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
<table class='table table-bordered '>
<tr class='t'>
<th>Register Number</th>
<th>Name</th>
<th>RollNo</th>
<th>Entry</th>
<?php
$sql1="select * from $a";
$res=mysqli_query($con,$sql1);
while($row=mysqli_fetch_array($res))
{
	
	
	echo"<tr>";
	echo "<td>$row[2]</td>";
	echo "<td>$row[1]</td>";
	echo "<td>$row[0]</td>";
	echo "<td><button type='submit' class='btn btn-#e91e63 pink rounded' 
	data-toggle='modal' data-target='#basicExampleModal'>Enter marks</button></td>";
	echo"</tr>";
	}
?>
		</table>
		</div>
		<div class="col-sm-2">
		</div>
</div>
	<br></br>
</div>





<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"  w-100 text-center class="pt-2" 
		style="font-family : Imprint MT Shadow;
	font-size : 23px;
	font-weight : bold;
	color : #4c054c;">Exam Report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <center><select name="sub" class="form-control" style="width:270px;" >
<option value="u1">Internet Programming</option>
<option value="u2">Mobile Computing</option>
<option value="u3">Compiler Design</option>
</select></center>
<div class="container">
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8">
<center><table class='table' align="center">	
<tr><th>Unit-1</th>
<th>:</th>
<th><input class="input" type="number" class="form-control" name="1" required style="border: 1px solid black;border-color:lightskyblue;">
</input></th></tr>
<tr><th>Unit-2</th>
<th>:</th>
<th><input class="input" type="number" class="form-control" name="2" required style="border: 1px solid black;border-color:lightskyblue;">
</input></th></tr>
<tr><th>Unit-3</th>
<th>:</th>
<th><input class="input" type="number" class="form-control" name="3" required style="border: 1px solid black;border-color:lightskyblue;">
</input></th></tr>
<tr><th>Unit-4</th>
<th>:</th>
<th><input class="input" type="number" class="form-control" name="4" required style="border: 1px solid black;border-color:lightskyblue;">
</input></th></tr>
<tr><th>Unit-5</th>
<th>:</th>
<th><input class="input" type="number" class="form-control" name="5" required style="border: 1px solid black;border-color:lightskyblue;">
</input></th></tr>
</table></center></div></div>
</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-#e91e63 pink rounded" onclick="alerting();">Submit</button>
      </div>
    </div>
  </div>
</div>
<script>
function alerting()
{
	alert("Report has been submitted");
}
</script>		