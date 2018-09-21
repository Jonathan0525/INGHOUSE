@extends('layouts.app')
@section('content')
@include('layouts.nav')
<div class="container-fluid no-gutters my-no-gutters b-general">
   <div class="panel panel-default">
      <div class="panel-body header-name">
         <h3>Crear Servicios</h3>
         
         <div class="my-4"> 



		<p><b>Nombre: </b>{{ $servicio->nombre }}</p>

    <p><b>Precio: </b>@php
                     setlocale(LC_MONETARY,"en_US");
                     echo money_format('%(#10.0n', $servicio->precio_hora);
                     @endphp x Hora</p>

    <p><b>Detalle: </b>{{ $servicio->descripcion }}</p>







<!--  <div class="numbers-row">
        <label for="name">French Hens</label>
        
      </div>
  -->

<!-- <script type="text/javascript">
$(document).ready(function()
  {
  $("#boton01").click(function () {
  //saco el valor accediendo a un input de tipo text y name = nombre
  alert($('input:text[name=nombre]').val());
  //saco el valor accediendo al id del input = nombre
  alert($("#nombre").val());
  //saco el valor accediendo al class del input = nombre   
  alert($(".nombre").val());
  });
});
</script> -->

<p id="demo2">1</p>
<button onclick="myFunction2()">-</button>
<input type="text" name="nombre" id="nombre" hidden="hidden" class="nombre" value="{{$servicio->precio_hora}}">
<p id="demo">{{$servicio->precio_hora}}</p>
<button onclick="myFunction()">+</button>
<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>

var e = $('input:text[name=nombre]').val();
var h = $('input:text[name=nombre]').val();
var a = parseFloat(e);
var b = parseFloat(h);
var ho = 1;
function myFunction() {
   a+=b;
   ho++
    document.getElementById("demo").innerHTML = a;
    document.getElementById("demo2").innerHTML = ho;

}
function myFunction2() {
  
   a-=b;
   ho--
    document.getElementById("demo").innerHTML = a;
    document.getElementById("demo2").innerHTML = ho;
  

}
</script>


<!-- <div class="numbers-row">
        <label for="name">French Hens</label>
        <input type="text" name="french-hens" id="french-hens" value="{{$servicio->precio_hora}}">


      </div> -->
     


			</div>


      </div>
   </div>
</div>
@endsection