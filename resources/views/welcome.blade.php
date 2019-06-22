<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PortFolio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- CSS -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
        <!-- Vuetify -->
        <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet">

    </head>
    <body>
        <div id="app">
            <example-component></example-component>
        </div>
        <!-- JS -->
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
