<?php
	$url = "https://gateway-lon.watsonplatform.net/tone-analyzer/api/v3/tone?version=2017-09-21&text=";
	$apikey = "XDH0Ib7cQ5jYswmFFm07aa-BVeggMgDWIbhf3oktEbOE";
	$str = $_POST['text'];
	//$str = "Product sales have been disappointing for the past three quarters.";
	$str = str_replace(" ", "%20", $str);
	$url = $url.$str;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

	curl_setopt($ch, CURLOPT_USERPWD, 'apikey' . ':' . $apikey);

	$result = curl_exec($ch);
	if (curl_errno($ch)) {
	    echo 'Error:' . curl_error($ch);
	}
	curl_close($ch);
	//$result = str_replace('"', "'", $result);
	$res = json_decode($result, true);
	$res1 = $res['document_tone']['tones'];
	//print_r($res1);
	$score = 0;
	$tone = "sadness";
	foreach ($res1 as $key => $value) {
		if($value['score'] > $score){
			$score = $value['score'];
			$tone = $value['tone_id'];
		}
	}
	$playlist = array("anger" => "r.php", "fear" => "c.php", "joy" => "ht.php", "sadness" => "mb.php" , "analytical" => "SW.php", "confident" => "ht.php", "tentative" => "c.php");
	header('location:../'.$playlist[$tone]);
?>