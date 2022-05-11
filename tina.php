<html>
<head>
</head>
<body>
<form name="insert-attendance.php" action="insert-attendance.php" method="post">
    <?php
	
        $con = mysqli_connect("localhost","root","","attendancedb");
        $sql = "SELECT * FROM sc_students WHERE stuclass='$stuclass' AND  section='$section'";
        $Sql_query = mysqli_query($con,$sql);
        for ($i = 0; $row = $sql->fetch(); $i++) {
            ?>
            <tr>
                <td><input type="text" name="stuid[]" value="<?php echo $row['stuid'] ?>"></input></td>
                <td><input type="text" name="stuname[]" value="<?php echo $row['stuname'] ?>"></input></td>
                <td><input type="text" name="stuclass[]" value="<?php echo $row['stuclass'] ?>"></input></td>
                <td>
                    <input type="text" name="section[]" value="<?php echo $row['section'] ?>"></input>
                    <input type="hidden" value="<?php echo date("Y-m-d"); ?>" name="attdate[]">
                <td>
                    <select name="attndc[]">
                        <option value="present">PRESENT</option>
                        <option value="absent">ABSENT</option>
                        <option value="leave">LEAVE</option>
                    </select>
                </td>
            </tr>
            <?php
        }
    ?>
    <input type="submit" value="submit">
</form>
</body>
</html>