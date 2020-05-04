<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  	<style>
			input[type=text], select 
			{
   				width: 82%;
    			padding: 8px 10px;
    			margin: 8px 0;
    			display: inline-block;
    			border: 1px solid #ccc;
    			border-radius: 6px;
    			box-sizing: border-box;
			}
			input[type=password], select 
			{
   				width: 82%;
    			padding: 8px 10px;
    			margin: 8px 0;
    			display: inline-block;
    			border: 1px solid #ccc;
    			border-radius: 6px;
    			box-sizing: border-box;
			}
			input[type=submit] , input[type=reset]	{
    			width: 82%;
    			color: white;
    			padding: 9px 10px;
   				margin: 8px 0;
  				border: none;
   				cursor: pointer;
			}								
		</style>
 
</head>
	<body style="background-color:#330033;"><br><br><br>
		<br><br><br><br><br><br>
		<table width="350" height="320" align="center" style="background-color: #FFFFFF;border-radius:10px;">
			<tr>
				<td>
					<center><font size="5" color="#330033" face="Imprint MT Shadow">Online Education Management System</font><br><br>
					<form action="" method="post">
						<input type="text" name="uname" id="uname" placeholder="UserId..." required /><br>
						<input type="password" name="pw" id="pw" placeholder="Password..." required /><br>
						<input type="submit" name="login" value="Sign In" style="background-color: #ef3071;" /><br>
						<input type="reset" name="res" value="Reset" style="background-color: #6600cc;" /><br>
					</form>
					<?php
						if(isset($_GET['msg']))
						{
							echo "<div style='margin-top:8px;'><font size='4' color='#330033' face='Imprint MT Shadow'>".$_GET['msg']."</font></div>";
						}
					?>
					</center>
				</td>
			</tr>
		</table>
	</body>
</html>

<?php
session_start();
require("connectdb.php");
if(isset($_POST['login']))	
{
$i=$_POST["uname"];
$p=md5($_POST["pw"]);

$sql="select * from Login where id='$i'and password='$p' and status='1'";
$res=mysqli_query($con,$sql);
$no=mysqli_num_rows($res);
if($no==1)
{	
		$row=mysqli_fetch_array($res);
		$_SESSION['id']=$row['id'];
		
		$_SESSION['role']=$row['role'];
		
		echo"<script>location.href='home.php';</script>";	
	
}
else
{
		echo"<script>location.href='home.php';</script>";	
	}
}

?>