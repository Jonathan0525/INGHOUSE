@extends('layouts.app')
@section('content')
@include('layouts.nav')
<div class="container-fluid my-no-gutters color-3-b color-b">
   <div class="panel panel-default">
      <div class="panel-body ">
         <div class="">
            {!! Form::open(['route' => 'user.store', 'method' => 'POST' , 'class' => 'row no-gutters']) !!}
            <div class="col-md-12  mx-0 p-4 mt-0 stage">
               <input type="text" name="servicio_id" id="servicio_id" hidden="hidden" class="nombre" value="{{$servicio->id}}">
               <h4><b class="t-ser">{{ $servicio->nombre }}</b></h4>
               <div class="d-flex info-1">
                  <p class="badge-y">@php
                     setlocale(LC_MONETARY,"en_US");
                     echo money_format('%(#10.0n', $servicio->precio_hora);
                     @endphp x Hora
                  </p>
                  <button type="button" class="badge-y btn btn-primary btn-sm" data-toggle="modal" data-target="#detalleservicio">
                  Ver detalle servicio
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
                  <input type="text" name="precio_servicio" hidden="hidden" id="precio_servicio" class="nombre" value="{{$servicio->precio_hora}}">
                  <div class="name-hora"><p id="demo2">1</p><p>Horas</p></div>
                  <p id="demo" class="hora-def">@php
                     echo  "$ " . $servicio->precio_hora;
                     @endphp
                  </p>
               </div>

               </div>
               
            </div>
            <div class="col-md-6  mx-0 pt-3 pb-3 px-4 mt-0 stage">
               <div class="form-group">
                  <h5>Hora y fecha de servicio</h5>
                  <div class="input-group date form_datetime col-md-5" data-date="@php date('l jS \of F Y h:i:s A')  @endphp" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                     <input class="form-control input-fecha" name="inicio_servicio" placeholder="Elige Fecha y Hora" size="16" type="text" value="" readonly>
                     <span class="input-group-addon"><!-- <span class="glyphicon glyphicon-remove"></span> --></span>
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
            <input type="text" hidden="hidden" class="form-control" value="2" id="fin_servicio" name="fin_servicio"  placeholder="Ingresa fin_servicio">
            <!-- <div class="col-md-6 my-3">
               <div class="form-group">
                  <label for="exampleInputEmail1">fin servicio</label>
                  
                  <small id="addres" class="form-text text-muted">We'll never share your email with anyone else.</small>
               </div>
            </div> -->
            <!-- <div class="col-md-6  mx-0 pt-3 pb-3 px-4 mt-0 stage">
                <h5>Dirección</h5>
               <div class="form-group">
                  <label for="exampleInputEmail1"></label>
                 <input type="text" class="form-control" id="direccion" name="direccion"  placeholder="Ingresa Dirección"> 
                 
               </div>
            </div> -->

            



            <div class="input-group mb-3 p-4">

  <div class="input-group-prepend">
    <button class="btn btn-outline-secondary" data-toggle="modal" data-target="#mapa-modal" type="button" id="button-addon1">Button</button>
    <!-- Modal -->
<div class="modal fade" id="mapa-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-0">
       
 <div id="mapid"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  </div>
  <input type="text" class="form-control" id="direccion" name="direccion"  placeholder="Ingresa Dirección" aria-label="Example text with button addon" aria-describedby="button-addon1">
</div>

            <div class="col-md-6 my-3">
               <div class="form-group">
                  <label for="exampleInputEmail1">Pago</label>
                  <input type="text" class="form-control" id="pago" name="pago"  placeholder="Ingresa Dirección">
                  <small id="addres" class="form-text text-muted">We'll never share your email with anyone else.</small>
               </div>
            </div>
            <div class="col-md-12 my-3">
               <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
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
<!-- Modal -->
<div class="modal fade" id="detalleservicio" tabindex="-1" role="dialog" aria-labelledby="detalleservicio" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="detalleservicio">Detalle de Servicio</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            {{ $servicio->descripcion }}
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
         </div>
      </div>
   </div>
</div>
<!-- Modal -->
@endsection