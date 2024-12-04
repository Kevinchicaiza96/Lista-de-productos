<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-pzjw8f+ua7Kw1TIq0v8Fq3Fi6g38sK3K2IoK/01bWnJpv7E5ZzMi93FxsM0WbO4g" crossorigin="anonymous">
    <title>@yield('titulo')</title>
</head>
<body>

    <!-- Encabezado con barra de navegación -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('producto.index') }}">Gestionar Producto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('producto.create') }}">Registrar Producto</a>
                    </li>
                    <!-- Puedes agregar más enlaces aquí -->
                </ul>
            </div>
        </nav>
    </header>

    <!-- Contenido principal -->
    <main class="container mt-4">
        @yield('contenido')
    </main>

    <!-- Footer -->
    <footer class="bg-light py-4 mt-5">
        <div class="container text-center">
            <!-- Logo o nombre de la empresa -->
            <div class="mb-3">
                <img src="{{ asset('img/fenix.png') }}" alt="Logo de PopayApp">
            </div>

            <!-- Enlaces rápidos -->
            <div class="mb-3">
                <a href="#home" class="text-dark mx-2">Inicio</a>
                <a href="#about" class="text-dark mx-2">Acerca de</a>
                <a href="#services" class="text-dark mx-2">Servicios</a>
                <a href="#contact" class="text-dark mx-2">Contacto</a>
            </div>
            
            <!-- Derechos reservados -->
            <p class="mt-4">&copy; 2024 Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Scripts adicionales (si los necesitas) -->
    <!-- Scripts de Bootstrap (CDN) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zyPxJ3fF6lR9gBCsw2P0p/WeI/hoPxkYVm4f4O8g" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.0/dist/umd/popper.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0v8Fq3Fi6g38sK3K2IoK/01bWnJpv7E5ZzMi93FxsM0WbO4g" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0v8Fq3Fi6g38sK3K2IoK/01bWnJpv7E5ZzMi93FxsM0WbO4g" crossorigin="anonymous"></script>

    <!-- Script de la aplicación -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
