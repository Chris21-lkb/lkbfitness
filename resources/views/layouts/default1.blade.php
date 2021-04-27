<!doctype html>
<html>
    <head>
        @include('includes.head')
    </head>
    <body>
        <header>
            @include('includes.headerone')
        </header>
        <div id="main">
            @yield('content')
        </div>
        <footer>
            @include('includes.footerone')
        </footer>
    </body>
</html>