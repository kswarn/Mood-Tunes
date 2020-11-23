<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
</html>
<script>
function addfavs(id){
	$.ajax({
		url: "addfavs.php",
		type: "post",
		data:{
			song_id: id
		},
		success: function(obj){
			console.log(obj);
			if(obj == 'true'){
				x.classList.toggle("fa-thumbs-down");
				//$('#following-btn').css('display', 'inline');
				//$('#follow-btn').css('display', 'none');
			}
		},
		error: function(obj){
			console.log(obj);
		}
	});

}
function removefavs(id){
	$.ajax({
		url: "removefavs.php",
		type: "post",
		data:{
			play_id: id
		},
		success: function(obj){
			console.log(obj);
			if(obj == 'true'){
				x.classList.toggle("fa-thumbs-up");
				//$('#following-btn').css('display', 'none');
				//$('#follow-btn').css('display', 'inline');
			}
		}
	});
}
</script>