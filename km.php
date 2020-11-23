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
       <li><a href="profile.php">PROFILE</a></li>
       <i class="far fa-user"></i><br>
       
       
       </ul>
      </nav>
    
   </div>  
 </heade>

   <section id="showcase">
    <div class="container">
    <h1>MUSIC FOR EVERY MOOD</h1>
    </div> 
   </section> 


   
   <section id="content1">
    <div class="container">
    <center>
       
      
        <?php
           
          if(isset($_SESSION['username'])) 
          {
              
              echo $_SESSION['username'];

              $username = $_SESSION['username'];
          }
        ?>
        </center>
  
        <Center>
          <br>
        <i class="fas fa-align-justify"></i>
        <h3>Artists and their albums:</h3>
        <br>

        <font size="2">
        
        <table width="100%" border:1 cellpadding="15px"  border-spacing:5px cellspacing="30">
            <tr>
                <th>ALBUM NAME</th>
                <th>ARTIST NAME</th>
                <th> RELEASE DATE</th>
        </tr>
        </center>
        <p id="content2">
        <?php
        $query="CALL albumsinfo()"; 
              $result=mysqli_query($conn,$query);
              while($row=mysqli_fetch_assoc($result))
              {
                echo "<tr>";
                  echo "<td>".$row['name']."</td>";
                  echo "<td>".$row['artist_name']."</td>";
                  echo "<td>".$row['release_date']."</td>";
                echo "</tr>";

                
                
                
              }
        ?>
        </p>
            </table>
            </font>
   
     </div>
   </section>
   <section id="content1">
         <div class="container">
         <a href="insert.php">
         <input id="insbtn" value="Add songs?"/>
         </a>
            
        </div>
        </section>
          

   <footer>
    
    <p>Contact us on :  <i class="fas fa-envelope"></i></p>
    <p>swarnakadagadkai.1JS17IS080@gmail.com</p>
     </footer>
        
     
    


</body>
</html>