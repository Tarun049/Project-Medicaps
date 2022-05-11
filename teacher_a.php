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
// code to update student
if($_POST['insert'])
{	
                $name=$_POST['name'];
                $name=$_POST['branch'];
                $name=$_POST['semester'];
                $name=$_POST['course'];
		$user_id=$_POST['user_id'];
		$password=$_POST['password'];
		
		
		
		
        $sql="insert into teacher_table (name , branch, semester , course ,user_id , password ) values ('$name','$branch','$semester','$course','$user_id','$password')";

        if ($dbcon->query($sql) ===true)
			{ echo "<script>alert('Successfully Add Teacher ');</script>";
        echo "<span style='color:blue;'>Successfully Add Teacher</span>";
	   }else {echo "Error".$sql ."<br>" .$dbcon->error;}
	   
	   
}
  
?>