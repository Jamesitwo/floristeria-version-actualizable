@extends('layouts.landing')


@section('title','Crear Producto')

@section('content')

<div class="container"> 
    <h1>Crear Producto</h1>
    <form action="{{route('product.store')}}" method="POST" class="form" enctype="multipart/form-data">
        @csrf
        <label >Nombre
            <input type="text" name="name" id="name" placeholder="Nombre del producto" @error('name')aria-invalid="true" @enderror autocomplete="off" required> 
        </label>
        @error('name')
        <small id="invalid-helper">
            {{$message}}
        </small> 
        @enderror

        
        <label >Precio
            <input type="number" name="price" id="price" placeholder="Precio del producto" autocomplete="off" @error('price')aria-invalid="true" @enderror required>
        </label>
        @error('price')
            <small id="invalid-helper">
                {{$message}}
            </small>
        @enderror


        
        <label >Imagen
            <input type="file" name="img_url" id="img_url" placeholder="Imagen" required accept=".webp" autocomplete="off"  @error('img_url')aria-invalid="true" @enderror>
        </label>
        @error('img_url')
            <small id="invalid-helper">
                {{$message}}
            </small>
        @enderror

        <label >Descripción
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Descripción del producto" autocomplete="off" required @error('name')aria-invalid="true" @enderror></textarea>
        </label>
        @error('description')
            <small id="invalid-helper">
                {{$message}}    
            </small>
        @enderror

        <button type="submit" class="btn btn-primary">Crear Producto</button>
    </form>
</div>



@endsection