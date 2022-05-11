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
                
		$rollno=$_POST['rollno'];
		$name=$_POST['name'];
		$branch=$_POST['branch'];
		$semester=$_POST['semester'];
		$password=$_POST['password'];
		
		
		
        $sql="insert into student_table (rollno , name , branch , semester , password) values ('$rollno','$name','$branch','$semester','$password')";

        if ($dbcon->query($sql) ===true)
		        { echo "<script>alert('Account Created Successfully');</script>";
        echo "<span style='color:blue;'>Your Account is Successfully Created...</span>";
	   }else {echo "Error".$sql ."<br>" .$dbcon->error;}
}	
   
  ?>