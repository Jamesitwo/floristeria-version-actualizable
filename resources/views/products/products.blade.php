@extends('layouts.landing')
@section('title','Arreglos')


@section('content')
<h1>Arreglos</h1>
<div class="grid">
@foreach($products as $item)
    <article>
        <header>
            {{$item->name}}
        </header>
        <img src="{{asset($item->img_url)}}" alt="">
        <footer>
            {{$item->price}}
            <br>
            <button>Comprar por WhatsApp</button>
        </footer>
    </article>


@endforeach
</div>
@endsection