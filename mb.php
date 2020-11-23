<?php
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<title>MOOD BOOSTER</title>
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
  			if(isset($_SESSION['username'])){
	  			$uname = $_SESSION['username'];
				$uid = mysqli_fetch_assoc(mysqli_query($conn, "SELECT user_id FROM users WHERE username ='$uname'"))['user_id'];
				$res = mysqli_query($conn, "SELECT *FROM pl_users WHERE user_id = '$uid' AND pl_id = '1100' AND deleted = '0'");
				if(mysqli_num_rows($res) > 0){
  		?>
  		<button class="btn btn-info btn-sm" id="following-btn" onclick="removeplaylist(1100)">Following</button>
  		<button class="btn btn-info btn-sm" onclick="addplaylists(1100)" id="follow-btn" style="display: none;">Follow</button>
  		<?php }
  		else { ?>
  		<button class="btn btn-info btn-sm" id="following-btn" onclick="removeplaylist(1100)" style="display: none;">Following</button>
  		<button class="btn btn-info btn-sm" onclick="addplaylists(1100)" id="follow-btn">Follow</button>
  		<?php }} ?>
  		
	</nav>
	<div class="jumbotron jumbotron bg-cover bg-cover1">

		<div class="overlay"></div>
		<div class="container">
			<h1 class="">MOOD BOOSTER</h1>
		</div>
	</div>
	     
          <section id="boxes">
		  <div class="container">
			  <div class="box">
				  <img id="img" src="images/LOVER.jpg">
			   <h3>ME-Taylor Swift</h3>
			   <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
			   <p>Taylor Alison Swift is an American singer-songwriter, record producer, music video director and actress. 
				   She is known for narrative songs about her personal life, which have received widespread media coverage.
				</p>
				<p>Listen to it<a onclick="add(this)" href="https://youtu.be/FuXNumBwDOM">  here</a></p>
				

			</div>
			<div class="box">
				<img id="img" src="images/LOVER.jpg">
			   <h3>Afterglow-Taylor Swift</h3>
			   <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
			   <p>Taylor Alison Swift is an American singer-songwriter, record producer, music video director and actress. 
				   She is known for narrative songs about her personal life, which have received widespread media coverage.</p>
				   <p>Listen to it<a href="https://www.youtube.com/watch?v=8HxbqAsppwU">  here</a></p>
				  
			   
			</div>
			<div class="box">
				<img id="img" src="images/SUCKER.jpg">
			   <h3>Sucker-Jonas Brothers</h3>
			   <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
			   <p>The Jonas Brothers are an American pop rock band. Formed in 2005, they gained popularity from their appearances on the Disney Channel television network. 
				   They consist of three brothers: Kevin Jonas, Joe Jonas, and Nick Jonas.</p>
				   <p>Listen to it<a href="https://youtu.be/CnAmeh0-E-U">  here</a></p>
			   
			</div>
			<div class="box">
				<img id="img"src="images/HAPPINESSBEGINS.jpg">
				
			   <h3>Only human-Jonas Brothers</h3>
			   <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
			   <p>The Jonas Brothers are an American pop rock band. Formed in 2005, they gained popularity from their appearances on the Disney Channel television network. 
				   They consist of three brothers: Kevin Jonas, Joe Jonas, and Nick Jonas.</p>
				   <p>Listen to it<a href="https://youtu.be/EQ51hgSxEaI">  here</a></p>
			   
			</div>
			<div class="box">
				<img id="img"src="images/DWH.jpg">
				
			   <h3>Grenade-Bruno Mars</h3>
			   <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
			   <p>Peter Gene Hernandez, known professionally as Bruno Mars, is an American singer, songwriter, record producer, multi-instrumentalist, and dancer.
					He is known for his stage performances, retro showmanship, and for performing in a wide range of musical style</p>
					<p>Listen to it<a href="https://youtu.be/SR6iYWJxHqs">  here</a></p>
			   
			</div>
			<div class="box">
				<img id="img" src="images/JTWYA.jpg">
			   <h3>Just the way you are-Bruno Mars</h3>
			   <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
			   <p>Peter Gene Hernandez, known professionally as Bruno Mars, is an American singer, songwriter, record producer, multi-instrumentalist, and dancer. 
				   He is known for his stage performances, retro showmanship, and for performing in a wide range of musical style</p>
				   <p>Listen to it<a href="https://youtu.be/LjhCEhWiKXk">  here</a></p>
			   
			</div>
			<div class="box">
				<img id="img"src="images/7 RINGS.jpg">
			   <h3>7 rings-Ariana Grande</h3>
			   <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
			   <p>Ariana Grande-Butera is an American singer, songwriter, and actress. A multi-platinum, Grammy Award-winning recording artist, she is known for her wide vocal range, which critics have often compared to that of Mariah Carey.
					Born in Boca Raton, Florida, Gr</p>
					<p>Listen to it<a href="https://youtu.be/QYh6mYIJG2Y">  here</a></p>
			   
			</div>
			<div class="box">
				<img id="img"src="images/TUN.jpg">
			   <h3>Thank u,Next-Ariana Grande</h3>
			   <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
			   <p>Ariana Grande-Butera is an American singer, songwriter, and actress. A multi-platinum, Grammy Award-winning recording artist, she is known for her wide vocal range, which critics have often compared to that of Mariah Carey. 
				   Born in Boca Raton, Florida, Gr</p>
				   <p>Listen to it<a href="https://youtu.be/gl1aHhXnN1k">  here</a></p>
			   
			</div>
		  </div>

</section>
           

 	</div>
</body>
</html>