@extends('layouts.app')
@section('content')
@include('layouts.nav')

<style type="text/css">
	#map {
  width:100%;
  height:500px;
}

pre {
    min-width:300px;
    white-space: pre-wrap;     
    white-space: -moz-pre-wrap;
    white-space: -pre-wrap;    
    white-space: -o-pre-wrap;  
    word-wrap: break-word;     
}

.leaflet-popup-content-wrapper {
    min-width: 350px;
}
.expected_result {
  position:absolute;
  left:0;
  top:0;
  display: block;
  z-index:10000;
  width:40%;
  border-right:5px solid;
  border-bottom:5px solid;
}
</style>

<div class="container-fluid no-gutters my-no-gutters b-general">
   <div class="panel panel-default">
      <div class="panel-body header-name">
         <h3>Ubicar Recursos</h3>
         

<div class="map_container">
 <div id="map"></div>
</div>





      </div>
   </div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.2.0/leaflet.js'></script>
<script src='https://npmcdn.com/@turf/turf/turf.min.js'></script>
<script>
  var map = L.map('map').setView([4.651350, -74.107121], 12);

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

var features = [
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.539697,
                55.896721
            ]
        },
        "properties": {
            "id": 87025,
            "property": 111,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.539985,
                55.896151
            ]
        },
        "properties": {
            "id": 87026,
            "property": 111,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.540057,
                55.897624
            ]
        },
        "properties": {
            "id": 87027,
            "property": 114,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.534838,
                55.897518
            ]
        },
        "properties": {
            "id": 87028,
            "property": 120,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.534092,
                55.897513
            ]
        },
        "properties": {
            "id": 87029,
            "property": 120,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.533328,
                55.897513
            ]
        },
        "properties": {
            "id": 87030,
            "property": 120,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.53164,
                55.897508
            ]
        },
        "properties": {
            "id": 87031,
            "property": 120,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.530903,
                55.897483
            ]
        },
        "properties": {
            "id": 87032,
            "property": 120,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.541485,
                55.891254
            ]
        },
        "properties": {
            "id": 87049,
            "property": 160,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.540443,
                55.891703
            ]
        },
        "properties": {
            "id": 87050,
            "property": 106,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.541395,
                55.892345
            ]
        },
        "properties": {
            "id": 87051,
            "property": 104,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.54135,
                55.893899
            ]
        },
        "properties": {
            "id": 87053,
            "property": 30,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.539626,
                55.895358
            ]
        },
        "properties": {
            "id": 87054,
            "property": 110,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.542419,
                55.894662
            ]
        },
        "properties": {
            "id": 87055,
            "property": 230,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.542168,
                55.89556
            ]
        },
        "properties": {
            "id": 87056,
            "property": 52,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.541485,
                55.89611
            ]
        },
        "properties": {
            "id": 87057,
            "property": 42,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.541305,
                55.895535
            ]
        },
        "properties": {
            "id": 87058,
            "property": 63,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.541099,
                55.89665
            ]
        },
        "properties": {
            "id": 87059,
            "property": 115,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.542356,
                55.896357
            ]
        },
        "properties": {
            "id": 87060,
            "property": 108,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.542222,
                55.897518
            ]
        },
        "properties": {
            "id": 87061,
            "property": 160,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.541296,
                55.897079
            ]
        },
        "properties": {
            "id": 87062,
            "property": 140,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.540713,
                55.893258
            ]
        },
        "properties": {
            "id": 87064,
            "property": 60,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.54003,
                55.893243
            ]
        },
        "properties": {
            "id": 87065,
            "property": 60,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.540713,
                55.89395
            ]
        },
        "properties": {
            "id": 87066,
            "property": 60,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.541018,
                55.894414
            ]
        },
        "properties": {
            "id": 87067,
            "property": 60,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.539976,
                55.89397
            ]
        },
        "properties": {
            "id": 87069,
            "property": 60,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.539976,
                55.894742
            ]
        },
        "properties": {
            "id": 87070,
            "property": 60,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.538503,
                55.893233
            ]
        },
        "properties": {
            "id": 87071,
            "property": 57,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.539051,
                55.894071
            ]
        },
        "properties": {
            "id": 87072,
            "property": 75,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.538062,
                55.892673
            ]
        },
        "properties": {
            "id": 87073,
            "property": 84,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.536984,
                55.893001
            ]
        },
        "properties": {
            "id": 87075,
            "property": 108,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.536958,
                55.892309
            ]
        },
        "properties": {
            "id": 87076,
            "property": 108,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.537865,
                55.891936
            ]
        },
        "properties": {
            "id": 87077,
            "property": 84,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.533041,
                55.891249
            ]
        },
        "properties": {
            "id": 87082,
            "property": 72,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.532816,
                55.891628
            ]
        },
        "properties": {
            "id": 87083,
            "property": 72,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.533346,
                55.89188
            ]
        },
        "properties": {
            "id": 87084,
            "property": 72,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.531595,
                55.89294
            ]
        },
        "properties": {
            "id": 87085,
            "property": 36,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.531631,
                55.893389
            ]
        },
        "properties": {
            "id": 87086,
            "property": 48,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.534775,
                55.891754
            ]
        },
        "properties": {
            "id": 87087,
            "property": 72,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.534299,
                55.892006
            ]
        },
        "properties": {
            "id": 87088,
            "property": 72,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.534092,
                55.892375
            ]
        },
        "properties": {
            "id": 87089,
            "property": 72,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.534568,
                55.892607
            ]
        },
        "properties": {
            "id": 87090,
            "property": 70,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.533283,
                55.893127
            ]
        },
        "properties": {
            "id": 87091,
            "property": 352,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.535772,
                55.892304
            ]
        },
        "properties": {
            "id": 87092,
            "property": 72,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.535341,
                55.892541
            ]
        },
        "properties": {
            "id": 87093,
            "property": 72,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.535583,
                55.893056
            ]
        },
        "properties": {
            "id": 87094,
            "property": 72,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.53614,
                55.893283
            ]
        },
        "properties": {
            "id": 87095,
            "property": 72,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.53738,
                55.894025
            ]
        },
        "properties": {
            "id": 87096,
            "property": 80,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.537362,
                55.894783
            ]
        },
        "properties": {
            "id": 87097,
            "property": 60,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.538107,
                55.894783
            ]
        },
        "properties": {
            "id": 87098,
            "property": 60,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.535098,
                55.895282
            ]
        },
        "properties": {
            "id": 87099,
            "property": 198,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.533607,
                55.894818
            ]
        },
        "properties": {
            "id": 87100,
            "property": 112,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.537335,
                55.896257
            ]
        },
        "properties": {
            "id": 87101,
            "property": 60,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.533984,
                55.896499
            ]
        },
        "properties": {
            "id": 87102,
            "property": 80,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.534864,
                55.896544
            ]
        },
        "properties": {
            "id": 87103,
            "property": 64,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.538,
                55.896585
            ]
        },
        "properties": {
            "id": 87104,
            "property": 80,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.538619,
                55.897054
            ]
        },
        "properties": {
            "id": 87105,
            "property": 60,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.539338,
                55.897443
            ]
        },
        "properties": {
            "id": 87106,
            "property": 80,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.52916,
                55.892193
            ]
        },
        "properties": {
            "id": 87122,
            "property": 400,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.528989,
                55.893975
            ]
        },
        "properties": {
            "id": 87123,
            "property": 220,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.530867,
                55.89294
            ]
        },
        "properties": {
            "id": 87124,
            "property": 48,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.530067,
                55.893495
            ]
        },
        "properties": {
            "id": 87125,
            "property": 60,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.52872,
                55.89501
            ]
        },
        "properties": {
            "id": 87126,
            "property": 378,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.530067,
                55.894147
            ]
        },
        "properties": {
            "id": 87127,
            "property": 60,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.53084,
                55.894152
            ]
        },
        "properties": {
            "id": 87128,
            "property": 48,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.531478,
                55.893793
            ]
        },
        "properties": {
            "id": 87129,
            "property": 48,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.530058,
                55.894959
            ]
        },
        "properties": {
            "id": 87130,
            "property": 128,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.53172,
                55.894868
            ]
        },
        "properties": {
            "id": 87131,
            "property": 144,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.532466,
                55.894258
            ]
        },
        "properties": {
            "id": 87132,
            "property": 108,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.532717,
                55.893945
            ]
        },
        "properties": {
            "id": 87133,
            "property": 111,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.530283,
                55.895908
            ]
        },
        "properties": {
            "id": 87134,
            "property": 210,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.53005,
                55.896842
            ]
        },
        "properties": {
            "id": 87135,
            "property": 128,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.540739,
                55.890492
            ]
        },
        "properties": {
            "id": 87148,
            "property": 160,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.539239,
                55.890482
            ]
        },
        "properties": {
            "id": 87150,
            "property": 128,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.537721,
                55.890467
            ]
        },
        "properties": {
            "id": 87152,
            "property": 160,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.538107,
                55.891244
            ]
        },
        "properties": {
            "id": 87153,
            "property": 80,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.537011,
                55.89133
            ]
        },
        "properties": {
            "id": 87155,
            "property": 210,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.527031,
                55.892092
            ]
        },
        "properties": {
            "id": 87158,
            "property": 378,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.526124,
                55.893071
            ]
        },
        "properties": {
            "id": 87159,
            "property": 189,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.526124,
                55.894243
            ]
        },
        "properties": {
            "id": 87160,
            "property": 189,
        }
    },
    {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [
                37.526762,
                55.894964
            ]
        },
        "properties": {
            "id": 87161,
            "property": 252,
        }
    }
];

var defaultPointStyle = {
    radius: 3,
    color: "#0000ff",
    fillColor: "#0000ff",
    fillOpacity: 1,
};
var closestPointsStyle = {
    radius: 3,
    color: "#ff0000",
    fillColor: "#ff0000",
    fillOpacity: 1,
};
var startPointStyle = {
    radius: 10,
    color: "green",
    fillColor: "green",
    fillOpacity: 1,
};

//add all Points in geojson data on map
L.geoJSON(features, {
    pointToLayer: function (feature) {
        return L.circleMarker(feature.geometry.coordinates.reverse(), defaultPointStyle);
    },
    onEachFeature: function (feature, layer) {
        var html = ['<pre>', JSON.stringify(feature.properties, null, 4), "</pre>"].join("");
        layer.bindPopup(html);
    }
}).addTo(map);


// navigator.geolocation.getCurrentPosition(function(location) {
//   var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);

// });

//adding start Point on map
var startPointLatLon = navigator.geolocation.getCurrentPosition(function(location) {
   new L.LatLng(location.coords.latitude, location.coords.longitude);

});

console.log(startPointLatLon);




L.circleMarker(startPointLatLon, startPointStyle).addTo(map).bindPopup('I\'m the start Point');

var i = 0;
var closestPoints = [];
var tfC = turf.featureCollection(features);
var tpC = turf.point(startPointLatLon);
// finding 13 (for example) closest points to nothernmost Point
while(i < 13) {
  var geoJ = turf.nearestPoint(tpC, tfC);
  closestPoints.push(geoJ);
  var id = geoJ.properties.featureIndex;
  //remove from features point that was found
  features.splice(id, 1);
  i++;
};

// adding closest points on map
L.geoJSON(closestPoints, {
    pointToLayer: function (feature) {
        return L.circleMarker(feature.geometry.coordinates, closestPointsStyle);
    },
    onEachFeature: function (feature, layer) {
        feature.properties.title = "I'm one of nearest points";
        var html = ['<pre>', JSON.stringify(feature.properties, null, 4), "</pre>"].join("");
        layer.bindPopup(html);
    }
}).addTo(map);

</script>
@endsection