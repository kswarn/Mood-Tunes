<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>HAPPY TUNES</title>
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
			$res = mysqli_query($conn, "SELECT *FROM pl_users WHERE user_id = '$uid' AND pl_id = '1102' AND deleted = '0'");
			if(mysqli_num_rows($res) > 0){
  		?>
  		<button class="btn btn-info btn-sm" id="following-btn" onclick="removeplaylist(1102)">Following</button>
  		<button class="btn btn-info btn-sm" onclick="addplaylists(1102)" id="follow-btn" style="display: none;">Follow</button>
  		<?php }
  		else { ?>
  		<button class="btn btn-info btn-sm" id="following-btn" onclick="removeplaylist(1102)" style="display: none;">Following</button>
  		<button class="btn btn-info btn-sm" onclick="addplaylists(1102)" id="follow-btn">Follow</button>
  		<?php }} ?>
	</nav>
	<div class="jumbotron jumbotron bg-cover bg-cover5">

		<div class="overlay"></div>
		<div class="container">
			<h1 class="">HAPPY TUNES</h1>
		</div>
	</div>
	     
          <section id="boxes">
		  <div class="container">
			  <div class="box">
				  <img id="img" src="images/FF.jpg">
			   <h3>Learn To Fly-Foo Fighters</h3>
			   <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
			   <p>Foo Fighters is an American rock band, formed in Seattle, Washington, in 1994. It was founded by Nirvana drummer Dave Grohl as a one-man project following the dissolution of Nirvana after the suicide of Kurt Cobain.</p>
				<p>Listen to it<a href="https://youtu.be/1VQ_3sBZEm0">  here</a></p>

			</div>
			<div class="box">
				<img id="img" src="images/C&G.jpg">
			   <h3>Run-Foo Fighters</h3>
			   <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
			   <p>Foo Fighters is an American rock band, formed in Seattle, Washington, in 1994. It was founded by Nirvana drummer Dave Grohl as a one-man project following the dissolution of Nirvana after the suicide of Kurt Cobain.</p>
				   <p>Listen to it<a href="https://youtu.be/ifwc5xgI3QM">  here</a></p>
			   
			</div>
			<div class="box">
				<img id="img" src="images/CALI.jpg">
			   <h3>Californication-RHCP</h3>
			   <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
			   <p>Red Hot Chili Peppers are an American rock band formed in Los Angeles in 1983. The group's musical style primarily consists of rock with an emphasis on funk, as well as elements from other genres such as punk rock and psychedelic rock.</p>
				   <p>Listen to it<a href="https://youtu.be/YlUKcNNmywk">  here</a></p>
			   
			</div>
			<div class="box">
				<img id="img"src="images/CALI.jpg">
			   <h3>Scar Tissue-RHCP</h3>
			   <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
			   <p>Red Hot Chili Peppers are an American rock band formed in Los Angeles in 1983. The group's musical style primarily consists of rock with an emphasis on funk, as well as elements from other genres such as punk rock and psychedelic rock.</p>
				   <p>Listen to it<a href="https://www.youtube.com/watch?v=mzJj5">  here</a></p>
			   
			</div>
			<div class="box">
				<img id="img"src="images/WTSMG.jpg">
			   <h3>Wonderwall-OASIS</h3>
			   <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
			   <p>Oasis were an English rock band formed in Manchester in 1991. Developed from an earlier group, the Rain, the band originally consisted of Liam Gallagher, Paul "Bonehead" Arthurs, Paul "Guigsy" McGuigan and Tony McCarroll.</p>
			   <p>Listen to it<a href="https://youtu.be/bx1Bh8ZvH84">  here</a></p>
			   
			</div>
			<div class="box">
				<img id="img" src="images/WTSMG.jpg">
			   <h3>Don't look back in anger-OASIS</h3>
			   <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
			   <p>Oasis were an English rock band formed in Manchester in 1991. Developed from an earlier group, the Rain, the band originally consisted of Liam Gallagher, Paul "Bonehead" Arthurs, Paul "Guigsy" McGuigan and Tony McCarroll.</p>
				   <p>Listen to it<a href="https://youtu.be/r8OipmKFDeM">  here</a></p>
			   
			</div>
			<div class="box">
				<img id="img"src="images/TEN.jpg">
			   <h3>Black-Pearl Jam</h3>
			   <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
			   <p>Pearl Jam is an American rock band formed in 1990 in Seattle, Washington. The band's current lineup comprises founding members Eddie Vedder, Mike McCready, Stone Gossard and Jeff Ament and Matt Cameron. Keyboardist Boom Gaspar has also been a session/touring member with the band since 2002.</p>
					<p>Listen to it<a href="https://youtu.be/4q9UafsiQ6k">  here</a></p>
			   
			</div>
			<div class="box">
				<img id="img"src="images/TEN.jpg">
			   <h3>Jeremy-Pearl Jam</h3>
			   <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
			   <p>Pearl Jam is an American rock band formed in 1990 in Seattle, Washington. The band's current lineup comprises founding members Eddie Vedder, Mike McCready, Stone Gossard and Jeff Ament and Matt Cameron. Keyboardist Boom Gaspar has also been a session/touring member with the band since 2002./p>
				   <p>Listen to it<a href="https://youtu.be/MS91knuzoOA">  here</a></p>
			   
            </div>
            <div class="box">
				<img id="img"src="images/CS.jpg">
			   <h3>Radioactive-Imagine Dragons</h3>
			   <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
			   <p>Imagine Dragons is an American pop rock band from Las Vegas, Nevada, consisting of lead vocalist Dan Reynolds, lead guitarist Wayne Sermon, bassist Ben McKee, and drummer Daniel Platzman.</p>
				   <p>Listen to it<a href="https://youtu.be/ktvTqknDobU">  here</a></p>
			   
            </div>
            <div class="box">
				<img id="img"src="images/WIT.jpg">
			   <h3>Whatever it takes-Imagine Dragons</h3>
			   <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
			   <p>Imagine Dragons is an American pop rock band from Las Vegas, Nevada, consisting of lead vocalist Dan Reynolds, lead guitarist Wayne Sermon, bassist Ben McKee, and drummer Daniel Platzman.</p>
				   <p>Listen to it<a href="https://youtu.be/gOsM-DYAEhY-">  here</a></p>
			   
			</div>
		  </div>

</section>
           

 	</div>
</body>
</html>