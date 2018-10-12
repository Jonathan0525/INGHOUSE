<div class="container-fluid d-flex align-items-center justify-content-center no-gutters">
<nav class="my-nav row no-gutters">
<div class="col-6 d-flex align-items-center justify-content-start no-gutters">
    <a href="/home" class=" logo-icon"><img src="{{ asset('img/logo.png') }}" class="img-fluid"></a>
</div>
<div class="col-6 d-flex align-items-center justify-content-end no-gutters">
    <a class="menu-user"><i class="demo-icon icon-icono-i-1"></i></a>
</div>
</nav>
</div>
<div class="menu-user-on flex-column align-items-center">
	<i class="demo-icon icon-cancel cerrar-u-m cerrar-btn"></i>
	<i class="demo-icon icon-icono-i-2"></i>
	<ul class="menu-user-opt">
		<li><a href=""><span class="box-mini-li"></span>Editar Usuario</a></li>
		<li><a href=""><span class="box-mini-li"></span>Servicios Contratados</a></li>
		<li><a href=""><span class="box-mini-li"></span>Asesorias Solicitadas</a></li>
		<li><a href=""><span class="box-mini-li"></span>Escombros Recogidos</a></li>
		<li><a href=""><span class="box-mini-li"></span>Políticas de privacidad</a></li>
		<li><a href=""><span class="box-mini-li"></span>Términos y condiciones</a></li>
		@if (Auth::guest()) 
		@else 
        
        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="box-mini-li"></span>Salir
        </a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
		@endif
	</ul>
</div>