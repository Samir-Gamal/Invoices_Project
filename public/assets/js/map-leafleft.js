$(function() {
	'use strict';
	// Leftlet Maps
	var mymap = L.map('leaflet1').setView([51.505, -0.09], 13);
	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap<\/a> contributors, ' + '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA<\/a>, ' + 'Imagery © <a href="http://mapbox.com">Mapbox<\/a>',
		id: 'mapbox.streets'
	}).addTo(mymap);
	// Adding a Popup
	var mymap2 = L.map('leaflet2').setView([51.505, -0.09], 13);
	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap<\/a> contributors, ' + '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA<\/a>, ' + 'Imagery © <a href="http://mapbox.com">Mapbox<\/a>',
		id: 'mapbox.streets'
	}).addTo(mymap2);
	L.marker([51.5, -0.09]).addTo(mymap2).bindPopup("<b>Hello world!<\/b><br />I am a popup.").openPopup();
	// Adding a Circle
	var mymap3 = L.map('leaflet3').setView([51.505, -0.09], 13);
	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap<\/a> contributors, ' + '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA<\/a>, ' + 'Imagery © <a href="http://mapbox.com">Mapbox<\/a>',
		id: 'mapbox.streets'
	}).addTo(mymap3);
	L.circle([51.508, -0.11], {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5,
		radius: 500
	}).addTo(mymap3);
});