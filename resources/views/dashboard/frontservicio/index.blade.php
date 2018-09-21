@extends('layouts.app')
@section('content')
@include('layouts.nav')
<div class="container-fluid no-gutters my-no-gutters b-general">
   <div class="panel panel-default">
      <div class="panel-body header-name">
         <h3>Crear Servicioos</h3>
         <div class="my-4">
            @foreach($servicios as $servicio)
            <a href="{{ route('user.create_s', $servicio->id) }}">
               <div class="servicio_listado my-2">
                  <h4>{{ $servicio->nombre }}</h4>
                  <p>@php
                     setlocale(LC_MONETARY,"en_US");
                     echo money_format('%(#10.0n', $servicio->precio_hora);
                     @endphp x Hora
                  </p>
               </div>
            </a>
            @endforeach
            {{ $servicios->links() }}
         </div>
      </div>
   </div>
</div>
@endsection