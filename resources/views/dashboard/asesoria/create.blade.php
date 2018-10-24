@extends('layouts.app')
@section('content')
@include('layouts.nav')
<div class="container-fluid my-no-gutters color-3-b color-b">
   <div class="panel panel-default">
      <div class="panel-body ">
         <div class="">
            {!! Form::open(['route' => 'frontasesorias.store', 'method' => 'POST' , 'class' => 'row no-gutters']) !!}
            <div class="col-md-12  mx-0 p-4 mt-0 stage">
               <input type="text" name="asesoria_id" id="asesoria_id" hidden="hidden" class="nombre" value="{{$asesoria->id}}">
               <h4><b class="t-ser">{{ $asesoria->nombre }}</b></h4>
               <div class="d-flex info-1">
                  <p class="badge-y-out">@php
                     setlocale(LC_MONETARY,"en_US");
                     echo money_format('%(#10.0n', $asesoria->precio_hora);
                     @endphp x Hora
                  </p>
                  <button type="button" class="badge-y btn btn-primary btn-sm" data-toggle="modal" data-target="#detalleasesoria">
                  Ver detalle asesoria
                  </button>
               </div>
            </div>
            <div class="col-md-6  mx-0 pt-3 pb-4 px-4 mt-0 selector_horas stage">
               <h5>Horas requeridas</h5>
               <div class="box-content">
                  <div class="selector_horas_btns">
                     <a onclick="myFunction2()">-</a>
                     <a onclick="myFunction()">+</a>
                  </div>
                  <div class="info-user-select">
                     <input type="text" name="precio_asesoria" hidden="hidden" id="precio_asesoria" class="nombre" value="{{$asesoria->precio_hora}}">
                     <div class="name-hora">
                        <p id="demo2">1</p>
                        <p>Horas</p>
                     </div>
                     <p id="demo" class="hora-def">@php
                        echo  "$ " . $asesoria->precio_hora;
                        @endphp
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-md-6  mx-0 pt-3 pb-3 px-4 mt-0 stage">
               <div class="form-group">
                  <h5>Hora y fecha de asesoria</h5>
                  <div class="input-group date form_datetime col-md-5" data-date="@php date('l jS \of F Y h:i:s A')  @endphp" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                     <input class="form-control input-fecha" name="inicio_asesoria" placeholder="Elige Fecha y Hora" size="16" type="text" value="" readonly>
                     <span class="input-group-addon">
                        <!-- <span class="glyphicon glyphicon-remove"></span> -->
                     </span>
                     <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                  </div>
                  <input type="hidden" id="dtp_input1" value="" />
               </div>
            </div>
            <div class="col-md-6  mx-0 pt-3 pb-3 px-4 mt-0 stage">
               <h5>Elegir ingeniero</h5>
               <div class="flex-my-users-select">
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="tipo_ingeniero" id="exampleRadios1" value="hombre" checked>
                     <label class="form-check-label" for="exampleRadios1">
                     <i class="demo-icon icon-icono-i-10"></i>
                     HOMBRE
                     </label>
                  </div>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="tipo_ingeniero" id="exampleRadios2" value="mujer">
                     <label class="form-check-label" for="exampleRadios2">
                     <i class="demo-icon icon-icono-i-11"></i>
                     MUJER
                     </label>
                  </div>
               </div>
            </div>
            <input type="text" hidden="hidden" class="form-control" value="2018-10-16 13:00" id="fin_asesoria" name="fin_asesoria"  placeholder="Ingresa fin_asesoria">
            <div class="col-md-6  mx-0 pt-3 pb-3 px-4 mt-0 stage">
               <h5>Dirección</h5>
               <div class="form-group">
                  <!-- <label for="exampleInputEmail1"></label> -->
                  <!-- <input type="text" class="form-control" value="" id="direccion2" name="direccion2"  placeholder="Ingresa Dirección">  -->
                  <input type="text" class="form-control ubi-tregistrada" readonly="readonly" value="" id=""  name=""  placeholder="Ubicación Registrada con exito" style="display: none;"> 
                  <input type="text" class="form-control" value="" id="direccion"  name="direccion"  placeholder="Ingresa Dirección"> 
                  <a class="btn my-btn-primary mt-2 mb-2" id="open-m-mapa">Ubicar en Mapa</a>
               </div>
               <div class="mapa-modal" style="display: none;">
                  <i class="demo-icon icon-cancel cerrar-modal-mapa cerrar-btn"></i>
                  <div class="opciones-btns-mapa">
                     <h3>Elige una opción</h3>
                     <div class="btns-mapa-op">
                        <a href="#" id="ubicacion-actual" class="btn btn-ubi"><i class="demo-icon icon-icono-i-7"></i> Ubicación Actual</a>
                        <a href="#" id="ubicar-lugar" class="btn btn-ubi"><i class="demo-icon icon-icono-i-7"></i> Ubicar un lugar</a>
                     </div>
                  </div>
                  <div class="mapg" style="display: none;"></div>
                  <a  class="btn btn-ubi mt-2 register-location cerrar-modal-mapa" style="display:none;">Registrar Ubicación</a>
                  <a  class="btn btn-ubi mt-2 register-location2 cerrar-modal-mapa" style="display:none;">Registrar Ubicación</a>
               </div>
            </div>
            <div class="col-md-6  mx-0 pt-3 pb-3 px-4 mt-0 stage">
               <h5>Forma de Pago</h5>
               <div class="flex-my-users-select">
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="pago" id="pago1" value="efectivo" checked="checked">
                     <label class="form-check-label" for="pago1">
                     <i class="demo-icon icon-icono-i-12"></i>
                     EFECTIVO
                     </label>
                  </div>
                  <!-- <div class="form-check">
                     <input class="form-check-input" type="radio" name="tipo_ingeniero" id="exampleRadios2" value="mujer">
                     <label class="form-check-label" for="exampleRadios2">
                     <i class="demo-icon icon-icono-i-11"></i>
                     MUJER
                     </label>
                     </div> -->
               </div>
            </div>
            <div class="col-md-12 my-3">
               <div class="content-btn">
               <button type="submit" class="mx-2 btn btn-primary-my">Solicitar asesoria</button>
               </div>
            </div>
            {!! Form::close() !!}
            <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
            <script>
               var e = $('input:text[name=precio_asesoria]').val();
               var h = $('input:text[name=precio_asesoria]').val();
               var a = parseFloat(e);
               var b = parseFloat(h);
               var ho = 1;
               
               function myFunction() {
                  a+=b;
                  ho++
                  document.getElementById("demo").innerHTML = '$ ' + a;
                  $("input:text[name=precio_asesoria]").val(a);
                  document.getElementById("demo2").innerHTML = ho;
               }
               
               function myFunction2() {
                 if (a > 0){
                  a-=b;
                  ho--
                   document.getElementById("demo").innerHTML = '$ ' + a;
                    $("input:text[name=precio_asesoria]").val(a);
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
<!-- Modal -->
<div class="modal fade" id="detalleasesoria" tabindex="-1" role="dialog" aria-labelledby="detalleasesoria" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="detalleasesoria">Detalle de asesoria</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <b>{{ $asesoria->nombre }}</b><br><br>
            {{ $asesoria->descripcion }}
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
         </div>
      </div>
   </div>
</div>
<!-- Modal -->
@endsection