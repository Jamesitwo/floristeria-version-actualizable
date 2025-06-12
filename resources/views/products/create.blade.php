@extends('layouts.landing')


@section('title','Crear Producto')

@section('content')

<form action="{{route('product.store')}}" method="POST" class="form" enctype="multipart/form-data">
    @csrf
    <label >Nombre
    <input type="text" name="name" id="name" placeholder="Nombre del producto" aria-invalid="@error('name')true @enderror" autocomplete="off" required> 
    </label>
    <label >Precio
    <input type="number" name="price" id="price" placeholder="Precio del producto" autocomplete="off" 
    aria-invalid="@error('price')true @enderror" required>
    </label>
    <label >Imagen
    <input type="file" name="img_url" id="img_url" placeholder="Imagen" required accept=".webp" autocomplete="off">
    </label>
    <label >Descripción
    <textarea name="description" id="description" cols="30" rows="10" placeholder="Descripción del producto" autocomplete="off" required></textarea>
    </label>
    <button type="submit" class="btn btn-primary">Crear Producto</button>
</form>




@endsection