@extends('layouts.app')

@section('title', 'club')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/club.css') }}">
@endsection

@section('content')

    <main>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators" id="caro-indicators">

                
                    <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li> 
               
                
            </ol>
            <div class="carousel-inner" id="caro-inner">

                    <div class="carousel-item active">
                        <img class="d-block w-100 " style="height:30rem;" src="https://images.unsplash.com/photo-1493612276216-ee3925520721?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" style="height:30rem;" src="https://images.unsplash.com/photo-1493612276216-ee3925520721?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" style="height:30rem;" src="https://images.unsplash.com/photo-1493612276216-ee3925520721?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" alt="Second slide">
                    </div>
                
            </div>
        </div> 
        
        <div id="testing"></div>

        <div class="jumbotron">
            <h1 class="display-4">Unknown</h1>
            <p class="lead" id="desc">The club where ideas connect</p>
            <br><br>
            <p class="lead">
                <a id="web-link" class="btn btn-success btn-lg" href="" role="button">Visit website</a>
            </p>
        </div>

        {{-- clubmember card --}}
        <div class="container">

        </div>
    </main>

    @section('js')
        <script type="text/javascript" src="{{ asset('js/club.js') }}"></script>
    @endsection

@endsection