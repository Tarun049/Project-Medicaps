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

		
		


$sql = "SELECT * FROM lecture_table ";
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

		table td {
			transition: all .5s;
		}
		
		/* Table */
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

	<h1>Lecture List</h1>

	<table class="data-table">
		
		<thead >
			<tr>
				<th>subject</th>
				
				
				<th>day</th>
                                <th>lecture</th>
                                <th>branch</th>
                                 <th>Semester</th>
                                 <th>roll_no</th>
                                 <th>Attend</th>
                                 <th>date</th>
				
			</tr>
		</thead>
		<tbody>
		<?php
		
		while ($row = mysqli_fetch_array($result))
		{
		
			echo '<tr>
					<td>'.$row['subject'].'</td>
					
					
					<td>'.$row['day'].'</td>
					<td>'.$row['lecture'].'</td>
                                        <td>'.$row['branch'].'</td>
                                        <td>'.$row['semester'].'</td>
                                        <td>'.$row['roll_no'].'</td>
                                        <td>'.$row['Attend'].'</td>
                                        <td>'.$row['date'].'</td>
					
				</tr>';
			
		}
		
		?>
		
		</tbody>
		
	</table>
	
	 <center> <a href="student_login.php"><button style="margin-bottom:80px;">back</button></a></center>
	
	

             
</body>

</html>


<?php include 'footer.php'?>
