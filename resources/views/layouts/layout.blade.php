<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Pizza house </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
       <link rel="stylesheet" href="/css/main.css">
        <!-- css goes to public -->
    </head>

    <body>

    @yield('content')

    <!-- all of the sections are named content but they change depending on the route -->
    <footer>
        copyright 2023 pizza house
    </footer>

    </body>

</html>
