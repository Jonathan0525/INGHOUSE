@extends('layouts.app')
@section('content')
@include('layouts.nav')
<div class="container-fluid color-3-b color-b notificacion-hecha">
	<i class="demo-icon icon-icono-i-14"></i>
   <b>Felicitaciones</b>
   <p>Su servicio ha sido
agendado correctamente
en las fechas, horas
y lugar solicitados.</p>
 <a href="/home" class="mx-2 btn btn-primary-my btn" style="color:#000;">Volver al Home</a>
</div>

@endsection