		//set up markers 
		var myMarkers = {"markers": [
				{"latitude": "-7.0984531", "longitude":"107.4980839", "icon": "assets/theme1/img/map-marker.png"}
			]
		};
		
		//set up map options
		$("#map").mapmarker({
			zoom	: 10,
			center	: 'Cikepa',
			markers	: myMarkers
		});

