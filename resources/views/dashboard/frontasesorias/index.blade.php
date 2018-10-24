@extends('layouts.app')
@section('content')
@include('layouts.nav')
<div class="container-fluid no-gutters my-no-gutters b-general">
   <div class="panel panel-default">
      <div class="panel-body header-name">
         <h3>Asesorias disponibles</h3>
         <div class="my-4 services">
            @foreach($asesorias as $asesoria)
            <a href="{{ route('asesoria.create_s', $asesoria->id) }}">
               <div class="my-2 servicio_listado">
                  <i class="demo-icon icon-icono-i-15"></i>
               <div class="info-servicio-box">

                  <h4>{{ $asesoria->nombre }}</h4>
                  <p>@php
                     setlocale(LC_MONETARY,"en_US");
                     echo money_format('%(#10.0n', $asesoria->precio_hora);
                     @endphp x Hora
                  </p>
               </div>
               </div>
            </a>
            @endforeach
            {{ $asesorias->links() }}
         </div>
      </div>
   </div>
</div>
@endsection