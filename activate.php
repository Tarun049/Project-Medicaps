<?php

	
	$con=mysqli_connect("localhost","root","","attendancedb");

	
	if (isset($_GET['id'])){

		
		$course_id=$_GET['id'];

		
		$sql="UPDATE `courses` SET
			`status`=1 WHERE id='$course_id'";

		
		mysqli_query($con,$sql);
	}

	
	header('location: course_page.php');
?>
