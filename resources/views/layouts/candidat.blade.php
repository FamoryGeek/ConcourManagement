<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Gestion de Cocour</title>
    <!-- Meta -->
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- *************
   ************ CSS Files *************
  ************* -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/bootstrap/bootstrap-icons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.min.css') }}" />

    <!-- *************
   ************ Vendor Css Files *************
  ************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/overlay-scroll/OverlayScrollbars.min.css') }}" />
    <!-- Steps Wizard CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/wizard/wizard.css') }}" />
    <!-- Date Range CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/daterange/daterange.css') }}" />
    <!-- Morris CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/morris/morris.css') }}" />
    @livewireStyles
</head>
<style>
    .buy-now .btn-buy-now {
        position: fixed;
        bottom: 3rem;
        right: 1.625rem;
        z-index: 1080;
        box-shadow: 0 1px 20px 1px #ff3e1d;
    }

    .buy-now .btn-buy-now:hover {
        box-shadow: none;
    }
</style>

<body>

    <!-- Page wrapper starts -->
    <div class="page-wrapper">

        <!-- Main container starts -->
        <div class="main-container">

            <!-- Sidebar wrapper starts -->
            @include('layouts.inc.candidat.sidebar')
            <!-- Sidebar wrapper ends -->

            <!-- App container starts -->
            <div class="app-container">

                <!-- App header starts -->
                @include('layouts.inc.candidat.header')
                <!-- App header ends -->

                <!-- App body starts -->
                <div class="app-body">
                    @yield('content')
                </div>
                <!-- App body ends -->

                <!-- App footer starts -->
                <div class="app-footer text-center">
                    <span class="large" style="font-weight: bold; font-size:1.1em;">© FDEV93 & MATA91 2024</span>
                </div>
                <!-- App footer ends -->

            </div>
            <!-- App container ends -->

        </div>
        <!-- Main container ends -->

    </div>
    <!-- Page wrapper ends -->
    @if (session('postuler') === true)
    <div class="buy-now">
        <a id="postulerBtn" href="{{ route('candidat.annuler') }}"  class="btn btn-danger btn-buy-now">Annuler</a>
    </div>
    @else
    <div class="buy-now">
        <a id="postulerBtn" href="{{ route('candidat.postuler') }}"  class="btn btn-danger btn-buy-now">Postuler</a>
    </div>
    @endif
    <!-- *************
   ************ JavaScript Files *************
  ************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>

    <!-- *************
   ************ Vendor Js Files *************
  ************* -->

    <!-- Overlay Scroll JS -->
    <script src="{{ asset('assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/overlay-scroll/custom-scrollbar.js') }}"></script>
    <!-- Steps wizard JS -->
    <script src="{{ asset('assets/vendor/wizard/wizard.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/wizard/wizard-custom.js') }}"></script>

    <!-- Apex Charts -->
    <script src="{{ asset('assets/vendor/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/orders/orders.js') }}"></script>


    <!-- Vector Maps -->
    <script src="{{ asset('assets/vendor/jvectormap/jquery-jvectormap-2.0.5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jvectormap/world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/vendor/jvectormap/gdp-data.js') }}"></script>
    <script src="{{ asset('assets/vendor/jvectormap/continents-mill.js') }}"></script>
    <script src="{{ asset('assets/vendor/jvectormap/custom/world-map-markers4.js') }}"></script>

    <!-- Custom JS files -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- Date Range JS -->
    <script src="{{ asset('assets/vendor/daterange/daterange.js') }}"></script>
    <script src="{{ asset('assets/vendor/daterange/custom-daterange.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $.get('/candidat/postulation/verifier', function(response) {
                if (response.aDejaPostule) {
                    $('#postulerBtn').text('Annuler');
                } else {
                    $('#postulerBtn').text('Postuler');
                }
            });
        });
    </script>
    @livewireScripts
</body>

</html>
