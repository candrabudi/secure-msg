<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="opacity-0" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="ceKdwoQjZ4VuoGqoSQaSREwB7MD9sjwFnfhlp7MH">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>@yield('title') | Secure Messanger</title>
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/tippy.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/litepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themes/icewall/side-nav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/leaflet.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components/mobile-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/highlight.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/toastify.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/vendors/tom-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/highlight.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/tippy.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themes/icewall/side-nav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components/mobile-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}"> <!-- END: CSS Assets-->

    <link rel="stylesheet" href="{{ asset('assets/css/vendors/litepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/highlight.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/tippy.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themes/icewall/side-nav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components/mobile-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">

    <style>
        #map {
            height: 1200px;
            width: 100%;
        }
    </style>
</head>

<body>
    <div
        class="icewall px-5 sm:px-8 py-5 relative after:content-[''] after:bg-gradient-to-b after:from-theme-1 after:to-theme-2 dark:after:from-darkmode-800 dark:after:to-darkmode-800 after:fixed after:inset-0 after:z-[-2]">
        @include('layouts.components.mobile-menu')
        @include('layouts.components.top-bar')
        <div
            class="wrapper relative before:content-[''] before:z-[-1] before:translate-y-[35px] before:opacity-0 before:w-[95%] before:rounded-[1.3rem] before:bg-white/10 before:h-full before:-mt-4 before:absolute before:mx-auto before:inset-x-0 before:dark:bg-darkmode-400/50">
            <div
                class="wrapper-box bg-gradient-to-b from-theme-1 to-theme-2 flex rounded-[1.3rem] -mt-[7px] md:mt-0 dark:from-darkmode-400 dark:to-darkmode-400 translate-y-[35px] before:block before:absolute before:inset-0 before:bg-black/[0.15] before:rounded-[1.3rem] before:z-[-1]">
                @include('layouts.components.side-bar')
                <div
                    class="md:max-w-auto min-h-screen min-w-0 max-w-full flex-1 rounded-[1.3rem] bg-slate-100 px-4 pb-10 shadow-sm before:block before:h-px before:w-full before:content-[''] dark:bg-darkmode-700 md:px-[22px]">
                    {{-- <div class="grid grid-cols-12 gap-6">
                    </div> --}}
                    @yield('content')
                </div>
                <!-- END: Content -->
            </div>
        </div>
    </div>
    <!-- BEGIN: Vendor JS Assets-->
    <script src="{{ asset('assets/js/vendors/dom.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/tailwind-merge.js') }}"></script>
    <script src="{{ asset('assets/js/utils/helper.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/highlight.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/toastify.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/tippy.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/lucide.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/simplebar.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/pristine.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/transition.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/dropdown.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/popper.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/modal.js') }}"></script>
    <script src="{{ asset('assets/js/components/base/theme-color.js') }}"></script>
    <script src="{{ asset('assets/js/components/base/lucide.js') }}"></script>
    <script src="{{ asset('assets/js/components/mobile-menu.js') }}"></script>
    <script src="{{ asset('assets/js/components/themes/icewall/top-bar.js') }}"></script>
    <script src="{{ asset('assets/js/components/base/highlight.js') }}"></script>
    <script src="{{ asset('assets/js/components/base/source.js') }}"></script>
    <script src="{{ asset('assets/js/components/base/preview-component.js') }}"></script>
    <script src="{{ asset('assets/js/themes/icewall.js') }}"></script>
    <script src="{{ asset('assets/js/pages/validation.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/dayjs.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/litepicker.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/chartjs.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/leaflet-map.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/axios.js') }}"></script>
    <script src="{{ asset('assets/js/utils/colors.js') }}"></script>

    <script src="{{ asset('assets/js/vendors/dom.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/tailwind-merge.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/tom-select.js') }}"></script>
    <script src="{{ asset('assets/js/utils/helper.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/highlight.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/tippy.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/lucide.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/simplebar.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/transition.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/dropdown.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/popper.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/modal.js') }}"></script>
    <script src="{{ asset('assets/js/components/base/theme-color.js') }}"></script>
    <script src="{{ asset('assets/js/components/base/tom-select.js') }}"></script>
    <script src="{{ asset('assets/js/components/base/highlight.js') }}"></script>
    <script src="{{ asset('assets/js/components/base/source.js') }}"></script>
    <script src="{{ asset('assets/js/components/base/preview-component.js') }}"></script>
    <script src="{{ asset('assets/js/themes/icewall.js') }}"></script>
    <script src="{{ asset('assets/js/components/base/lucide.js') }}"></script>
    <script src="{{ asset('assets/js/components/mobile-menu.js') }}"></script>
    <script src="{{ asset('assets/js/components/themes/icewall/top-bar.js') }}"></script>

    <script src="{{ asset('assets/js/vendors/dom.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/tailwind-merge.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/dayjs.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/litepicker.js') }}"></script>
    <script src="{{ asset('assets/js/utils/helper.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/highlight.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/popper.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/dropdown.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/modal.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/tippy.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/lucide.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/transition.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/simplebar.js') }}"></script>
    <script src="{{ asset('assets/js/components/base/theme-color.js') }}"></script>
    <script src="{{ asset('assets/js/components/base/litepicker.js') }}"></script>
    <script src="{{ asset('assets/js/components/base/highlight.js') }}"></script>
    <script src="{{ asset('assets/js/components/base/source.js') }}"></script>
    <script src="{{ asset('assets/js/components/base/preview-component.js') }}"></script>
    <script src="{{ asset('assets/js/themes/icewall.js') }}"></script>
    <script src="{{ asset('assets/js/components/base/lucide.js') }}"></script>
    <script src="{{ asset('assets/js/components/mobile-menu.js') }}"></script>
    <script src="{{ asset('assets/js/components/themes/icewall/top-bar.js') }}"></script>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // Additional scripts as per your application needs
    </script>
    @yield('scripts')

    <script>
        // Inisialisasi peta dan atur titik tengah ke Indonesia
        var map = L.map('map').setView([-2.548926, 118.0148634], 5);

        // Menambahkan tile layer (peta dasar)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Menambahkan marker ke peta
        var marker = L.marker([-6.2087634, 106.845599]).addTo(map)
            .bindPopup('Jakarta, Indonesia')
            .openPopup();
    </script>
</body>

</html>
