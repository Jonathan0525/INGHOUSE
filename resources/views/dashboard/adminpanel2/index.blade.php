@extends('layouts.app')
@section('content')
@include('layouts.nav')
<div class="container-fluid no-gutters my-no-gutters b-general">
   <div class="panel panel-default">
      <div class="panel-body header-name">
         <h3>Crear Asesoria</h3>
         <div class="my-4">
            @foreach($asesorias as $asesoria)
            <div class="servicio_listado">
               <h4>{{ $asesoria->nombre }}</h4>
               <p>@php
                  setlocale(LC_MONETARY,"en_US");
                  echo money_format('%(#10.0n', $asesoria->precio_hora);
                  @endphp x Hora
               </p>
            </div>
            @endforeach
            {{ $asesorias->links() }}
         </div>
      </div>
   </div>
</div>
@endsection