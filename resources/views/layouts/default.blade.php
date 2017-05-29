<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Laracarte</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}"/>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    
    <style>
        body{
            
            font-family: 'Open Sans',Helvetica,Arial,sans-serif;
        }

        footer{

            margin: 4em 0;
        }

    </style>

</head>
<body>
    @include('layouts/partials/_nav')
    @yield('content')
    @include('layouts/partials/_footer')

<!-- jquery library -->
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>

<!-- bootstrap js -->
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>    
</body>
</html>