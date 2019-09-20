<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Clinica | Dashboard</title>
        {{-- <link rel="icon" href="img/medical_logo_64.png" type="image/gif" sizes="16x16"> --}}
        <link rel="icon" href="../img/medical_logo_64.png" type="image/gif" sizes="16x16">
        {{-- <link rel="stylesheet" href="css/app.css"> --}}
        <link rel="stylesheet" href="../css/app.css">
        
    </head>

    <body class="hold-transition sidebar-mini skin-blue">
            
        <div id="app-panel" class="wrapper">

            <!-- Header Navbar -->
            @include('layouts.panel.header')

            <!-- Sidebar Container -->
            @include('layouts.panel.sidebar')
           
            <!-- Main content -->
            <div class="content-wrapper">
                <div class="content">
                    <div class="container-fluid">
                        {{-- Content from Blade files --}}
                        <main class="py-4">
                            @yield('dashboard')
                        </main>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            @include('layouts.panel.footer')
            
        </div>
        
        <!-- Script -->
        {{-- <script src="js/app.js"></script> --}}
        <script src="../js/app.js"></script>
    </body>
</html>