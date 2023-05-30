@include('app.inc.header')

<body>

    <div class="page">
        <!-- Navbar -->
        @include('app.inc.menu')
        <div class="page-wrapper">
            <!-- Page body -->
            <div class="page-body">
                @yield('content')
            </div>
        </div>
        @include('app.inc.footer')
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('assets/dist/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/demo.min.js') }}" defer></script>
</body>

</html>