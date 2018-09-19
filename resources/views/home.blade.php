@extends('layouts.app')
@section('content')
@include('layouts.nav')
<div class="container-fluid no-gutters my-no-gutters b-general">
   <div class="box-p-h">
      <div class="panel panel-default">
         <div class="panel-body header-name">
            @if (session('status'))
            <div class="alert alert-success">
               {{ session('status') }}
            </div>
            @endif
            @if (Auth::guest()) 
            @else 
            <h3>Bienvenido/a,</h3>
            <h4>{{ Auth::user()->name }}</h4>
            @endif
         </div>
      </div>
      <div class="box-sub-titulo">
         <h1>¿Qué desea hacer?</h1>
      </div>
      <div class="d-flex align-items-center justify-content-center flex-wrap botones_p">
         <div class="btn-p">
            <a href="" class="btn-home">
               <i class="demo-icon icon-icono-i-3"></i>
               <p>SOLICITAR <br>SERVICIO</p>
               <span class="line-home-btn"></span>
            </a>
         </div>
         <div class="btn-p">
            <a href="" class="btn-home">
               <i class="demo-icon icon-icono-i-4"></i>
               <p>SOLICITAR <br>ASESORIA</p>
               <span class="line-home-btn"></span>
            </a>
         </div>
         <div class="btn-p">
            <a href="" class="btn-home">
               <i class="demo-icon icon-icono-i-5"></i>
               <p>UBICAR <br>RECURSO</p>
               <span class="line-home-btn"></span>
            </a>
         </div>
         <div class="btn-p">
            <a href="" class="btn-home">
               <i class="demo-icon icon-icono-i-6"></i>
               <p>RECOGER <br>ESCOMBROS</p>
               <span class="line-home-btn"></span>
            </a>
         </div>
      </div>
   </div>
</div>
@endsection