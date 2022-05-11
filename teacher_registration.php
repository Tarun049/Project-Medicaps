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
if($_POST['submit'])
{	
               
                $name=$_POST['name'];
                $branch=$_POST['branch'];
                $semester=$_POST['semester'];
                $course=$_POST['course'];
		$user_id=$_POST['user_id'];
		$password=$_POST['password'];
		
		
		
		
        $sql="insert into teacher_table (name ,branch, semester, course,user_id , password ) values ('$name','$branch','$semester','$course','$user_id','$password')";

        if ($dbcon->query($sql) ===true)
		{ echo "<script>alert('Successfully  ');</script>";
                      
	   }else {echo "Error".$sql ."<br>" .$dbcon->error;}
	   
	   
}
?>