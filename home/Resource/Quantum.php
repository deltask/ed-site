<?php 
 session_start();
 $user=$_SESSION["uname"];
 if(isset($_POST['courses']))
 {
	 //$_SESSION["uname"].unset();
	 header("location:../Course.php");
 }
?>
<html>
<head>
<link rel="stylesheet" href="course.css">
 <title>
  Quantum Computing
 </title>

</head>
<body>
<div class="hdiv">
  <img src="icon2.png" style="height:48px">&nbsp Fun_Ed <div class="rdiv"> Welcome  &nbsp <?php echo $user ?> </div>
</div>
<br><br>
<form  method="post"><p style="text-align:right"><input type="submit" name="courses" value="courses" style="background-color:yellowgreen;padding:15px 15px;font-size:20px;font-variant:small-caps"></input></p></form>
<div class="cssload-preloader" style="position: absolute;
	height: 29px;
	top: 20%;
	left: 15%;
	margin: -15px 0 0 -146px;
	perspective: 195px;
		-o-perspective: 195px;
		-ms-perspective: 195px;
		-webkit-perspective: 195px;
		-moz-perspective: 195px;">
	<div class="cssload-preloader-box">	<div>Q</div> <div>U</div> <div>A</div> <div>N</div> <div>T</div> <div>U</div> <div>M</div> </div>
    <br><br>
	<div class="cssload-preloader-box" style="position:relative;top=100px;left:0px"> <div>C</div> <div>O</div> <div>M</div> <div>P</div> <div>U</div> <div>T</div> <div>I</div> <div>N</div> <div>G</div> 
	</div>
</div>	
<br>
<br><br>
<hr style="width:900px;height:10px;  color: #0000FF;   background-color: #0000FF;   border-width: 0;   margin: 0;   padding: 0;">
<br><br>

<p> <strong> <a href="Quantum_1.php"> Module 1 : Introduction </a> </p>
<br>
<p> <strong> <a href="Quantum_2.php"> Module 2 : Basics </a> </p>
<br>
<p> <strong> <a href="Quantum_3.php"> Module 3 : Future of Quantum Computing </a> </p>

</body>
</html>