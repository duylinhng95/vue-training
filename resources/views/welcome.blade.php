<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800%7CPoppins:100,200,300i,300,400,700,400i,500%7CDancing+Script:700" rel="stylesheet">
        <title>Laravel</title>
    </head>
    <body>
        <div id="app">
            <router-view></router-view>
        </div>
        <script src="{{mix('js/app.js')}}"></script>
    </body>
</html>
