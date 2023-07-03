@extends('layouts.plantilla')

@section('title', 'Registre sus datos')
    
@section('content')

    <Section class="form-registro">
        <h2>Registrate</h2>    
        <input class="controles" type="text" name="nombre" id="nombres" placeholder="Ingrese su Nombre">
        <input class="controles" type="text" name="apellido" id="apellidos" placeholder="Ingrese sus Apellidos">
        <input class="controles" type="text" name="rol" id="rol" placeholder="Ingrese su Rol (Estudiante o Docente)">
        <input class="controles" type="email" name="correo" id="correo" placeholder="Ingrese su Correo Electrónico">
        <input class="controles" type="password" name="contrasena" id="contrasena" placeholder="Ingrese su Contraseña">
        <p>Estoy de acuerdo con <a href="">Términos y Condiciones</a></p>
        <input class="btnregistro" type="submit" value="Crear Registro">
        <p>¿Ya estas Registrado?, <a href="{{route('ingreso')}}">Inicia Sesión</a></p>
    </Section>  
    
@endsection
