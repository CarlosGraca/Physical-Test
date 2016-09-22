<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

    @section('htmlheader')
        @include('layouts.partials.htmlheader')
    @show

    <body>
        <!-- Main content -->
        <div class="container">
            <!-- Portfolio Item Heading -->

            
            <!-- /.row -->
            <!-- Your Page Content Here -->
            @yield('main-content')

        </div><!-- /.content -->
    

    @section('scripts')
        @include('layouts.partials.scripts')
    @show
    </body>
</html>