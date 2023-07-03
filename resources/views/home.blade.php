@extends('layouts.plantilla')

@section('title','Gestión Academica UNAD')

@section('content')

<main class="container_inicio">
    <section class="group group--color">
        <div class="container">
            <h2 class="main__title">Bienvenido a la Universidad Nacional Abierta y a Distancia UNAD </h2>
            <p class="main__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore officia iusto exercitationem consectetur debitis excepturi placeat ab, quidem repudiandae veritatis quas dolore praesentium ratione voluptatibus, est quae, rerum suscipit molestias.</p>
        </div>
    </section>
    
    <section class="group main__about__description">
        <div class="container container--flex">
            <div class="column column--50">
                <img src="imagenes/slider 1.jpg" alt="" class="img__inicio">
            </div>
            <div class="column column--50">
                <h3 class="column__title">Quienes Somos</h3>
                <p class="column__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus animi rem magni excepturi consectetur facilis quaerat aspernatur fugit commodi incidunt cumque a et saepe, id molestias iure repudiandae, quis. Laboriosam.</p>
                <a href="{{route('quienes')}}" class="boton">Ver más >>></a>
            </div>
        </div>
    </section>
    
    <section class="group main__about__description">
        <div class="container container--flex">
            <div class="column column--50">
                <img src="imagenes/slider 2.jpg" alt="" class="img__inicio">
            </div>
            <div class="column column--50">
                <h3 class="column__title">Noticias</h3>
                <p class="column__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus animi rem magni excepturi consectetur facilis quaerat aspernatur fugit commodi incidunt cumque a et saepe, id molestias iure repudiandae, quis. Laboriosam.</p>
                <a href="{{route('noticias')}}" class="boton">Ver más >>></a>
            </div>
        </div>
    </section>
    
    <section class="group main__about__description">
        <div class="container container--flex">
            <div class="column column--50">
                <img src="imagenes/slider 3.jpg" alt="" class="img__inicio">
            </div>
            <div class="column column--50">
                <h3 class="column__title">Centros y Zonas</h3>
                <p class="column__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus animi rem magni excepturi consectetur facilis quaerat aspernatur fugit commodi incidunt cumque a et saepe, id molestias iure repudiandae, quis. Laboriosam.</p>
                <a href="{{route('centros')}}" class="boton">Ver más >>></a>
            </div>
        </div>
    </section>
    
    <section class="group main__about__description">
        <div class="container container--flex">
            <div class="column column--50">
                <img src="imagenes/slider 4.jpg" alt="" class="img__inicio">
            </div>
            <div class="column column--50">
                <h3 class="column__title">Programas y Cursos Ofertados</h3>
                <p class="column__txt">Acá encontraras las mejores opciones para preparación profesional</p>
                <a href="{{route('programas')}}" class="boton">Ver más >>></a>
            </div>
        </div>
    </section>
    
</main>
 
@endsection
