
<?php

session_start();

?>
<?php
       if (isset($_POST['submit'])){
        include 'conn.php';
        $id=($_POST['id']);
        $password=($_POST['password']);

        $sql="SELECT id, password FROM autho WHERE id='$id'";
        $query=mysqli_query($dbcon, $sql);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbid=$row[0];
          $dbpassword=$row[1];
		  
		  
		 
        } }
		
		
           if($id== $dbid && $password== $dbpassword){
			   
			   
		  
		
          header('Location:autho.php');
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
						<form role="form" method="post" action="autho_login.php">
                                
                               <input type="text"  placeholder="id" name="id" autofocus required>
                               <br><br>
                               <input type="password" placeholder="Password" name="password" type="password" value="">
                                <br><br>
                                <button type="sumbit" name="submit" value="login">Login</button>
                                <a href="index.php"><input type="button" value="Back"></a>      
								
								
                        </form>
						
                    </div>
               </body>
          
