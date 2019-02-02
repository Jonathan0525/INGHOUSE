@extends('layouts.app')
@section('content')
@include('layouts.nav')
<div class="container-fluid no-gutters my-no-gutters b-general">
   <div class="panel panel-default">
      <div class="panel-body header-name">
         <h3>Servicios disponibles</h3>
         <div class="my-1 services">
            @foreach($servicios as $servicio)
            <a href="{{ route('servicio.create_s', $servicio->id) }}">
               <div class="my-1 servicio_listado">
                  <i class="demo-icon icon-icono-i-15"></i>
               <div class="info-servicio-box">

                  <h4>{{ $servicio->nombre }}</h4>
                  <p>@php
                     setlocale(LC_MONETARY,"en_US");
                     echo money_format('%(#10.0n', $servicio->precio_hora);
                     @endphp x Hora
                  </p>
               </div>
               </div>
            </a>
            @endforeach
            
         </div>
         {{ $servicios->links() }}
      </div>
   </div>
</div>
@endsection