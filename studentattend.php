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
if (isset($_POST['submit']))
{	
                $attendance=$_POST['attendance'];
		
               $sql="insert into cs (roll_no,subject,day,lecture,branch,semester,date,attendance) values ('$roll_no','$subject','$day','$lecture','$branch','$semester','$date','$attendance')";

        if ($dbcon->query($sql) ===true)
		{ echo "<script>alert('Successfully completed');</script>";
        
	   }else {echo "Error".$sql ."<br>" .$dbcon->error;}
	   
	   
}
?>