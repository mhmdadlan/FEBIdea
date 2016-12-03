<html>
@include('includes.head')
<body>
<!-- Navigation Mockup -->
@include('includes.navigation')
<!-- End Navigation -->

<!-- Load Child View -->
@yield('content')
<!-- End Child View -->

<!-- Load Footer -->
@include('includes.footer')
<!-- End Footer -->

<!-- Load Scripts -->
@include('includes.scripts')
<!-- End Scripts -->
</body>
</html>