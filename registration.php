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
  <script scr="js/jquery2.js"></script>
  <script scr="js/bootstrap.min.js"> </script>
  <script scr="main.js"> </script>
  <script src="action.php"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

  <script>
    $(document).ready(function() {
            
        var p1=$("#p1").val();
        var p2=$("#p2").val();
        $("#p2").bind("blur",password_check);

    });
        function password_check() {
          var p1=$("#p1").val();
          var p2=$("#p2").val();
          if(p1!=p2)
          {
            $("#pass_err").html("missmatch password"); 
          }
          else
          {
             $("#pass_err").html(""); 
             $("#pass_crr").html("password correct"); 
          }

        }

  </script>


  

	
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
        <div class="col-lg-6"> 
      <div class="jumbotron" style="margin-top:150px">
        <h1> New User</h1>
        <fieldset id="new_user">
        <form method="post" action="registration.php" autocomplete="off">
          <table id="user_table">
             <tr>
              <td> Name </td>
              <td><input type="text" name="name" required></td>
            </tr>
            <tr>
              <td> UserName </td>
              <td><input type="text" name="uname" required></td>
            </tr>
            <tr>
              <td>Password </td>
              <td><input type="password" name="pass1" id="p1" required></td>
              <td><i class="error" id="pass_err"></i>
                 <i class="correct" id="pass_crr"></i>
              </td>
            </tr>
             <tr>
              <td> Confirm Password  </td>
              <td><input type="password" name="pass2" id="p2" required></td>
            </tr>
             <tr>
              <td>Email </td>
              <td><input type="email" name="email" required></td>
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
              <td><input type="Text" name="ans" required></td>
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
                echo "<p class = 'error'> fields all blanks </p>";
              }



            }
         //   else
           // {
             // echo "<p> full all message";
           // }

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
