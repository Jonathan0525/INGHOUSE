@extends('layouts.app')
@section('content')
<div class="container-fluid color-marca d-flex flex-column align-items-center justify-content-center">
   <div class="panel panel-default d-flex flex-column align-items-center justify-content-center box-register">
      <div class="panel-heading logo-style" style="background: none;">
         <img src="{{ asset('img/logo-register.png') }}" class="img-fluid logo-loader">
      </div>
      <div class="panel-body box-register">
         <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
               <!--<label for="name" class="col-md-12 control-label"></label>-->
               <div class="col-md-12">
                  <input id="name" type="text" class="form-control my-input" placeholder="Nombre completo" name="name" value="{{ old('name') }}" required autofocus>
                  @if ($errors->has('name'))
                  <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
                  </span>
                  @endif
               </div>
            </div>
            <div class="form-group{{ $errors->has('document') ? ' has-error' : '' }}">
               <!--<label for="document" class="col-md-12 control-label"></label>-->
               <div class="col-md-12">
                  <input id="document" type="text" class="form-control my-input" placeholder="Documento" name="document" value="{{ old('document') }}" required autofocus>
                  @if ($errors->has('document'))
                  <span class="help-block">
                  <strong>{{ $errors->first('document') }}</strong>
                  </span>
                  @endif
               </div>
            </div>
            <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
               <!--<label for="telephone" class="col-md-12 control-label"></label>-->
               <div class="col-md-12">
                  <input id="telephone" type="text" class="form-control my-input" placeholder="Celular" name="telephone" value="{{ old('telephone') }}" required autofocus>
                  @if ($errors->has('telephone'))
                  <span class="help-block">
                  <strong>{{ $errors->first('telephone') }}</strong>
                  </span>
                  @endif
               </div>
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
               <!--<label for="email" class="col-md-12 control-label"></label>-->
               <div class="col-md-12">
                  <input id="email" type="email" class="form-control my-input" placeholder="Correo" name="email" value="{{ old('email') }}" required>
                  @if ($errors->has('email'))
                  <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                  </span>
                  @endif
               </div>
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
               <!--<label for="password" class="col-md-12 control-label"></label>-->
               <div class="col-md-12">
                  <input id="password" type="password" placeholder="Contraseña" class="form-control my-input" name="password" required>
                  @if ($errors->has('password'))
                  <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                  </span>
                  @endif
               </div>
            </div>
            <div class="form-group">
               <!--<label for="password-confirm" class="col-md-12 control-label"></label>-->
               <div class="col-md-12">
                  <input id="password-confirm" type="password" placeholder="Confirmar Contraseña" class="form-control my-input" name="password_confirmation" required>
               </div>
            </div>
            <div class="form-group">
               <div class="col-md-12 col-md-offset-4">
                  <button type="submit" class="btn btn-primary color-3-b my-btn">
                  Registrarse
                  </button>
               </div>
            </div>
            <div class="form-group d-flex flex-column align-items-center justify-content-center">
               <a class="btn btn-link mt-4 btn-link" href="{{ route('login') }}">
                  <h4 class="color-3">Ingreso</h4>
               </a>
            </div>
         </form>
      </div>
   </div>
</div>
@endsection