<?php
session_start();
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	  
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
 <header>
   <div class="container">
    <div id="branding">
     <h1><span class="highlight">YOUR PROFILE</span></h1>
     <img id="logo" src="images/logo.jpg">
     </div>
     <nav>
      <ul>
       <li><a href="home.php">HOME</a></li>
       <li><a href="playlists.php">PLAYLISTS</a></li>
       <li class="current"><a href="profile.php">PROFILE</a></li>
       <i class="far fa-user"></i><br>
      
       </ul>
      </nav>
    
   </div>  
 </header>

   <section id="showcase">
    <div class="container">
    <h1>MUSIC FOR EVERY MOOD</h1>
    </div> 
   </section> 
    

   
   <section id="content1">
    <div class="container">
   
     <h2>Enter song details:</h2>
<br>
    
    <form class="myform"  method="post">
       <label><b>Song name:</b></label><br>
       <input name="songname" type="text" class="inputvalues" placeholder="Enter song name" required/></br>
       <label><b>Artist name:</b></label><br>
       <input name="artistname" type="text" class="inputvalues" placeholder="Enter artist name" required/></br>
       <label><b>Album name:</b></label><br>
       <input name="albumname" type="text" class="inputvalues" placeholder="Enter album name" required/></br>
       <label><b>genre:</b></label><br>
       <input name="genre" type="text" class="inputvalues" placeholder="Enter genre" required/></br>
       <label><b>Song link:</b></label><br>
       <input name="songlink" type="text" class="inputvalues" placeholder="Enter song link" required/></br>
       <br>
       <input name="go" type="submit" id="go_btn" value="GO"/><br>
       
        
</form>
<?php
           
           if(isset($_POST['go'])) 
           {
               $songname=$_POST['songname'];
               $artistname=$_POST['artistname'];
               $albumname=$_POST['albumname'];
               $genre=$_POST['genre'];
               $songlink=$_POST['songlink'];  
               $uname=$_SESSION['username'];
               $userid = mysqli_fetch_assoc(mysqli_query($conn, "SELECT user_id FROM users WHERE username ='$uname'"))['user_id'];
               $query="INSERT INTO newsongs(userid,songname,artistname,albumname,genre,songlink)VALUES('$userid','$songname','$artistname','$albumname','$genre','$songlink')";
               $query_run=mysqli_query($conn,$query);
           
               if($query_run)
               {
                 echo '<script type="text/javascript"> alert("Entry recorded") </script>';
               }
               else{
                   echo '<script type="text/javascript"> alert("error") </script>';
               }
               
 
               
           }
           
         ?>
   
        
       
        
        </p>
   
     </div>
   </section>

    
     <footer>
    
     <p>Contact us on :  <i class="fas fa-envelope"></i></p>
     <p>swarnakadagadkai.1JS17IS080@gmail.com</p>
      </footer>


</body>
</html>