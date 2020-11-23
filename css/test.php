<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>SLEEP WELL</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/content.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="addplaylist.js"></script>
  <style>
.fa {
  font-size: 20px;
  cursor: pointer;
  user-select: none;
}

.fa:hover {
  color: white;
}
</style>
</head>
<body>
<script>
function myFunction(x) {
	

  x.classList.toggle("fa-thumbs-down");

 
}
</script>
	<nav class="navbar navbar-expand-sm navbar-light bg-light">
         <a class="navbar-brand" href="home.php">MOOD TUNES</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="navbarNav">
	    	<ul class="navbar-nav">
	      		<li class="nav-item active">
	       			<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
	      		</li>
	      		<li class=" nav-item">
	        		<a class="nav-link" href="playlists.php">Playlists</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link" href="home.php">Contact</a>
	      		</li>
	    	</ul>
  		</div>
  		<?php
  			require 'dbconfig/config.php';
  			$uname = $_SESSION['username'];
			$uid = mysqli_fetch_assoc(mysqli_query($conn, "SELECT user_id FROM users WHERE username ='$uname'"))['user_id'];
			$res = mysqli_query($conn, "SELECT *FROM pl_users WHERE user_id = '$uid' AND pl_id = '1104' AND deleted = '0'");
			if(mysqli_num_rows($res) > 0){
  		?>
  		<button class="btn btn-info btn-sm" id="following-btn" onclick="removeplaylist(1104)">Following</button>
  		<button class="btn btn-info btn-sm" onclick="addplaylists(1104)" id="follow-btn" style="display: none;">Follow</button>
  		<?php }
  		else { ?>
  		<button class="btn btn-info btn-sm" id="following-btn" onclick="removeplaylist(1104)" style="display: none;">Following</button>
  		<button class="btn btn-info btn-sm" onclick="addplaylists(1104)" id="follow-btn">Follow</button>
  		<?php } ?>
	</nav>
	<div class="jumbotron jumbotron bg-cover bg-cover4">

		<div class="overlay"></div>
		<div class="container">
			<h1 class="">SLEEP WELL</h1>
		</div>
	</div>
	     
          <section id="boxes">
		  <div class="container">
			  <div class="box">
				  <img id="img" src="images/JC.jpg">
			   <h3>Dream-John Cage</h3>

			   <?php
  			require 'dbconfig/config.php';
  			$uname = $_SESSION['username'];
			$uid = mysqli_fetch_assoc(mysqli_query($conn, "SELECT user_id FROM users WHERE username ='$uname'"))['user_id'];
			$res = mysqli_query($conn, "SELECT *FROM user_songs WHERE user_id = '$uid' AND song_id = '30' AND favs = '0'");
			if(mysqli_num_rows($res) > 0)
			{
  		       ?>
  		   <i onclick="removefavs(30)" class="fa fa-thumbs-up"></i>
  		   <i onclick="addfavs(30)" style="display: none;" class="fa fa-thumbs-up"></i>
  		
  		<?php 
  	       }
  		else { 
  	    ?>
  			<i onclick="removefavs(30)" style="display:none;" class="fa fa-thumbs-up"></i>
  		   <i onclick="addfavs(30) class="fa fa-thumbs-up"></i>
  		
  		<?php } 
			   
		?>

			   <p>John Milton Cage Jr. was an American composer, music theorist, artist, and philosopher.
                    A pioneer of indeterminacy in music, electroacoustic music, and non-standard use of musical instruments, Cage was one of the leading figures of the post-war avant-garde.
				</p>
				<p>Listen to it<a onclick="myfun(this)" href="https://www.youtube.com/watch?v=prseyHGgsVs">  here</a></p>

			</div>
			<div class="box">
				<img id="img" src="images/JC.jpg">
			   <h3>In a landscape-John Cage</h3>
			   <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
			   <p>John Milton Cage Jr. was an American composer, music theorist, artist, and philosopher.
                    A pioneer of indeterminacy in music, electroacoustic music, and non-standard use of musical instruments, Cage was one of the leading figures of the post-war avant-garde.</p>
			   
			</div>
			<div class="box">
				<img id="img" src="images/LIB.jpg">
			   <h3>Gimme Shelter-The Rolling Stones</h3>
			   <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
			   <p>The Rolling Stones are an English rock band formed in London in 1962. The first stable line-up consisted of bandleader Brian Jones, Mick Jagger, Keith Richards, Bill Wyman, Charlie Watts, and Ian Stewart</p>
				   <p>Listen to it<a href="">  here</a></p>
			   
			</div>
			<div class="box">
				<img id="img"src="images/BH.jpg">
			   <h3>Paint it black-The Rolling Stones</h3>
			   <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
			   <p>The Rolling Stones are an English rock band formed in London in 1962. The first stable line-up consisted of bandleader Brian Jones, Mick Jagger, Keith Richards, Bill Wyman, Charlie Watts, and Ian Stewart</p>
				   <p>Listen to it<a href="https://youtu.be/O4irXQhgMqg">  here</a></p>
			   
			</div>
			
		  </div>

</section>
           

 	</div>
</body>
</html>