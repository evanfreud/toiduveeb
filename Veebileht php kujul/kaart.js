function initMap() {
	var map;
	
		 
	var asukoht = new google.maps.LatLng(58.656429, 25.368235);
	var asukoht1 = new google.maps.LatLng(58.378220, 26.714820);
	var asukoht2 = new google.maps.LatLng(59.356780, 26.348498);
	var asukoht3 = new google.maps.LatLng(59.419570, 24.806678);
	var asukoht4 = new google.maps.LatLng(58.263643, 22.491123);
	var asukoht5 = new google.maps.LatLng(58.392872, 24.505173);
        
	map = new google.maps.Map(document.getElementById('map'), {
        center: asukoht,
        zoom: 7
    });
	
	var marker1 = new google.maps.Marker({
        position: asukoht1,
        map: map,
        title: 'Hello World!'
    });
		
	var marker2 = new google.maps.Marker({
        position: asukoht2,
        map: map,
        title: 'Hello World!'
    });
		
	var marker3 = new google.maps.Marker({
        position: asukoht3,
        map: map,
        title: 'Hello World!'
    });
		
	var marker4 = new google.maps.Marker({
        position: asukoht4,
        map: map,
        title: 'Hello World!'
    });
		
	var marker5 = new google.maps.Marker({
        position: asukoht5,
        map: map,
        title: 'Hello World!'
    });
		
	var infowindow1 = new google.maps.InfoWindow({
		content: '<img src="logo.png" width="50px" height="50px" /> <div style="float:right;">Toiduveeb <br/>  Asukoht: <br /> J.Liivi 2</div>'
	});
	infowindow1.open(map,marker1);
		
	var infowindow2 = new google.maps.InfoWindow({
		content: "Rakvere esindus"
	});
		
	var infowindow3 = new google.maps.InfoWindow({
		content: "Pealadu"
	});
	infowindow3.open(map,marker3);
		
	var infowindow4 = new google.maps.InfoWindow({
		content: "Kuressaare esindus"
	});
	
	var infowindow5 = new google.maps.InfoWindow({
		content: "Pärnu esindus"
	});
		
	google.maps.event.addListener(marker2, 'click', function() {
    infowindow2.open(map,marker2);
    });
 
	google.maps.event.addListener(marker4, 'click', function() {
    infowindow4.open(map,marker4);
    });

	google.maps.event.addListener(marker5, 'click', function() {
    infowindow5.open(map,marker5);
    });
  
	google.maps.event.addListener(marker1,'click',function() {
    map.setZoom(15);
    map.setCenter(marker1.getPosition());
    });
  
    google.maps.event.addListener(marker3,'click',function() {
    map.setZoom(15);
    map.setCenter(marker3.getPosition());
    });
  
}
	  