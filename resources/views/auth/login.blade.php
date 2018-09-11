@extends('layouts.app')
@section('content')
<div class="loader on">
   <img src="{{ asset('img/logo.png') }}" class="img-fluid logo-loader">
   <img src="{{ asset('img/load.svg') }}" class="img-fluid loading">
   <p>CARGANDO</p>
</div>
<div class="container-fluid container-fluid-my color-marca d-flex flex-column align-items-center justify-content-center">
   <div class="panel panel-default d-flex flex-column align-items-center justify-content-center">
      <div class="panel-heading logo-style">
         <img src="{{ asset('img/logo.png') }}" class="img-fluid logo-loader">
      </div>
      <div class="panel-body">
         <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <h5 class=" text-center color-3 my-3">Ingreso</h5>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
               <label for="email" class=" control-label"></label>
               <div class="col-md-12">
                  <input id="email" type="email" placeholder="Correo" class="form-control my-input" name="email" value="{{ old('email') }}" required autofocus>
                  @if ($errors->has('email'))
                  <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                  </span>
                  @endif
               </div>
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
               <label for="password" class=" control-label"></label>
               <div class="col-md-12">
                  <input id="password" type="password" class="form-control my-input" placeholder="Contraseña" name="password" required>
                  @if ($errors->has('password'))
                  <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                  </span>
                  @endif
               </div>
            </div>
            <div class="form-group">
               <div class="col-md-12">
                  <div class="checkbox">
                     <label>
                     <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuerdame
                     </label>
                  </div>
               </div>
            </div>
            <div class="form-group">
               <div class="col-md-12">
                  <button type="submit" class="btn btn-primary color-3-b my-btn">
                  Ingresar
                  </button>
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                     <p class="color-3">¿Olvido su contraseña?</p>
                  </a>
               </div>
            </div>
            <div class="form-group d-flex flex-column align-items-center justify-content-center">
               <a class="btn btn-link mt-4 btn-link" href="{{ route('register') }}">
                  <h4 class="color-3">Registrarse</h4>
               </a>
            </div>
         </form>
      </div>
   </div>
</div>
<script type="text/javascript"></script>
@endsection