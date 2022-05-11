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
                
		$subject=$_POST['subject'];
		$day=$_POST['day'];
		$lecture=$_POST['lecture'];
		$branch=$_POST['branch'];
		$semester=$_POST['semester'];
                $roll_no=$_POST['roll_no'];
                $Attend=$_POST['Attend'];
		$date=$_POST['date'];
		
		
        $sql="insert into lecture_table (subject ,day , lecture , branch , semester, roll_no , Attend , date) values ('$subject','$day','$lecture','$branch','$semester','$roll_no','$Attend','$date')";

        if ($dbcon->query($sql) ===true)
		        { echo "<script>alert('Attendance Registered Successfully');</script>";
        echo "<span style='color:blue;'>Attendance Registered...</span>";
	   }else {echo "Error".$sql ."<br>" .$dbcon->error;}
}	
   
  ?>