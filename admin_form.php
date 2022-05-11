
<!doctype html>
<html>
<head>
<style>
h1{text-align:top;}
.all{text-align:center;box-shadow:0px 0px 10px 0px;margin-left:200px;margin-right:200px;margin-top:100px;padding:30px;background-color:#ffc0c000;}
body {background-color:#FFFFFF;background-image: url("abc.jpg"); background-repeat: no-repeat;background-position: center;
  background-size: cover;
  position: relative;} }
body{margin:0px;}
</style>
</head>
<body>

<div class="all">
<h1>HOD Create Account</h1></br></br>
<form role="form" method="post" action="joy.php">
<center>
<table>
<tr>
<th>
Name
</th>
<th>
<input type="text" name="username" required>
</th>
</tr>
<tr>
<th>
Branch
</th>
<th>
<input type="text" name="branch" required>
</th>
</tr>
<tr>
<th>
User ID
</th>
<th>
<input type="text" name="userid" required>
</th>
</tr>
<tr>
<th>
Password
</th>
<th>
<input type="password" name="password" required>
</th>
</tr>
</table>
<br><br>
</center>
<a href="admin_login.php"><input type="button" value="Back"></a> 
<button type="submit" name="submit" value="submit">submit</button>
 
</form>
<br>
</div>
</body>
</html>
