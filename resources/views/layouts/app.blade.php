<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name', 'IngHouse') }}</title>
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
      <link href="{{ asset('css/style.css') }}" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,700,900" rel="stylesheet">
      <!-- Styles fonts-->
      <link href="{{ asset('fonts/icons/css/fontello.css') }}" rel="stylesheet">
      <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" media="screen">
      <link href="{{ asset('css/L.Control.MapCenterCoord.css') }}" rel="stylesheet" media="screen">
      <!--mapa-->
      <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}" rel="stylesheet" media="screen">
      <!--mapa-->
   </head>
   <body>
      <div id="app">
         <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                 @if (Auth::guest())
                  <li><a href="{{ route('login') }}">Login</a></li>
                  <li><a href="{{ route('register') }}">Register</a></li>
                  @else
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     {{ Auth::user()->name }} <span class="caret"></span>
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                        Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           {{ csrf_field() }}
                        </form>
                     </div>
                  </li>
                  @endif
                 
               </ul>
               <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
               </form>
            </div>
            </nav> -->
         @yield('content')
      </div>
      <!-- Scripts -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="{{ asset('js/app.js') }}"></script>
      <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap-datetimepicker.es.js') }}"></script>
      <!--mapa-->
      <script type="text/javascript" src="{{ asset('js/leaflet.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/L.Control.MapCenterCoord.js') }}"></script>
      <!--mapa-->
      <script type="text/javascript">
         $("#ubicacion-actual").click(function(){
         
            //$(".map").attr('id', 'mapid-my');
            $(".mapg").css("display", "flex");
            $(".register-location2").css("display", "flex");
            $(".mapg").html("<div id='mapid-my' class='map' style='width: 100%; display: none;'></div>");
            $(".opciones-btns-mapa").css("display", "none");
            $("#mapid-my").css("display", "flex");
         
            var map = L.map('mapid-my').setView([4.651350, -74.107121], 12);
         
         
            L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiaWRlYXNsaWJyZXMiLCJhIjoiY2puMmxiOTgzMDUwcjNycW81NjQ5OWpuNCJ9.4MABmFeT5iCiNPUIojrg_Q', {
               maxZoom: 30,
               attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                  '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                  'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
               id: 'mapbox.streets'
            }).addTo(map);
         
            function onLocationFound(e) {
               var radius = e.accuracy / 1000;
         
               var myMarker = L.marker(e.latlng).addTo(map)
                  .bindPopup("Estas aqui a <b>" + radius + "</b> metros de este punto" ).openPopup();
         
               
         
               L.circle(e.latlng, radius).addTo(map);

               $("#direccion").val(myMarker.getLatLng());
               $("#direccion").attr("hidden", "hidden");
               $(".ubi-tregistrada").css("display", "block");

            }

            

            function onLocationError(e) {
               alert(e.message);
            }
         
            map.on('locationfound', onLocationFound);
            map.on('locationerror', onLocationError);
         
            map.locate({setView: true, maxZoom: 30});

           
            
          });
         
         
         
         $("#ubicar-lugar").click(function(){
         
            //$(".map").attr('id', 'mapid-ubi');
            $(".mapg").css("display", "flex");
            $(".register-location").css("display", "flex");
            $(".mapg").html("<div id='mapid-ubi' class='map' style='width: 100%; display: none;'></div>");
            $(".opciones-btns-mapa").css("display", "none");
            $("#mapid-ubi").css("display", "flex");
         
            
            var map = L.map('mapid-ubi').setView([4.651350, -74.107121], 12);
            var myMarker = map;
         
             L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
               attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
             }).addTo(map);
         
            L.control.mapCenterCoord().addTo(map);



            //$(".miscoordenadas").clone().appendTo("#direccion2");

            $(".register-location").click(function (){
               // $("#direccion").val($(".miscoordenadas").text()); 
               // $("#direccion2").val("Ubicación Registrada con exito");
               $("#direccion").val($(".miscoordenadas").text());
               $("#direccion").attr("hidden", "hidden");
               $(".ubi-tregistrada").css("display", "block");
            });

         });
         
         
               $('.form_datetime').datetimepicker({
                  language:  'es',
                  weekStart: 1,
                  todayBtn:  1,
                  autoclose: 1,
                  todayHighlight: 1,
                  startView: 2,
                  forceParse: 0,
                  showMeridian: 1,
                  format: 'yyyy-mm-dd hh:ii'
               });
         
          
            
      </script>
   </body>
</html>