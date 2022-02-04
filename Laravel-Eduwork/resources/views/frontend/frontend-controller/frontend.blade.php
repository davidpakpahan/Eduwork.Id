<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.css') }}">
    <link rel="stylesheet" href="css/costum.css">
    <title>{{ $title }}</title>
</head>
<body>
    @include('include.include-controller.navbar')
    <div class="container">
        <div class="row">
            <div class="col-4">
                @include('include.include-controller.leftbar')
            </div>
            <div class="col">
                @yield('content')
            </div>
        </div>
    </div>
    @include('include.include-controller.footer')
    <script src="{{ asset ('js/bootsrap.js') }}"></script>
</body>
</html>