<?php
session_start();
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<style>
  /*.dropdown-content{
    font-size: 20px;
    text-decoration:none;
    text-shadow:0 0;
    font-weight:bold;
  }
  */
  </style>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<title>MOOD TUNES</title>
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
    <img id="logo" src="images/logo.jpg">
     <h1><span class="highlight">MOOD TUNES</span></h1>
   
     </div>
     <nav>
      <ul>
       <li class="current"><a href="home.php">HOME</a></li>
       <li><a href="playlists.php">PLAYLISTS</a></li>
       <li><a href="profile.php">PROFILE <i class="far fa-user"></i></a></li>
      
       </ul>
      </nav>
    
   </div>  
 </header>

   <section id="showcase">
    <div class="container">
    <h1>MUSIC FOR EVERY MOOD</h1>
   </section> 


   
    <section id="content">
    <div class="container">
    
   
    <div>
  <span>How you feeling today?  <i class="fas fa-comment"></i></span>
  <br>
  <br>
    <form method="post" action="tone/test1.php">
      <input name="text" type="text" class="inputvalues" required/>
      <button class="btn btn-primary" name="btn" type="submit">Submit</button>
    </form>
     <br>
     <br>
    <div>
      <section id="boxes">
        <div class="box">
          <center>
        <a href="mb.php">
          <img class="images" src="images/sad.jpg">
          </a>
  <p style="color:black">Melancholic</p>
</center>
</div>
</section>
<section id="boxes">
  <div class="box">
    <center>
  <a href="ht.php">
  <img class="images" src="images/happy.jpg">
  <center>
  </a>

  <p style="color:black">Joyful</p>
</div>
</section>
<section id="boxes">
  <div class="box">
    <center>
  <a href="c.php">
  <img class="images" src="images/angry.jpg">
</center>
  </a>

  <p style="color:black">Enraged</p>
</div>
</section>
<section id="boxes">
  <div class="box">
    <center>
  <a href="r.php">
  <img class="images" src="images/burntout.jpg">
</center>
  </a>
   
 <p style="color:black">Burnt out</p>
</div>
</section>
<section id="boxes">
  <div class="box">
    <center>
  <a href="SW.php">
  <img class="images" src="images/sleepless.jpg">
  </a>

  <p style="color:black">Sleepless</p>
</center>
</div>
</section>
  
  </div>
</div>

     <a href="playlists.php">
     <input type="button" id="btn" value="EXPLORE">
     </a>
</div>
</section>
    
    
     

     
     <footer>
     <p>Contact us on : swarnakadagadkai.1JS17IS080@gmail.com</p>
      </footer>


</body>
</html>