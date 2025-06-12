<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <html lang="es"> <!-- para español -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
    >
     <!-- El yield se encarga de recivir los datos en las paginas que tienen que ser modificadas en la plantilla-->
    <title>
       
        @yield('title')
    </title>
    
</head>
<body>

    
    <nav>
        <ul>
            <li><a href="{{route('index')}}"> inicio</a></li>
            <li><a href="{{route('products') }}">Arreglos</a></li>
        </ul>
    </nav>

    @yield('content')


    <footer>

    </footer>
</body>
</html>