<?php
	session_start();
	require 'dbconfig/config.php';
	$song_id = $_POST['song_id'];
	$uname = $_SESSION['username'];
	$uid = mysqli_fetch_assoc(mysqli_query($conn, "SELECT user_id FROM users WHERE username ='$uname'"))['user_id'];
	$que = "INSERT INTO user_songs VALUES('$song_id', '$uid', '0')";
	$res = mysqli_query($conn, $que);
	// if(mysqli_error($conn)){
	// 	$que = "UPDATE pl_users SET deleted='0' WHERE pl_id = '$playlist_id' AND user_id = '$uid'";
	// 	$res = mysqli_query($conn, $que);
	// }
	if($res){
		echo "true";
	}
	else{
		$que = "UPDATE user_songs SET deleted='0' WHERE song_id = '$song_id' AND user_id = '$uid'";
		$res = mysqli_query($conn, $que);
		echo "false";
	}
	mysqli_close($conn);
?>