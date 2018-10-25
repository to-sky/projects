<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'Laratour')</title>
    </head>
    <body>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/projects">Projects</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/about">About Us</a></li>
        </ul>
        
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>