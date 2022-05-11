<?php include 'header.php';?>
	   
<!doctype html>
<html>
<head>
<style>
h1{text-align:top;}
.all{text-align:center;box-shadow:0px 0px 10px 0px;margin-left:200px;margin-right:200px;padding:20px;margin-top:100px;background-color:#ffc0c000;;}
body {background-image:url('abc.jpg');}
label{text-align:left;color:blue;}
body{margin:0px;}
</style>
</head>
<body>
 
<div class="all">
<form role="form" method="post" action="student_d.php">
<center>
<h1>Delete Student</h1>
<table>
<tr>
<th>
 Rollno:
</th>
<th>
<input type="text" name="rollno"required>
</th>
</tr>
</table>
<br>
</center>
<a href="ad.php"><input type="button" value="Back"></a>   
<button name="delete" value="delete" >Delete</button>
<br><br>
</form>
</div>
</body>
</html>

