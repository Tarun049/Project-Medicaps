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
		$teacher=$_POST['teacher'];
		$user_id=$_POST['user_id'];
		$day=$_POST['day'];
		$lecture=$_POST['lecture'];
		$branch=$_POST['branch'];
		$semester=$_POST['semester'];
		
		
		
        $sql="insert into student_table (subject , teacher , user_id ,day , lecture , branch , semester) values ('$subject','$teacher','$user_id','$day','$lecture','$branch','$semester')";

        if ($dbcon->query($sql) ===true)
		        { echo "<script>alert('Successfull Create Youe Account ');</script>";
        echo "<span style='color:blue;'>Your Account is Successfull Created</span>";
	   }else {echo "Error".$sql ."<br>" .$dbcon->error;}
}	
   
  ?>