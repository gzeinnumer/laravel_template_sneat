@extends('layouts.master-error')

@section('extra_head')
@endsection

@section('content')
    <!-- Error -->
    <div class="container-xxl container-p-y">
        <div class="misc-wrapper">
            <h2 class="mb-2 mx-2">Page Not Found :(</h2>
            <p class="mb-4 mx-2">Oops! 😖 The requested URL was not found on this server.</p>
            @if (App::hasDebugModeEnabled())
                <p class="mb-4 mx-2">{{ $error }}</p>
            @endif
            <button onclick="history.back()"class="btn btn-primary">Back to home</button>
            <div class="mt-3">
                <img src="{!! url('assets-dashboard/assets/img/illustrations/page-misc-error-light.png') !!}" alt="page-misc-error-light" width="500" class="img-fluid" data-app-dark-img="illustrations/page-misc-error-dark.png" data-app-light-img="illustrations/page-misc-error-light.png" />
            </div>
        </div>
    </div>
@endsection
