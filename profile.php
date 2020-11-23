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
       <a href="index.php">
       <input id="logoutbtn" value="Logout"/>
      </a> 
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
    <center>
        <h3>Hello,
      
        <?php
           
          if(isset($_SESSION['username'])) 
          {
            
              echo $_SESSION['username'];
              $username = $_SESSION['username'];

              
          }
        ?></h3>
        </center>
  
        <center>
        <i class="far fa-play-circle"></i>
        <h3>Your Playlists:</h3>
        </center>
        <br>
        <p id="content2">
        <?php
        $playlist = array("MOOD BOOSTER" => "mb.php", "HAPPY TUNES" => "ht.php", "SLEEP WELL" => "SW.php", "CALMING"=> "c.php", "RELAXER"=>"r.php");
        $query="SELECT distinct(playlist.pl_name) FROM playlist,pl_users,users WHERE pl_users.user_id=users.user_id AND pl_users.pl_id=playlist.pl_id AND users.username='$username'"; 
              $result=mysqli_query($conn,$query);
              while($row=mysqli_fetch_assoc($result))
              {
                echo '<a href="'.$playlist[$row['pl_name']].'">';
                echo $row['pl_name'].'</a><br> <br>'; 
                
              }
             
        ?>
        </p>
   
     </div>
   </section>
   <section id="content1">
    <div class="container">
    <center>
        <i class="fas fa-music"> </i>
          <h3>Your added songs:</h3>
        </center>
        <br>
        <p id="content2">
        <?php
      
        $query="SELECT newsongs.songname,newsongs.songlink FROM newsongs,users WHERE newsongs.userid=users.user_id AND users.username='$username'"; 
              $result=mysqli_query($conn,$query);
              while($row=mysqli_fetch_assoc($result))
              {
                
                echo $row['songname'].'<br>'; 
                echo 'Listen to it here:'.'<br>'.'<a href="profile.php?attribute='.$row['songlink'].'">'.$row['songlink'].'</a>';
                
              }
           
        ?>
        </p>
   
     </div>
   </section>

     <!--<section id="content1">
         <div class="container">
         <center>
         <i class="fas fa-heart"></i>
             <h3>Your favorites:</h3>
             </center>
        </div>
        </section> -->
        <section id="content1">
         <div class="container">
         <a href="km.php">
         <input id="kmbtn" value="Know more"/>
         </a>
            
        </div>
        </section>
     
     <footer>
    
     <p>Contact us on :  <i class="fas fa-envelope"></i></p>
     <p>swarnakadagadkai.1JS17IS080@gmail.com</p>
      </footer>


</body>
</html>