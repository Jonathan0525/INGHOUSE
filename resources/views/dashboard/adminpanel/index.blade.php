@extends('layouts.app')
@section('content')
@include('layouts.nav')
<div class="container-fluid no-gutters my-no-gutters b-general">
   <div class="panel panel-default">
      <div class="panel-body header-name">
         <h3>Crear Servicios</h3>
         
         <div class="my-4"> 


      
       <!--   <table class="table table-striped">
               <thead>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Acción</th>
               </thead>
               <tbody>
                  @foreach($servicios as $servicio)
                  <tr>
                     <td>{{ $servicio->id }}</td>
                     <td>{{ $servicio->nombre }}</td>
                     <td>{{ $servicio->descripcion }}</td>
                   
                  </tr>
                  @endforeach
               </tbody>
         </table> -->

         @foreach($servicios as $servicio)

         <div class="servicio_listado">
            <h4>{{ $servicio->nombre }}</h4>
            

            <p>@php

setlocale(LC_MONETARY,"en_US");
echo money_format('%(#10.0n', $servicio->precio_hora);
@endphp x Hora</p>
         </div>
         @endforeach




            {{ $servicios->links() }}
      




         </div>


      </div>
   </div>
</div>
@endsection