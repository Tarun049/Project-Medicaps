
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
.all{text-align:center;background-color:#3f51b500;text-align:center;box-shadow:0px 0px 10px 0px;margin-left:300px;margin-right:300px;margin-top:100px;padding:20px;}
body {}
th{padding:80px;padding-top:0px;padding-bottom:20px;font-size:20px;}
p{margin-top:30px;}
.ima{background-image:url('abc2.jpg');
     background-repeat: no-repeat;
     background-position:center;
     background-size:cover;
}
.tab{
	.all{text-align:center;background-color:#3f51b500;text-align:center;box-shadow:0px 0px 10px 0px;margin-left:300px;margin-right:300px;margin-top:100px;padding:50px;
}
i{text-align:center; font-size:20px;margin-bottom:30px;}
body{margin:0px;}
h3{
	text-align:center;
}
</style>
</head>
<body class="ima">
<p>
      
</p>
  
<div class="all" >
<h3>Working of Faculty<h3>
<table align="center" class="tab">

<tr>
<th>Attendance</th>
<th>Add Student</th>

</tr>
<tr>
<td>
<img src="man.png";>  </br>
<a href="le_t.php"><input type="button" value="Attendance"></a>
 </td>
<td>
 <img src="man.png";></br>
 <a href="student_add.php"><input type="button" value="Add"></a> 

</td>


</tr>
</table>
</div>
</br>
</br>
<center><a href="teacher_login.php"><input type="button" value="Logout"></a></center>
</body>
</html>
