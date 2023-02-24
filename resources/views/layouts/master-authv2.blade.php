<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="{!! url('assets-dashboard/assets/') !!}" data-template="vertical-menu-template-free">

<head>
    @include('layouts.partials-auth.head')
</head>

<body>
    <!-- Content -->

    @yield('content')

    @include('layouts.partials-auth.js')

    <!-- / Content -->
</body>

</html>
