<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('seo')
    {{-- <title>Business advisar Creative HTML5 Template </title> --}}
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    {{--
    <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('frontend/assets/images/fav-icon/icon.png') }}"> --}}
    <link rel="icon" type="image/x-icon"
        href="{{ $settings['site_fav_icon'] ? asset($settings['site_fav_icon']) : 'Bright Mind Education Hub' }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css"
        integrity="sha512-MqL4+Io386IOPMKKyplKII0pVW5e+kb+PI/I3N87G3fHIfrgNNsRpzIXEi+0MQC0sR9xZNqZqCYVcC61fL5+Vg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--===== CSS LINK =======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/mobile.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/owlcarousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/slick-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
    <!--=====  JS SCRIPT LINK =======-->
   
    @stack('css')
</head>
<body>
    @if (session('success'))
        <div aria-live="polite" aria-atomic="true" class="position-fixed top-0 end-0 p-3"
            style="z-index: 1055; right: 0; top: 1rem;">
            <div class="toast align-items-center text-white bg-success border-0 fade" role="alert">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
            </div>
        </div>
    @endif
    <!-- loader -->
    {{-- <div class="loader-wrapper">
        <div class="loader"></div>
        <div class="loder-section left-section"></div>
        <div class="loder-section right-section"></div>
    </div> --}}
    @include('layouts.frontend.header')
    @yield('content')

    @include('layouts.frontend.footer')
    <!--===== JS SCRIPT LINK =======-->
    <script src="{{ asset('frontend/assets/js/plugins/jquery-3-6-0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/fontawesome.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/aos.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/counter.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/gsap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/Splitetext.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/sidebar.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/mobilemenu.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/owlcarousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/gsap-animation.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/nice-select.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/slick-slider.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/circle-progress.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    @push('styles')
    @endpush
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toastEl = document.querySelector('.toast');
            if (toastEl) {
                const bsToast = new bootstrap.Toast(toastEl, {
                    delay: 2000 // 3 seconds
                });
                bsToast.show();
            }
        });
    </script>
       <script>
        AOS.init({
            duration: 1000,  // animation duration
            once: true       // animate only once (optional)
        });
    </script>
</body>
</html>
