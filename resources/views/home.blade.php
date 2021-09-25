@extends('layout')

@section('title', 'Home')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">Desarrollo Web HernandezCode</h1>
            <p class="lead text-secondary">Hola,mucho gusto y bienvenidos a mi primera aplicación web en Laravel! puedes ver las ultimas cosas empleadas en dicha aplicación como la vista portafolio para ver los proyectos que existen, tambien puedes contactarme por este medio, espero que el sitio sea de tu agrado y para tu beneficio!</p>
            <a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">Contactame</a>
            <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">Portafolio</a>
        </div>
        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4" height="400px;" width="400px;" src="/img/code.png" alt="Desarrollo web">
        </div>
    </div>
</div>

@endsection