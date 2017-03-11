<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

        <title>@yield("title") | hwid.inventor02.me</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @include("partials.nav")

        @yield("content")

        <script src="/js/app.js"></script>
        <script src="/js/init.js"></script>
    </body>
</html>