@extends('layout')

@section('title', 'about')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">Quien soy</h1>
            <p class="lead text-secondary">Actualmente soy estudiante de la carrera de Licenciatura en Ciencias de la Computacion, en la Univeridad Luterana Salvadoreña estoy en mi tercer año de carrera y me interesa especializarme en el area de base de datos y aplicaciones web, quiero implementar paginas mas dinamicas y agradables para el usuario.</p>
            <a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">Contactame</a>
            <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">Portafolio</a>
        </div>
        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4" src="/img/about.png" alt="Quien soy">
        </div>
    </div>
</div>


@endsection