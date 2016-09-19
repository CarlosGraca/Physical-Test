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

            <div class="row">                
                <div class="col-lg-3 col-xs-3">                    
                      <img src="/img/logo.png" width="150" alt="" style="margin-left:10px;">                
                </div>
                <div class="col-lg-3 col-xs-2"></div>
                <div class="col-lg-6 col-xs-6">
                    <h3> <strong>Ficha de Treino</strong></h3>
                </div>                    
            </div>
            <!-- /.row -->
            <!-- Your Page Content Here -->
            @yield('main-content')

        </div><!-- /.content -->
    

    @section('scripts')
        @include('layouts.partials.scripts')
    @show
    </body>
</html>