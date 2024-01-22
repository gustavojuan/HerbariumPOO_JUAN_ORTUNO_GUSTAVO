<!-- resources/views/layouts/layout.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Página')</title>
    <!-- Puedes agregar aquí tus estilos CSS comunes -->
</head>
<body>

<header>
    <!-- Puedes agregar aquí la estructura común del encabezado -->
</header>

<main>
    <h1>@yield('title')</h1>
    <div class="content">
        @yield('content')
    </div>
</main>

<footer>
    <!-- Puedes agregar aquí la estructura común del pie de página -->
</footer>

<!-- Scripts al final del documento -->
@yield('scripts')
</body>
</html>
