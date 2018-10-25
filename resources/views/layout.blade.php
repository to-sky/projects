<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'Laratour')</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/"  class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/projects"  class="nav-link">Projects</a>
                </li>
                <li class="nav-item">
                    <a href="/contact"  class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="/about"  class="nav-link">About Us</a>
                </li>
            </ul>
        </nav>
        
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>