<?php include 'header.php';?>
<?php

session_start();


if (isset ($_POST['submit']))
{ $adnm=$_SESSION["adnm"];
  $adbranch=$_SESSION["adbranch"];
  
}
 
?>			   
<!doctype html>
<html>
<head>
<style>
h1{text-align:top;}
.all{text-align:center;box-shadow:0px 0px 10px 0px;margin-left:200px;margin-right:200px;margin-top:100px;padding:30px;background-color:#9e9e9e3b;}
body {background-color:#FFFFFF;}
body{margin:0px;}
form{
	text-align:center;
	
}
</style>
</head>
<body>

<div class="all">
<form role="form" method="POST" action="leti_2.php">
<center>
<h1>Lecture Attendance</h1>
<table>
<tr>
<th style="text-align:right">
Subject Name:
</th>
<th>
<input type="text" name="subject" required>
</th>
</tr>
<tr>
<th style="text-align:right">
Student Id:
</th>
<th>
<input type="text" name="roll_no" required>
</th>
</tr>
<tr>
<th style="text-align:right">
Day:
</th>
<th style="text-align:left">
<select name="day">
<option value='Monday'>Monday</option>
<option value='Tuesday'>Tuesday</option>
<option value='Wednesday'>Wednesday</option>
<option value='Thursday'>Thursday</option>
<option value='Friday'>Friday</option>
<option value='Saturday'>Saturday</option>
</select>
</th>
</tr>
<tr>
<th style="text-align:right">
Lecture:
</th>
<th style="text-align:left">
<select name="lecture">
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
</select>
</th>
</tr>
<tr>
<th style="text-align:right">
Branch:
</th>
<th><input type="text" name="branch">

</th>
</tr>
<tr>
<th style="text-align:right">
Semester:
</th>
<th style="text-align:left">
<select name="semester">
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
</select>
</th>
</tr>
<tr>
<th style="text-align:right">
Attend:
</th>
<th>
<input type="text" name="Attend"  required>

</th>
</tr>
<tr>
<th style="text-align:right">
Date:
</th>
<th style="text-align:left">
<input type="date" name="date"  required>

</th>
</tr>

</table>
<br>
</center>

<a href="teacher_home.php"><input type="button" value="Back"></a>
<input type="submit" name="submit" value="submit">


</form>
<br>
</div>
</body>
</html>


