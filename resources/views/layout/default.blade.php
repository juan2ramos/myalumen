<!DOCTYPE html>
<html lang="es">
<head>

    <title>@section('title') Entre Lagos @show</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="author" content="juan2ramos"/>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1"/>

    <!-- Style -->
    <link href="{{ url('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ url('css/style.css') }}" rel="stylesheet">



    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>

</head>
<body>

@yield('content')
</body>

<!-- JavaScript -->

<!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="{{ url('js/flexslider.js') }}"></script>
<script src="{{ url('js/instafeed.min.js') }}"></script>

<script src="{{ url('js/main.js') }}"></script>
<script>

</script>
</html>