<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
    </head>
    <body>
        <div id="app">
          <app style="width: 100vw; height: 100vh;"></app>
        </div>

        <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>
