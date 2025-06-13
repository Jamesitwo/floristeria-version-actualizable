@extends('layouts.landing')
@section('title',$product->name)


@section('content')

<div>

<article>
    <header>
       {{$product->name}}
    </header>
    <img src="{{asset($product->img_url)}}" alt="{{$product->name}}">
    <p>{{$product->description}}</p>
    <p>precio: {{$product->price}}</p>
<footer>
    <button class="btn btn-primary">Comprar por WhatsApp</button>
</footer>
</article>
</div>


@endsection

