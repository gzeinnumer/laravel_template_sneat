<!DOCTYPE html>
<html>

<head>
    @include('layouts.partials-dashboard.head')

    <link rel="stylesheet" href="{!! url('assets-dashboard/assets/vendor/css/pages/page-misc.css') !!}" />
</head>

<body>
    @yield('content')

    @include('layouts.partials-dashboard.js')
</body>

</html>
