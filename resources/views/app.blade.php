<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@section('title') Mike y Angora @show</title>

    <link href="{{ url('css/style.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

</head>
<body>
<div class="wrapper">
    <nav class="navbar navbar-default">

    </nav>
    <main class="container spaceBottom">
        @yield('content')
    </main>

    <footer>
        Avenida (Calle) 32 No. 17 - 62 Bogotá D.C., Colombia -
        Teléfonos: Admisiones: 3078161 - Información: 3380666
    </footer>
</div>
<!-- Scripts -->
<script src="{{ url('js/jquery.js') }}"></script>
<script src="{{ url('js/main.js') }}"></script>
</body>
</html>