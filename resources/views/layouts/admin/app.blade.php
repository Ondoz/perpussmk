<!DOCTYPE html>

<html lang="en">

<head>
    <base href="">
    <title>SMKN 1 Sakra</title>

    <link rel="shortcut icon" href="{{ asset('assets/admin/media/logos/favicon.ico') }}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{ asset('assets/admin/plugins/custom/leaflet/leaflet.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('assets/admin/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script>
        var ajaxUrlAdmin = '{{ url('admin') }}/';
    </script>

    @stack('css')
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            @include('layouts.admin.partials.sidebar')
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header tablet and mobile-->
                @include('layouts.admin.partials.header-mobile')
                <!--end::Header tablet and mobile-->
                <!--begin::Header-->
                @include('layouts.admin.partials.header')
                <!--end::Header-->
                <!--begin::Content-->
                @yield('content')
                <!--end::Content-->
                <!--begin::Footer-->
                @include('layouts.admin.partials.footer')
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->

    <!--end::Scrolltop-->
    <!--end::Main-->
    <script>
        var hostUrl = 'assets/admin/';
    </script>
    {{-- <script src="assets/admin/plugins/global/plugins.bundle.js"></script> --}}

    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('assets/admin/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/admin/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{ asset('assets/admin/plugins/custom/leaflet/leaflet.bundle.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('assets/admin/js/custom/modals/select-location.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>


    <!--end::Javascript-->
    @stack('js');

</body>
<!--end::Body-->

</html>
