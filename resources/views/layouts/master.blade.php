<!DOCTYPE html>
<html lang="en">
<head>
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

    @yield('scripts')
</body>
</html>