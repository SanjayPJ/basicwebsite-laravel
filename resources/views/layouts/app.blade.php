<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acme</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('inc.navbar')
    <div class="container mt-3">
        @if (Request::is('/'))
            @include('inc.showcase')
        @endif
        <div class="row">
            <div class="col-8">
                @yield('content')
            </div>
            <div class="col-4">
                <div class="card p-3">
                    @section('sidebar')
                    <p>this is a sidebar</p>
                    @show
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark py-3 text-center text-white mt-5">
        Copyright 2018 &copy; Acme.
    </footer>
</body>
</html>