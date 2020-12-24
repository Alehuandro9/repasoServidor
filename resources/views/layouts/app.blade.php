<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.head')

<body>
    <div id="app">
        @include('partials.navbar')
        <div class=content">
            <div class="container">
                <main class="py-4">
                    <!-- Aquí está el contenido de las vistas -->
                    @yield('content')
                </main>
            </div>
        </div>
    </div>

    @include('partials.footer')
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
