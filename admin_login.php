
<?php

session_start();

?>
<?php
       if (isset($_POST['submit'])){
        include 'conn.php';
        $username=($_POST['userid']);
        $password=($_POST['password']);

        $sql="SELECT userid, password,username,branch FROM hod WHERE userid='$username'";
        $query=mysqli_query($dbcon, $sql);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbusername=$row[0];
          $dbpassword=$row[1];
		  $dbum=$row[2];
		  $dbbranch=$row[3];
		  
		 
        } }
		
		
           if($username== $dbusername && $password== $dbpassword){
			   
			   
		  $_SESSION['adnm']=$dbum;
          $_SESSION['adbranch']=$dbbranch;
		
          header('Location:ad.php');
        }else{  echo "<script>alert('User name or password is incorrect!');</script>";
            //echo "<span style='color:red;'>$dbusername</span>";
			//echo "<span style='color:red;'>$dbusername</span>";
          }    
} 
?>
                 <body style= "margin:0px;background-color:#FFFFFF;background-image: url('abc.jpg');background-repeat: no-repeat;background-position: center;
  background-size: cover;
  position: relative;">
                    <div style="text-align:center;box-shadow:0px 0px 10px 0px;margin-left:200px;margin-right:200px;padding:30px;margin-top:100px;background-color:#ffc0c000;">
                        <h1>Please Login</h1>
						<img src="man.png"><br>
						<form role="form" method="post" action="admin_login.php">
                                
                               <input type="text"  placeholder="Userid" name="userid" autofocus required>
                               <br><br>
                               <input type="password" placeholder="Password" name="password" type="password" value="">
                                <br><br>
                                <button type="sumbit" name="submit" value="login">Login</button>
                                <a href="index.php"><input type="button" value="Back"></a>      
								
								
                        </form>
						
                    </div>
               </body>
          
