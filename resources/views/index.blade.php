@extends('layouts.landing')
<!--forma en caso de que solo se requiera enviar un texto -->
@section('title','Inicio')



<!--forma en caso de que se requiera enviar un seccion grande -->
@section('content')
    <div class="carousel">
        <div class="carousel-item active">
            <img src="{{asset('images/banner.webp')}}" alt="Imagen de ejemplo" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/2.webp')}}" alt="Imagen de ejemplo" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/3.webp')}}" alt="Imagen de ejemplo" class="d-block w-100">
    </div>

    <br>
    <h1 class="title">Arreglos</h1>
    <div class="grid">
    @foreach ($products as $item)
        <main class="container">
            <article>
                <header>
                    {{ $item->name }}
                </header>
                
                <a href="{{route('product.show',['id'=>$item->id,'name'=>$item->name])}}"><img src="{{asset ($item->img_url)}}" alt="{{ $item->name }}"></a>
                <footer>
                    {{$item->price}}
                    <br>
                    <button>Comprar por WhastApp</button>
                </footer>
            </article>
        </main>
    @endforeach
    </div>


@endsection