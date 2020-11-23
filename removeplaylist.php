<?php
	session_start();
	require 'dbconfig/config.php';
	$plid = $_POST['play_id'];
	$uname = $_SESSION['username'];
	$uid = mysqli_fetch_assoc(mysqli_query($conn, "SELECT user_id FROM users WHERE username ='$uname'"))['user_id'];
	$que = "UPDATE pl_users SET deleted = '1' WHERE user_id = '$uid' AND pl_id = '$plid'";
	$res = mysqli_query($conn, $que);
	if($res){
		echo "true";
	}
	else{
		echo "false";
	}
	mysqli_close($conn);
?>