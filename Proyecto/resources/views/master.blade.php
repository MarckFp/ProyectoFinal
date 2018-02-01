<html>
<head lang="es-ES">
    <title>@yield('title')</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Material Design-->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="//fonts.googleapis.com/icon=family-Material+Icons">
    <!--Normal-->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css'>
    <!--Material Design-->
    <link rel="stylesheet" href="/css/bootstrap-material-design.css">
    <link rel="stylesheet" href="/css/ripples.css">
    <link rel="stylesheet" href="/css/fullpage.less">
    <!--Scripts-->

    <link rel="stylesheet" href='https://maxcdn.bootstrapcdn.con/bootstrap/3.3.7/css/bootstrap-theme.css'>
    <script src='https://code.jquery.com/jquery-3.1.0.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js'></script>

    <!--Material Design-->
    <script src="/js/bootstrap-material-design.js"></script>
    <script src="/js/ripples.js"></script>
    <script>
        $(document).ready(function () {
            $material.init();
        });
    </script>

    <link rel="icon" type="image/jpg" href="Imagenes/bitcoin.jpg">
</head>
<body>
@include('shared.navbar')
@yield('content')
@include('shared.footer')
</body>
</html>