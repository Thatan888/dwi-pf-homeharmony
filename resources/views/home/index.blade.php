@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Dashboard</h1>
        <p class="lead">Only authenticated users can access this section.</p>
        <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">View more tutorials here &raquo;</a>
        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">HomeHarmony tiene como objetivo moestrar a los consumidores nuestro amplio catálogo de articulos
            mobiliarios
        </p>
        @endguest
    </div>
@endsection
