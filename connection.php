<?
Class dbObj{
/* Database connection start */
var $dbhost = "localhost";
var $username = "root";
var $password = "";
var $dbname = "attendancedb";
var $conn;
function getConnstring() {
$con = mysqli_connect($dbhost, $username,$password,$dbname) or die("Connection failed: " . mysqli_connect_error());
 
/* check connection */
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
} else {
$conn = $con;
}
return $conn;
}
}
