<?php include 'header.php';?>
<?php

session_start();


if (isset ($_POST['submit']))
{ $adnm=$_SESSION["adnm"];
  $adbranch=$_SESSION["adbranch"];
  
}
 
?>

<!DOCTYPE html>
<html>

 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendancedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

		
		


$sql = "SELECT * from lecture_table where branch = 'cs' ";
$result = $conn->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($conn));
}

?>

<head>
	<title>Displaying MySQL Data in HTML Table</title>
	<style type="text/css">
		body { 
			font-size: 15px;
			color: #6b6f4f;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		/* table td {
			transition: all .5s;
		}
		
		 Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
			margin-bottom:10px;
			
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: black;
			color: #FFFFFF;
			border-color: #2e303c!important;
			text-transform: uppercase;
			
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color:#d2d4e4;
		}
		.data-table tbody tr:hover td {
			background-color: #9dbd9b;
			border-color: #9dbd9b;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
		h1{margin-top:80px;}
		
		
	</style>
</head>
<body>

	<h1>Student List</h1>
	<form role="form" method="POST" action="studentattend.php">

	<table class="data-table">
		
		<thead >
			<tr>
			                    <th>roll_no</th>
							    <th>subject</th>
				                <th>day</th>
                                <th>lecture</th>
                                <th>branch</th>
                                 <th>Semester</th>
                                <th>date</th>
								 <th>attendance </th>
								   
								 </th>
				
			</tr>
		</thead>
		
		<tbody>
		<?php
		
		while ($row = mysqli_fetch_array($result))
		{
		
			echo '<tr>
			
			        <td>'.$row['roll_no'].'</td>
					<td>'.$row['subject'].'</td>
					<td>'.$row['day'].'</td>
					<td>'.$row['lecture'].'</td>
                    <td>'.$row['branch'].'</td>
                    <td>'.$row['semester'].'</td>
                   <td>'.$row['date'].'</td>
				    <td>'.$row['attendance'].'<td><input type="checkbox" name="attendance" value="present"> present
<input type="checkbox" name="attendance" value="absent"> absent</td> 
				</tr>';
			
		}
		
		?>
		




<table>
		</tbody>
		
	</table>
	<center><button  name="submit" value="sumit">Submit </button></center></br>
	<center> <a href="faculty.php"><button style="margin-bottom:px;">back</button></a></center></br>
	 <center> <a href="teacher_login.php"><button style="margin-bottom:px;">logout</button></a></center>
	
	
             
</body>

</html>



