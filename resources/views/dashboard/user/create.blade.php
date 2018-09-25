@extends('layouts.app')
@section('content')
@include('layouts.nav')
<div class="container-fluid no-gutters my-no-gutters b-general">
   <div class="panel panel-default">
      <div class="panel-body header-name">
         <h3>Crear Servicios</h3>
         <div class="my-4">



    {!! Form::open(['route' => 'user.store', 'method' => 'POST' , 'class' => '']) !!}


           <input type="text" name="servicio_id" id="servicio_id" class="nombre" value="{{$servicio->id}}">
            <p><b>Nombre: </b>{{ $servicio->nombre }}</p>
            <p><b>Precio: </b>@php
               setlocale(LC_MONETARY,"en_US");
               echo money_format('%(#10.0n', $servicio->precio_hora);
               @endphp x Hora
            </p>
            <p><b>Detalle: </b>{{ $servicio->descripcion }}</p>
            <a onclick="myFunction2()">-</a>
            <input type="text" name="precio_servicio" id="precio_servicio" class="nombre" value="{{$servicio->precio_hora}}">
            <p id="demo2">1</p>
            <p id="demo">@php
               echo  "$ " . $servicio->precio_hora;
               @endphp
            </p>
            <a onclick="myFunction()">+</a>

            <div class="form-group">
               <label for="dtp_input1" class="col-md-2 control-label">DateTime Picking</label>
               <div class="input-group date form_datetime col-md-5" data-date="@php date('l jS \of F Y h:i:s A')  @endphp" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                  <input class="form-control" name="inicio_servicio" placeholder="Elige Fecha y Hora" size="16" type="text" value="" readonly>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
               </div>
               <input type="hidden" id="dtp_input1" value="" /><br/>
            </div>


            <div class="form-check">
  <input class="form-check-input" type="radio" name="tipo_ingeniero" id="exampleRadios1" value="hombre" checked>
  <label class="form-check-label" for="exampleRadios1">
    HOMBRE
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="tipo_ingeniero" id="exampleRadios2" value="mujer">
  <label class="form-check-label" for="exampleRadios2">
   MUJER
  </label>
</div>


<div class="form-group">
    <label for="exampleInputEmail1">fin servicio</label>
    <input type="text" class="form-control" id="fin_servicio" name="fin_servicio"  placeholder="Ingresa fin_servicio">
    <small id="addres" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>



<div class="form-group">
    <label for="exampleInputEmail1">Dirección</label>
    <input type="text" class="form-control" id="direccion" name="direccion"  placeholder="Ingresa Dirección">
    <small id="addres" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>



<div class="form-group">
    <label for="exampleInputEmail1">Pago</label>
    <input type="text" class="form-control" id="pago" name="pago"  placeholder="Ingresa Dirección">
    <small id="addres" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>


<button type="submit" class="btn btn-primary">Enviar</button>

      
    {!! Form::close() !!}

            <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
            <script>
               var e = $('input:text[name=precio_servicio]').val();
               var h = $('input:text[name=precio_servicio]').val();
               var a = parseFloat(e);
               var b = parseFloat(h);
               var ho = 1;
               
               function myFunction() {
                  a+=b;
                  ho++
                  document.getElementById("demo").innerHTML = '$ ' + a;
                  $("input:text[name=precio_servicio]").val(a);
                  document.getElementById("demo2").innerHTML = ho;
               }
               
               function myFunction2() {
                 if (a > 0){
                  a-=b;
                  ho--
                   document.getElementById("demo").innerHTML = '$ ' + a;
                    $("input:text[name=precio_servicio]").val(a);
                   document.getElementById("demo2").innerHTML = ho;
                 }else{
                   a = 0;
                 }
               } 
            </script>
         </div>
      </div>
   </div>
</div>
@endsection