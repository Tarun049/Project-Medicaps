
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
h1{color:blue;text-align:top;}
.all{text-align:center;box-shadow:0px 0px 10px 0px;margin-left:200px;margin-right:200px;margin-top:100px;background-color:#ffc0c000;padding:50px;}
body {background-color:#FFFFFF;background-image: url("tani.jpg");background-repeat: no-repeat;background-position: center;
  background-size: cover;
  position: relative;}
label{text-align:left;color:blue;}
body{margin:0px;}
h2{
	font-size:40px;
}

</style>
</head>
<body>

<div class="all">
<form role="form" method="POST" action="student_a.php">
<center>
<h2>Create Account</h2>
<table>
<tr>
<th>
Rollno:
</th>
<th>
<input type="text" name="rollno"required>
</th>
</tr>
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
Branch:
</th>
<th>
<input type="text" name="branch"required >
</th>
</tr>
<tr>
<th>
Semester:
</th>
<th>
<input type="text" name="semester"required>
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
<a href="teacher_home.php"><input type="button" value="Back"></a>     
<button  name="submit" value="sumit">Submit </button>
<br><br>

</form>
</div>
</body>
</html>

