@extends('layouts.landing')
<!--forma en caso de que solo se requiera enviar un texto -->
@section('title','Inicio')



<!--forma en caso de que se requiera enviar un seccion grande -->
@section('content')

    <div class="grid">
    @foreach ($products as $item)
        <article>
            <header>
                {{ $item->name }}
            </header>
            
            <a href="{{route('product.show',['id'=>$item->id,'name'=>$item->name])}}"><img src="{{$item->img_url}}" alt="{{ $item->name }}"></a>
            <footer>
                {{$item->price}}
                <br>
                <button>Comprar por WhastApp</button>
            </footer>
        </article>
    @endforeach
    </div>


@endsection