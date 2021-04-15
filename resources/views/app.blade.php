<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', config('APP_NAME'))</title>
    </head>
    <body>
        @yield('content')
         

        <footer>
            &copy; Copywright {{date('Y')}} &middot; <a href="/about-us">About Us</a>
        </footer>

    </body>
</html>
