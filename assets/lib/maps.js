jQuery(document).ready(function($) {
	function CustomMarker(latlng, map, args) {
	this.latlng = latlng;	
	this.args = args;	
	this.setMap(map);	
}

CustomMarker.prototype = new google.maps.OverlayView();

CustomMarker.prototype.draw = function() {
	
	var self = this;
	
	var div = this.div;
	
	if (!div) {

		div = this.div = document.createElement('div');
		
		
		div.className = 'marker';


		setTimeout(function(){
			$(".marker").html(' <div class="marker2" > <h4 class="titulo"> Endereço </h4> <p> R. Prof. Fernando Moreira, 775 <br> 80430-080 <br> Curitiba - PR <br> +55 41 3340 850 </p> <img src="assets/img/seta-black.png" alt=""> </div> ');
		}, 3000)

		// h3.html('teste');
		
		// div.style.position = 'absolute';
		// div.style.cursor = 'pointer';
		// div.style.width = '20px';
		// div.style.height = '20px';
		// div.style.background = 'blue';
		
		if (typeof(self.args.marker_id) !== 'undefined') {
			div.dataset.marker_id = self.args.marker_id;
		}
		
		google.maps.event.addDomListener(div, "click", function(event) {
			alert('Deu boa!');			
			google.maps.event.trigger(self, "click");
		});
		
		var panes = this.getPanes();
		panes.overlayImage.appendChild(div);
	}
	
	var point = this.getProjection().fromLatLngToDivPixel(this.latlng);
	
	if (point) {
		div.style.left = (point.x - 10) + 'px';
		div.style.top = (point.y - 20) + 'px';
	}
};

CustomMarker.prototype.remove = function() {
	if (this.div) {
		this.div.parentNode.removeChild(this.div);
		this.div = null;
	}	
};

CustomMarker.prototype.getPosition = function() {
	return this.latlng;	
};

function initialize() {

	var styles = [
	{
		"featureType": "administrative",
		"elementType": "all",
		"stylers": [
		{
			"hue": "#ffffff"
		},
		{
			"lightness": 100
		},
		{
			"visibility": "off"
		}
		]
	},
	{
		"featureType": "administrative",
		"elementType": "labels",
		"stylers": [
		{
			"visibility": "off"
		}
		]
	},
	{
		"featureType": "landscape",
		"elementType": "all",
		"stylers": [
		{
			"hue": "#ffffff"
		},
		{
			"saturation": -100
		},
		{
			"lightness": 100
		},
		{
			"visibility": "on"
		}
		]
	},
	{
		"featureType": "landscape",
		"elementType": "geometry",
		"stylers": [
		{
			"color": "#fddb03"
		}
		]
	},
	{
		"featureType": "landscape",
		"elementType": "labels",
		"stylers": [
		{
			"visibility": "on"
		}
		]
	},
	{
		"featureType": "landscape.natural.landcover",
		"elementType": "labels",
		"stylers": [
		{
			"visibility": "on"
		}
		]
	},
	{
		"featureType": "landscape.natural.terrain",
		"elementType": "labels",
		"stylers": [
		{
			"visibility": "on"
		}
		]
	},
	{
		"featureType": "poi",
		"elementType": "all",
		"stylers": [
		{
			"hue": "#ff0000"
		},
		{
			"saturation": -100
		},
		{
			"lightness": 100
		},
		{
			"visibility": "off"
		}
		]
	},
	{
		"featureType": "poi",
		"elementType": "labels",
		"stylers": [
		{
			"visibility": "off"
		}
		]
	},
	{
		"featureType": "road",
		"elementType": "geometry",
		"stylers": [
		{
			"saturation": -100
		},
		{
			"lightness": -100
		},
		{
			"visibility": "simplified"
		},
		{
			"color": "#ffffff"
		}
		]
	},
	{
		"featureType": "road",
		"elementType": "labels",
		"stylers": [
		{
			"saturation": -100
		},
		{
			"lightness": 100
		},
		{
			"visibility": "off"
		},
		{
			"color": "#000000"
		}
		]
	},
	{
		"featureType": "road.highway",
		"elementType": "geometry",
		"stylers": [
		{
			"color": "#ffffff"
		}
		]
	},
	{
		"featureType": "road.highway",
		"elementType": "labels",
		"stylers": [
		{
			"visibility": "simplified"
		},
		{
			"color": "#a9a8a8"
		}
		]
	},
	{
		"featureType": "road.arterial",
		"elementType": "geometry",
		"stylers": [
		{
			"color": "#fcfcfa"
		}
		]
	},
	{
		"featureType": "road.arterial",
		"elementType": "labels",
		"stylers": [
		{
			"visibility": "simplified"
		},
		{
			"color": "#a9a9a9"
		}
		]
	},
	{
		"featureType": "road.local",
		"elementType": "geometry",
		"stylers": [
		{
			"color": "#fafaf8"
		}
		]
	},
	{
		"featureType": "road.local",
		"elementType": "labels",
		"stylers": [
		{
			"visibility": "simplified"
		},
		{
			"color": "#585656"
		}
		]
	},
	{
		"featureType": "transit",
		"elementType": "geometry",
		"stylers": [
		{
			"hue": "#000000"
		},
		{
			"lightness": -100
		},
		{
			"visibility": "on"
		}
		]
	},
	{
		"featureType": "transit",
		"elementType": "labels",
		"stylers": [
		{
			"hue": "#ff0000"
		},
		{
			"lightness": 100
		},
		{
			"visibility": "off"
		}
		]
	},
	{
		"featureType": "water",
		"elementType": "all",
		"stylers": [
		{
			"hue": "#ffffff"
		},
		{
			"saturation": -100
		},
		{
			"lightness": 100
		},
		{
			"visibility": "on"
		}
		]
	}
	]

	var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});

	var myLatlng = new google.maps.LatLng(-25.429604,-49.285204);
	var mapOptions = {
		zoom: 17,
		center: myLatlng,
		scrollwheel: false,
			// disableDefaultUI: true,
			mapTypeControlOptions: {
				mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
			}
		}

		var map = new google.maps.Map(document.getElementById('map'), mapOptions);

		map.mapTypes.set('map_style', styledMap);
		map.setMapTypeId('map_style');

		overlay = new CustomMarker(
			myLatlng, 
			map,
			{
				marker_id: '123'
			}
			);
	}

	google.maps.event.addDomListener(window, 'load', initialize);


});
