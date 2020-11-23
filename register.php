<?php
session_start();
  require 'dbconfig/config.php';

?>
<!DOCTYPE html>
<html>
<head>
<title>Registration form</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="blog.css">
    <script type="text/javascript" src="script.js"></script>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:black">
<div id="main-wrapper1">
     <center>
     <h1> <b> MOOD TUNES </b> </h1>
          <h2>CREATE ACCOUNT</h2>
          <br>
          <br>
          
          <img id="logo" src ="images/logo.jpg" class="logo"/>
        
     </center>
   
    
   <form class="myform"  method="post">
       <label><b>Username:</b></label><br>
       <input name="username" type="text" class="inputvalues" placeholder="Type your username" required/></br>
       <label><b>Password:</b></label><br>
       <input name="passwords" type="password" class="inputvalues" placeholder="Type your password" required/></br>
       <label><b>Confirm Password:</b></label><br>
       <input name="cpassword" type="password" class="inputvalues" placeholder="Confirm password" required/></br>
       <input name="submit_btn" type="submit" id="signup_btn" value="signup"/><br>
       <a href="index.php">
       <input type="button" id="back_btn" value="Back"/></br>
       
       
   </form>
        </div> 
    
<?php
        if(isset($_POST['submit_btn']))
          {
              //echo '<script type="text/javascript"> alert ("Signup button clicked")</script> ';

              $username=$_POST['username'];
              $passwords= $_POST['passwords'];
              $cpassword=$_POST['cpassword'];

              if($passwords==$cpassword)
              {
                  $query="SELECT * FROM users WHERE username='$username'";
                  $query_run=mysqli_query($conn,$query);
                  $err=mysqli_error($conn);
                  print_r($err);

                  if(mysqli_num_rows($query_run)>0)
                  {
                      echo '<script type="text/javascript"> alert("user already exists. try another username")</script>';
                  }
                  else
                  {
                      $query="INSERT INTO users (username,passwords) VALUES ('$username','$passwords')";
                      //echo $query;
                      $query_run=mysqli_query($conn,$query);
                      $err=mysqli_error($conn);
                      print_r($err);
                     
                  

                      if($query_run)
                      {
                        echo '<script type="text/javascript"> alert("user registered. go to login page") </script>';
                      }
                      else{
                          echo '<script type="text/javascript"> alert("error") </script>';
                      }
                  }
              }
              else{
                  echo'<script type="text/javascript"> alert("Password and confirm password do not match") </script>';
              }

            
          }
      ?>
   
   
</body>
</html>