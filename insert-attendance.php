<?php

	
	$con = mysqli_connect("localhost","root","","attendancedb");

	
	$sql = "SELECT * FROM `courses`";
	$Sql_query = mysqli_query($con,$sql);
	$All_courses = mysqli_fetch_all($Sql_query,MYSQLI_ASSOC);
?>


<?php
   
    $total = count($_POST['stuid']);

    for($i=0;$i<$total;$i++){
        $stuid = $_POST['stuid'][$i];
        $stuname = $_POST['stuname'][$i];
        $stuclass = $_POST['stuclass'][$i];
        $section = $_POST['section'][$i];
        $attdate = $_POST['attdate'][$i];
        $attndc = $_POST['attndc'][$i];

        $sql = $db->prepare("INSERT INTO sc_attendance (stuid, stuclass, section, attdate ,attndc) VALUES (?, ?, ?, ?, ?)");
        $sql->bind_param($studentid, $stuclass, $section, $attdate, $attndc);
        $db->execute($sql);
    }
?>