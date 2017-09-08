<html>
<head>
    <title> @yield('title') </title>

    <!-- Material Design fonts -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Bootstrap Material Design -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-material-design.css">
    <link rel="stylesheet" type="text/css" href="/css/ripples.min.css">

    <!-- categories and subcategories included-->
    <link rel="stylesheet" type="text/css" href="{{url('css/categories.css')}}">

    <!-- for products -->
    <link rel="stylesheet" type="text/css" href="{{url('css/products.css')}}">

    <script src="/js/prodanimationheader.js"></script>

</head>
    <body>
        @include('layouts.navbar')

        <div class="container">
            @include('errors.list')
        </div>

        @yield('content')

        <footer class="row">
         {{--@include('layouts.footer')--}} 
        </footer>

        <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script src="/js/ripples.min.js"></script>
        <script src="/js/material.min.js"></script>
        <script>
            $(document).ready(function() {
                // This command is used to initialize some elements and make them work properly
                $.material.init();
            });
        </script>
        <script src="/js/prodanimationfooter.js"></script>
    </body>

</html>