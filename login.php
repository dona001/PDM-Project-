<?php
session_start();
include("db.php");
?>
 <!DOCTYPE html>
<html>
<head>
	<title>E-Cos</title>
	  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/niv.css">
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <script scr="css/bootstrap-theme.min.css"> </script>
  <script scr="js/jquery2.js"> </script>
  <script scr="js/bootstrap.min.js"> </script>
  <script scr="main.js"> </script>
  <script src="action.php"></script>

	
</head>
<body style="background:url('image/makeup.jpg')">

  <nav class="navbar navbar-inverse navbar-fixed-top">
  <a href="../project/index.html" class="navbar-brand navbar-center">E-Cos</a>
  <a href="../project/mens.html" class="navbar-brand"><i class="social fa fa-male" aria-hidden="true"></i>MENS </a>
  <a href="../project/girl.html" class="navbar-brand"><i class="social fa fa-female" aria-hidden="true"></i>WOMENS </a>
</nav>  
<p><br></p>
<p><br></p>
<p><br></p>
  		<div class="container">	
  			<div class="col-lg-4"> </div>
  			<div class="col-lg-4"> 
			<div class="jumbotron" style="margin-top:150px">
				<h3>Please Login</h3>
				<?php
					if(isset ($_GET["mes"]))
					{
						echo $_GET["mes"];
					}
				?>
				<br>

				<form method="POST" action="login.php" actocomplete="off">
					<table id="user_table">
						<tr>
							<td> UserName </td>
							<td><input type="text" name="name" requried></td>
						</tr>
						<tr>

							<td>Password </td>
							<td><input type="password" name="pass" requried></td>
						</tr>
						<tr>
							<td><input type="submit" name="submit" value="Login"></td>

							<td><input type="reset" value="Clear"></td>
						</tr>
						<tr>
							<td><a href="../project/registration.php">SignUp</a></td>

							   <td><a href="#">Forget Password</a></td>
						</tr>

					</table>

		
					
					<br>

				</form>
				<?php
					if(isset($_POST["submit"]))
					{
						$name=$_POST["name"];
						$pass=$_POST["pass"];
						if($name!=""&&$pass!="")

						{
							$sql="SELECT ID,USERNAME,PASSWORD FROM users WHERE USERNAME='$name' AND PASSWORD='$pass'";

							$result=$con->query($sql); 
							
							if ($result->num_rows>=1)
							{	
								
								$_SESSION["name"]=$name;
								header("location: profile.php");	
							}
							else
							{
							echo "<p class='error'> Invaild user </p>";	
							}
						}
						else
						{
							echo "<p class='error'> please enter deatils</p>";
						}
					}
					

				?>
				</div>

  			</div> 
  			

  		</div>
  </body>
  </html>