<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="mdfiles/css/bootstrap.min.css">
	  	<link rel="stylesheet" href="mdfiles/css/mdb.min.css">
	  	<link rel="stylesheet" href="mdfiles/css/style.css">
	 	<script src="mdfiles/js/jquery.min.js"></script>
	 	<script src="mdfiles/js/bootstrap.min.js"></script>	
		<style>
		b{
		color:black;
		}
		.h{
	font-family : "Imprint MT Shadow";
	font-size : 23px;
	font-weight : bold;
	color : #4c054c;
}
.t{
	font-family : "Imprint MT Shadow";
	font-size : 20px;
	color:black;
}
.msg{
	font-family : "Imprint MT Shadow";
	font-size : 20px;
}
		</style>
</head>
<body>
<?php
session_start();
if(!isset($_SESSION['id']))
{
	echo"<script>location.href='index.php?msg=Invalid Login'</script>";
}
require("connectdb.php");
if($_SESSION["role"] == '1')
{
?>
<nav class="navbar navbar-expand-lg navbar-dark aqua-gradient">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#"><i class="fa fa-home" aria-hidden="true"></i></a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto" >
      <li class="nav-item ">
        <a class="nav-link" href="add_teacher.php"><b>ADD FACULTY</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add_class.php"><b>ADD CLASS</b></a>
      </li>
      

    
<?php

}
else if($_SESSION["role"] == '0'){
?>

<nav class="navbar navbar-expand-lg navbar-dark aqua-gradient">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#"><i class="fa fa-home" aria-hidden="true"></i></a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto" >
      <li class="nav-item ">
        <a class="nav-link" href="add_syllabus.php"><b>ADD SYLLABUS</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="exam_report.php"><b>EXAM REPORT</b></a>
      </li>
      
	   
<?php
			  
}

?>
<li class="nav-item">
			<a class="nav-link" href="update_password.php"><b>UPDATE PASSWORD</b></a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="logout.php"><b>LOGOUT</b></a>
			</li>
			</ul>
    <!-- Links -->

    
  </div>
  <!-- Collapsible content -->

</nav>
			
</body>
</html>