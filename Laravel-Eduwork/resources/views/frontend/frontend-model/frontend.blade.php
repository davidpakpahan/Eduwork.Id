<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('include.include-css.css')
    <title>@yield('title')</title>
</head>
<body>
    @include('include.include-model.navbar')
    <div class="container-fluid">
        @yield('content')
    </div>
    @include('include.include-js.js')
</body>
</html>