
@include('admin.partials.head')
<body>
    @include('admin.partials.sidebar')

    <div class="main-content">
        <!-- Top navbar -->
        @include('admin.partials.topnav')
        <!-- Header -->
        <!-- Page content -->
        @yield('content')
          <!-- Footer -->
        @include('admin.partials.footer')
    </div>
</body>
</html>