@extends('layouts.landing')
@section('title','Editar producto')

@section('content')

<form action="{{route('product.update',$product->id)}}" class="form" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <label>Nombre
    <input type='text' name="name" id="name" value="{{$product->name}}">
    </label>
    <label>Precio
    <input type='number' name="price" id="price" value="{{$product->price}}">
    </label>
    <img src="{{ asset($product->img_url) }}" alt="{{$product->name}}">
    <label>Imagen
    <br><br>
    <input type='file' name="img_url" id="img_url" accept=".webp">
    </label>
    <label>Descripción
    <textarea name="description" id="description" cols="30" rows="10">{{$product->description}}</textarea>   
    </label>
    <input type="hidden" name="id" value="{{$product->id}}">
    <button type="submit" class="btn btn-primary">Actualizar Producto</button>
</form>
@endsection