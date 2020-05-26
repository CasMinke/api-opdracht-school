<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple Markers</title>
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<div class="buttons">
<button onclick="nederland()">nederland</button>
<button onclick="chernobyl()">chernobyl</button>
<button onclick="timessquare()">times square new york</button>
<button onclick="mountrushmore()">mountrushmore</button>
<button onclick="Nürburgring()">Nürburgring</button>
<button onclick="moskou()">moskou</button>
<button onclick="Hiroshima()">Hiroshima</button>
<button onclick="hell()">hell noorwegen</button>
</div>
<div id="map"></div>
<script>
var lati = 52.370216
var lang = 4.895168

function nederland(){
	lati = 52.370216;
	lang = 4.895168;
	var myLatLng = {lat: lati, lng: lang};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Hello World!'
        });
}
function chernobyl(){
	lati = 51.3870;
	lang = 30.0927;
	var myLatLng = {lat: lati, lng: lang};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Hello World!'
        });
}
function timessquare(){
	lati = 40.758896;
	lang = -73.985130;
	var myLatLng = {lat: lati, lng: lang};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Hello World!'
        });
}
function mountrushmore(){
	lati = 43.9685522;
	lang = -103.38183449999997;
	var myLatLng = {lat: lati, lng: lang};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Hello World!'
        });
}
function Nürburgring(){
	lati = 50.334098;
	lang = 6.942662;
	var myLatLng = {lat: lati, lng: lang};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Hello World!'
        });
}
function moskou(){
	lati = 55.751244;
	lang = 37.618423;
	var myLatLng = {lat: lati, lng: lang};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Hello World!'
        });
}
function Hiroshima(){
	lati = 34.383331;
	lang = 132.449997;
	var myLatLng = {lat: lati, lng: lang};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Hello World!'
        });
}
function hell(){
	lati = 63.4333 ;
	lang = 10.9000;
	var myLatLng = {lat: lati, lng: lang};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Hello World!'
        });
}

    function initMap() {
        var myLatLng = {lat: lati, lng: lang};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Hello World!'
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCEbCMl8vn1a6BbBdMZ39u5YAa1LyCfR0&callback=initMap">
</script>
</body>
</html>