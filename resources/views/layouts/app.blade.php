<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
       

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

        
        <link rel="stylesheet" href="{{ asset('Bootstrap4/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}">
        <link rel="stylesheet" href="{{ asset('Bootstrap4/vendors/bower_components/animate.css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('Bootstrap4/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css') }}">

        <link rel="stylesheet" href="{{ asset('Bootstrap4/css/app.min.css') }}">
   
@stack('css')
</head>
    <body data-ma-theme="green">
        <main class="main">
            <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>

            @include('partials.header-nav')
            @include('partials.sidebar')

           

           


           

               
                    @yield('content')
               

               


     @include('partials.footer')
               
            </section>
        </main>

      
      

        

    <script src="{{ asset('Bootstrap4/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js') }}"></script>

        <!-- Vendors: Data tables -->
        <script src="{{ asset('Bootstrap4/vendors/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/jszip/dist/jszip.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>

        <!-- App functions and actions -->
        <script src="{{ asset('Bootstrap4/js/app.min.js') }}"></script>
        
        @stack('js')
    </body>
</html>