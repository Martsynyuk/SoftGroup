window.onload = function() {
	
	document.getElementById('send_coment').onclick = function(e) {
		e.preventDefault();
		Coments.createComents();
	}
	
	document.getElementById('delete_coment').onclick = function(e) {
		e.preventDefault();
	}
	
	document.getElementById('coment_rating').onclick = function(e) {
		
	}
}

var Coments = {
	
	createComents: function() {
		var text = document.getElementById('coment').value
		
		if(text == '') {
			alert('empty coment');
		} else {
			Coments.axaj('create', {'text': text});
		}
	},
	
	deleteComents: function() {
		
	},
	
	addRating: function() {
		
	},
	
	axaj: function(action, data = {}){
		
		var xmlhttp;

	    xmlhttp = new XMLHttpRequest();

	    xmlhttp.onreadystatechange = function() {
	        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	        	//console.log(JSON.parse(xmlhttp.responseText));
	        	console.log(xmlhttp.responseText);
	        }
	    }
	    
		xmlhttp.open("POST", "/coments/" + action, true);
		xmlhttp.send(data);
	}
}