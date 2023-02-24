<!DOCTYPE html>
<html>

<head>
    @include('layouts.partials-dashboard.head')
    @yield('extra_head')
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            @include('layouts.partials-dashboard.aside')

            <div class="layout-page">

                @include('layouts.partials-dashboard.nav')

                <div class="content-wrapper">

                    <div class="container-xxl flex-grow-1 container-p-y">
                        @yield('content')

                        @yield('modals')

                        @include('layouts.partials-dashboard.modals-debug')
                        @include('layouts.partials-dashboard.modals-success')
                        @include('layouts.partials-dashboard.modals-failed')
                    </div>

                    @include('layouts.partials-dashboard.footer')

                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>

        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    @include('layouts.partials-dashboard.js')

    @yield('extra_js')
</body>

</html>
