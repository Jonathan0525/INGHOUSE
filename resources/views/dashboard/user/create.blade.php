@extends('layouts.app')
@section('content')
@include('layouts.nav')
<div class="container-fluid no-gutters my-no-gutters b-general">
   <div class="panel panel-default">
      <div class="panel-body header-name">
         <h3>Crear Servicios</h3>
         
         <div class="my-4"> 


		

		{!! Form::open(['route' => 'adminpanel.store', 'method' => 'POST' , 'class' => 'myformeditor row']) !!}

			 <div class="form-group col-md-6 col-sm-12">
                  {!! Form::label('nombre', 'Nombre', ['class' => 'titulo_small']) !!}
                  {!! Form::text('nombre', null, ['class' => 'form-control myinput', 'placeholder' => 'Nombre Servicio' ,'required']) !!}
             </div>

          <div class="form-group">
                   <h4>{{ $servicio->nombre }}</h4>
                  
          </div>


             <div class="form-group col-md-6 col-sm-12">
                  {!! Form::label('precio_hora', 'Precio', ['class' => 'titulo_small']) !!}

                  {!! Form::number('precio_hora', null, ['class' => 'form-control myinput', 'placeholder' => 'Precio Servicio' ,'required']) !!}
             </div>



             <div class="form-group col-md-6 col-sm-12">
                  {!! Form::label('descripcion', 'Descripción', ['class' => 'titulo_small']) !!}
                  {!! Form::textarea('descripcion', null, ['class' => 'form-control myinput', 'placeholder' => 'Descripción Servicio' ,'required']) !!}

                  {!! Form::submit('CREAR SERVICIO', ['class' => 'mt-3 form-control mysubmit' ,'required']) !!}
             </div>

             
			
		{!! Form::close() !!}




			</div>


      </div>
   </div>
</div>
@endsection