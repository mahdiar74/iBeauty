<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="{{ url('/css/bootstrap4.min.css') }}">

    @yield('links')
    @yield('meta')
    @yield('styles')
</head>
<body>

    <header></header>

    <main>
        @yield("content")
    </main>

    <footer></footer>


    <script src="{{ url('/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ url('/js/bootstrap.bundle.min.js') }}"></script>
    @yield('scripts')
</body>
</html>
