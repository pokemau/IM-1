<?php
  include 'connect.php';
  require_once 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accord Register Page</title>
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/register.css" />
  </head>
  <body>


  <!-- <?php $fname=$_POST['txtfirstname'];		
		$email=$_POST['txtemail'];		
    $displayName=$_POST['txtdisplayname'];
		$uname=$_POST['txtusername'];
    $bday=$_POST['txtbirthday'];
		
		//for tbluseraccount
		$pword=$_POST['txtpassword'];

  ?> -->

    <div id="registerForm">
      <form method="post">
        <h1>Create an account</h1>
        <label for="email">Email address</label>
        <input
          id="email"
          name="txtemail"
          class="txtInput"
          type="email"
          placeholder="abcd@email.com"
          required />
        <label for="display_name">Display name</label>
        <input
          id="display_name"
          name="txtdisplayname"
          class="txtInput"
          type="text"
          placeholder="AccordMod"
          required />
        <label for="username">Username</label>
        <input
          id="username"
          name="txtusername"
          class="txtInput"
          type="text"
          placeholder="accord.mod12"
          required />
        <label for="password">Password</label>
        <input
          id="password"
          name="txtpassword"
          class="txtInput"
          type="password"
          placeholder="*******"
          required />
        <label for="birthdate">Date of birth</label>
        <div>
          <input type="date" name="txtbirthday" />
          
        </div>
        <input type="submit" id="btnRegister" name="btnRegister" value="Register"  >
        <br>
        <a href="login.php">Already have an account?</a>
      </form>
    </div>
  </body>


</html>

<?php	
	if(isset($_POST['btnRegister'])){		
		//retrieve data from form and save the value to a variable
		//for tbluserprofile

    //////////////////////////////////
    $email=$_POST['txtemail'];		
    $displayName=$_POST['txtdisplayname'];
		$uname=$_POST['txtusername'];
    $bday=$_POST['txtbirthday'];
		
		//for tbluseraccount
		$pword=$_POST['txtpassword'];
		
		//save data to tbluserprofile			
		$sql1 ="Insert into tbluserprofile(birthday,displayname) values('".$bday."', '".$displayName."')";
		mysqli_query($connection,$sql1);
		
		//Check tbluseraccount if username is already existing. Save info if false. Prompt msg if true.
		$sql2 ="Select * from tbluseraccount where username='".$uname."'";
		$result = mysqli_query($connection,$sql2);
		$row = mysqli_num_rows($result);
		if($row == 0){
			$sql ="Insert into tbluseraccount(emailadd,username,password) values('".$email."','".$uname."','".$pword."')";
			mysqli_query($connection,$sql);
			echo "<script language='javascript'>
						alert('New record saved.');
				  </script>";
			//header("location: index.php");
		}else{
			echo "<script language='javascript'>
						alert('Username already existing');
				  </script>";
		}
	}
		

?>