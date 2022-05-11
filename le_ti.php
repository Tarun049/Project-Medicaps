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
                $Attend=$_POST['Attend'];
                $date=$_POST['date'];
		
		
		
		
		
        $sql="insert into lecture_table (subject , teacher , user_id ,day , lecture , branch , semester , Attend , date) values ('$subject','$teacher','$user_id','$day','$lecture','$branch','$semester','$Attend','$date')";

        if ($dbcon->query($sql) ===true)
			{ echo "<script>alert('Successfully Add Lecture ');</script>";
         echo "<span style='color:blue;'>Lecture is Successfull Add</span>";
	   }else {echo "Error".$sql ."<br>" .$dbcon->error;}
}
	   //update


if(isset($_POST['update']))
{
    
		$subject=$_POST['subject'];
		$teacher=$_POST['teacher'];
		$day=$_POST['day'];
		$lecture=$_POST['lecture'];
		$branch=$_POST['branch'];
		$semester=$_POST['semester'];
	        $Attend=$_POST['Attend'];
                $date=$_POST['date'];
	
       $sql="UPDATE lecture_table SET subject , teacher ,day , lecture , branch , semester , Attend , date where values ('$subject','$teacher','$day','$lecture','$branch','$semester','$Attend','$date')";
       
             if ($dbcon->query($sql) ===true)
{ echo "<script>alert('Successfully Update Lecture ');</script>";
	   }else {echo "Error".$sql ."<br>" .$dbcon->error;}
 }

 
  ?>