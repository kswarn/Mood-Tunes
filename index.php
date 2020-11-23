<?php
session_start();
  require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://kit.fontawesome.com/20892f8288.js" crossorigin="anonymous"></script>
<title>Login Page</title>
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
          <h2>LOGIN </h2>
          <br>
          <br>
          
          <img id="logo" src ="images/logo.jpg"/>
          
     </center>
   
    
   <form class="myform" action="index.php" method="post">
       <label><b>Username:</b></label><br>
       <input name="username" type="text" class="inputvalues" placeholder="Type your username" required/></br>
       <label><b>Password:</b></label><br>
       <input name="passwords" type="password" class="inputvalues" placeholder="Type your password" required/></br>
       <input name="login" type="submit" id="login_btn" value="Login"/><br>
       <a href="register.php">
       <input type="button" id="register_btn" value="Register"/>
        
</form>
<?php
  
  if(isset($_POST['login']))
  {
    $username=$_POST['username'];
    $password=$_POST['passwords'];  
    $query="SELECT*from users where username='$username' AND passwords='$password'";
    $query_run=mysqli_query($conn,$query);

    if(mysqli_num_rows($query_run)>0)
    {
          $_SESSION['username']=$username;
          header('location:home.php');
    }
    else
    {
        echo '<script type="text/javascript" alert("invalid user") </script>';
    }

  }

?>
</div>

</body>
</html>