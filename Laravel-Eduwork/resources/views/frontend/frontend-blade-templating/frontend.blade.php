<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/costum.css">
        <title>@yield('title')</title>
    </head>
    <body>
     @include('include.include-blade-templating.navbar')
        <div class="container-fluid middle">
            <div class="row">
                <div class="col-4">
                    @include('include.include-blade-templating.leftbar')
                </div>
                <div class="col">
                    @yield('content')
                </div>
            </div>
        </div>
     @include('include.include-blade-templating.footer')
     <script src="js/bootstrap.js"></script>
    </body>
</html>
