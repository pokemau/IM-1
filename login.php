<?php    
    include 'connect.php'; 
    require_once 'includes/header.php'; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <div>
    <form method="post">
      <pre>			
        Username:<input type="text" name="txtusername">	
        Password:<input type="password" name="txtpassword">				
        
        <input type="submit" name="btnLogin" value="Login"> 
      </pre>
    </form>
  </div>
  
</body>
</html>


<?php	
	if(isset($_POST['btnLogin'])){
		$uname=$_POST['txtusername'];
		$pwd=$_POST['txtpassword'];
		//check tbluseraccount if username is existing
		$sql ="Select * from tbluseraccount where username='".$uname."'";
		
		$result = mysqli_query($connection,$sql);	
		
		$count = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result);
		
		if($count== 0){
			echo "<script language='javascript'>
						alert('username not existing.');
				  </script>";
		}else if($row[3] != $pwd) {
			echo "<script language='javascript'>
						alert('Incorrect password');
				  </script>";
		}else{
			$_SESSION['username']=$row[0];
			header("location: index.php");
		}
			
		
	}
		

?>