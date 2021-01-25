<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Service Website | Home</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        {{ View::make('header') }}
        @yield('content')
        {{ View::make('footer') }}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
    <style>
        img.slider-img{
            height:400px !important;
            width:50% !important;
        }

        .custom-product{
            height:600px
        }

        .carousel-caption{
            background:#0000005e !important;
        }

        a.carousel-control-prev,
        a.carousel-control-next{
            text-decoration:none !important;
            font-size:36px !important;
            color: black !important;
        }
    </style>
</html>
