<!DOCTYPE html>
<html>
    <head>
        @include('admin.layout.header')<!--Including header. It contains css files,site informations etc.-->
        @yield('header')<!--this part of footer contains extra css and other files per page-->
    </head>

    <body class="fixed-left">
        <!--Preloader-->
        <!-- Begin page -->
        <div id="wrapper">
            @include('admin.layout.sidebar') <!--Including sidebar (side navigation) -->
            
            <!-- Start right Content here -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    @include('admin.layout.topbar')

                    <!-- ==================
                    PAGE CONTENT START
                    ================== -->
                    @yield('contents')<!--body contents will be added here -->

                </div> <!-- content -->

                @include('admin.layout.copyright')

            </div>
            <!-- End Right content here -->
        </div>
        <!-- END wrapper -->
        @include('admin.layout.footer')<!--Including footer. It contains js files and other things like google analytics.facebook pixel.-->
        @yield('footer')<!--this part of footer contains extra files js per page-->
    </body>
</html>