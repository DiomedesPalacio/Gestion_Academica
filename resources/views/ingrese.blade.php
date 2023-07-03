@extends('layouts.plantilla')

@section('title', 'Ingresa tus datos')
    
@section('content')
    
    <section class="form-login">
        <h2>Login</h2>
        <input class="controles" type="text" name="usuario" value="" placeholder="Usuario">
        <input class="controles" type="tpassword" name="contrasena" value="" placeholder="Contraseña">
        <input class="btnlogin" type="submit" name="" value="Ingresar">
        <p>¿Olvidaste tu contraseña?, <a href="">da click aquí</a></p>
        <p>¿No te haz registrado?, <a href="{{route('registro')}}">Registrate</a></p>

    </section>
    
@endsection