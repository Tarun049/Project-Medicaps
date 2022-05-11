<?php include 'header.php';?>
<!doctype html>
<html>
<head>
<style>
h1{color:blue;text-align:top;}
.all{text-align:center;box-shadow:0px 0px 10px 0px;margin-left:200px;margin-right:200px;margin-top:100px;background-color:pink;}
body {background-color:#FFFFFF; }
body{margin:0px;}
</style>
</head>
<body>
<div class="all">
<h1>STUDENT CREATE ACCOUNT</h1>
<form role="form" method="post" action="student_registration.php">
<center>
<table>
<tr>
<th>
Your ROLLLNO.
</th>
<th>
<input type="text" ROLLNO.="rollno" required>
</th>
</tr>
<tr>
<th>
NAME
</th>
<th>
<input type="text" name="name" required>
</th>
</tr>
<tr>
<th>
BRANCH
</th>
<th>
<input type="text" branch="branch" required>
</th>
</tr>
<tr>
SEMESTER
<th>
<input type="text" semester="semester" required>
</th>
</tr>
<tr>
<th>
password
</th>
<th>
<input type="password" name="password" required>
</th>
</tr>
</table>
<br>
</center>
<button type="submit" name="submit" value="submit">submit</button>
</form>
<br>
</div>
</body>
</html>
<?php include 'footer.php'?>