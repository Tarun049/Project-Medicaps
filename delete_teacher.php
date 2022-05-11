<?php
$dbcon=mysqli_connect("localhost","root","","attendancedb");

if (mysqli_connect_errno())
{
echo "Failed to connect to mysql:".mysqli_connect_error();
}
//else
//{echo "hiiii";}
?>

<?php    
// code to delete hod
if (isset($_POST['DELETE']))

{	
       $user_id=$_POST['user_id'];
		 $sql="select user_id from teacher_table where user_id='$user_id'";
		$query=mysqli_query($dbcon, $sql);
        if($query){
          $row= mysqli_fetch_row($query);
          $dbbranch=$row[0];
         }
		if($dbuser_id==$aduser_id)
		{
		$sql="DELETE FROM teacher_table WHERE user_id='$user_id'";

        if ($dbcon->query($sql) ===true)
		{ echo "<script>alert('Successfully Delete Student ');</script>";
        echo "<span style='color:blue;'>Successfully Delete Student</span>";
	   }else {echo "Error".$sql ."<br>" .$dbcon->error;}
}
else {echo "<span style='color:red;'>Please Delete only your brnach students</span>";}
  
}
  ?>