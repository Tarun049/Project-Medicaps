<?php

	
	$con = mysqli_connect("localhost","root","","attendancedb");

	
	$sql = "SELECT * FROM `courses`";
	$Sql_query = mysqli_query($con,$sql);
	$All_courses = mysqli_fetch_all($Sql_query,MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0">
	
	<!-- Using internal/embedded css -->
	<style>
		.btn{
			background-color: red;
			border: none;
			color: white;
			padding: 5px 5px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 20px;
			margin: 4px 2px;
			cursor: pointer;
			border-radius: 20px;
		}
		.green{
			background-color: #199319;
		}
		.red{
			background-color: red;
		}
		table,th{
			border-style : solid;
			border-width : 1;
			text-align :center;
		}
		td{
			text-align :center;
		}
	</style>	
</head>

<body>
	<center><h2>Attendance Table</h2></center>
	<center><table>
		
		<tr>
			<th>Student Name</th>
			<th>Attendance Status</th>
			<th>status</th>
		</tr>
		
		
		<?php
              echo "Today is " . date("d/m/y") . "<br>"; 
			  echo "The time is " . date("h:i:sa");
			// Use foreach to access all the courses data
			foreach ($All_courses as $course) { ?>
			<tr>
				<td><?php echo $course['Course_name']; ?></td>
				<td><?php
						
						if($course['status']=="1")
							echo "Present";
						else
							echo "Absent";
					?>						
				</td>
				
				
				
				<td>
					<?php
					
					if($course['status']=="1")

						
						echo
"<a href=deactivate.php?id=".$course['id']." class='btn red'>Absent</a>";
					else
						echo
"<a href=activate.php?id=".$course['id']." class='btn green'>Present</a>";
					?>
			</tr>
		<?php
			   
			}
				
		?>
	</table></center>
</body>

</html>
