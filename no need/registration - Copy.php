<?php
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
  <a href="#" class="navbar-brand"><i class="social fa fa-male" aria-hidden="true"></i>MENS </a>
  <a href="#" class="navbar-brand"><i class="social fa fa-female" aria-hidden="true"></i>WOMENS </a>
</nav>  
<p><br></p>
<p><br></p>
<p><br></p>

   <div id="container">
        <h1>user</h1>
        <fieldset id="new user">
        <form method="post" action="registration.php">
          <table id="user_table">
             <tr>
              <td> Name </td>
              <td><input type="text" name="name"></td>
            </tr>
            <tr>
              <td> UserName </td>
              <td><input type="text" name="uname"></td>
            </tr>
            <tr>
              <td>Password </td>
              <td><input type="password" name="pass1"></td>
            </tr>
             <tr>
              <td> Confirm Password  </td>
              <td><input type="password" name="pass2"></td>
            </tr>
             <tr>
              <td>Email </td>
              <td><input type="Text" name="email"></td>
            </tr>
             <tr>
              <td>Sercrity Question</td>
              <td>
                <select name="ques">
                  <option value="what is pet">what is pet</option>
                  <option value="what is bike">what is bike</option>
                  <option value="what is car">what is car</option>
                   <option value="what is van">what is van</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>Answer </td>
              <td><input type="Text" name="ans"></td>
            </tr>

            <tr>
              <td><input type="submit" value="Login" name="submit"></td>
              <td><input type="reset" value="Clear"></td>
            </tr>
            <tr>
              <td><a href="../project/login.php">Already User</a></td>
              <td><a href="#">Forget Password</a></td>
            </tr>

          </table>
          </fieldset>
        
          <?php
            
            if(isset($_POST["submit"]))
            {
              $name = $_POST["name"];
              $uname = $_POST["uname"];
              $pass1 = $_POST["pass1"];
              $pass2 = $_POST["pass2"];
              $email = $_POST["email"];
              $ques = $_POST["ques"];
              $ans = $_POST["ans"];


              if($name!=""&&$uname!=""&&$pass1!=""&&$pass2!=""&&$email!=""&&$ques!=""&&$ans!="")
              {
                if($pass1==$pass2)
                {
                  $sql = "INSERT INTO users(NAME,USERNAME,PASSWORD,EMAIL,QUESTION,ANSWER)VALUES('$name','$uname','$password','$email','$ques','$ans')";

                  if($con->query($sql))
                  {
                       
                       header("location:login.php?mes=<p class='correct'> Welcome Our E-Cos. Please Login Here  </p>");
                  }
                  else
                  {
                       echo "<p class = 'error'>  some error try again later </p>";
                  }
                }
                else
                {
                  echo "<p class = 'error'>  paasword wrong </p>";
                }

              }
              else
              {
                echo "<p class = 'error'>  all fields message </p>";
              }



            }
            else
            {
              echo "<p> full all message";
            }

          ?>

          </div>

          
          

         
          <br>

        </form>
        </div>










<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="./main.js"></script>
</body>
</html>
