<?php include 'header.php';?>


	   
<!doctype html>
<html>
<head>
<style>
h1{color:blue;text-align:top;}
.all{text-align:center;box-shadow:0px 0px 10px 0px;margin-left:200px;margin-right:200px;margin-top:100px;background-color:pink;}
body {background-color:#FFFFFF;}
label{text-align:left;color:blue;}
body{margin:0px;}
</style>
</head>
<body>
 
<div class="all">
<form role="form" method="post" action="teacher_a.php">
<center>
<h2>Teacher create account</h2>
<table>
<tr>
<th>
Name:
</th>
<th>
<input type="text" name="name"required>
</th>
</tr>
<tr>
<th>
branch:
</th>
<th>
<input type="text" name="branch"required>
</th>
</tr>
<tr>
<th>
semester:
</th>
<th>
<input type="text" name="semester"required>
</th>
</tr>
<tr>
<th>
course:
</th>
<th>
<input type="text" name="course"required>
</th>
</tr>
<tr>
<th>
User Id:
</th>
<th>
<input type="text" name="user_id"required>
</th>
</tr>
<tr>
<th>
Password:
</th>
<th>
<input type="password" name="password"required>
</th>
</tr>
</table>
<br>
</center>
<a href="ad.php"><input type="button" value="Back"></a> 
<button type="submit" name="submit" value="login">Submit </button>
<br>
<br>
</form>
</div>
</body>
</html>

<?php include 'footer.php'?>