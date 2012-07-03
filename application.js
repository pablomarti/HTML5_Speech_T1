$(document).ready(function() {
	if (document.createElement("input").webkitSpeech === undefined) {
		alert("Speech input is not supported in your browser.");
	}

	$("#speech").bind('webkitspeechchange', function(){ 
		$.ajax({ 
			data: "speech=" + $(this).val(), 
			type: "GET", 
			dataType: "json", 
			url: "process.php", 
			success: function(data){ 	
				$("#speech").val("");
				$("#result_box").append("<br />" + data.message);
				if(parseInt(data.execute) == 1){
					eval(data.js_code);
				}
			} 
		});
	});

	//onwebkitstartspeechinput();
});

