<!DOCTYPE html>
<html data-theme="light">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <html lang="es"> <!-- para español -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
    >

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
     <!-- El yield se encarga de recivir los datos en las paginas que tienen que ser modificadas en la plantilla-->
    <title>
       
        @yield('title')
    </title>
    
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{route('index')}}"> inicio</a></li>
                <li><a href="{{route('products') }}">Arreglos</a></li>
            </ul>
        </nav>

    </header>
    <main>
        @yield('content')
    </main>

    <footer>

    </footer>
</body>
</html>