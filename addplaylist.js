function addplaylists(id){
	$.ajax({
		url: "addplaylist.php",
		type: "post",
		data:{
			play_id: id
		},
		success: function(obj){
			console.log(obj);
			if(obj == 'true'){
				$('#following-btn').css('display', 'inline');
				$('#follow-btn').css('display', 'none');
			}
		},
		error: function(obj){
			console.log(obj);
		}
	});

}
function removeplaylist(id){
	$.ajax({
		url: "removeplaylist.php",
		type: "post",
		data:{
			play_id: id
		},
		success: function(obj){
			console.log(obj);
			if(obj == 'true'){
				$('#following-btn').css('display', 'none');
				$('#follow-btn').css('display', 'inline');
			}
		}
	});
}