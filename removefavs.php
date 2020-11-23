<?php
	session_start();
	require 'dbconfig/config.php';
	$sid = $_POST['song_id'];
	$uname = $_SESSION['username'];
	$uid = mysqli_fetch_assoc(mysqli_query($conn, "SELECT user_id FROM users WHERE username ='$uname'"))['user_id'];
	$que = "UPDATE user_songs SET deleted = '1' WHERE user_id = '$uid' AND song_id = '$sid'";
	$res = mysqli_query($conn, $que);
	if($res){
		echo "true";
	}
	else{
		echo "false";
	}
	mysqli_close($conn);
?>