<!-- Main Header -->
<header class="main-header">

<style type="text/css">
    .navbar-nav > .user-menu > .dropdown-menu > .user-body {
    padding: 5px;
    border-bottom: 1px solid #f4f4f4;
    border-top: 1px solid #dddddd;
}
</style>

    <!-- Logo -->
    <a href="{{ url('/home') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>T</b>est</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Physical</b>Test </span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">{{ trans('adminlte_lang::message.togglenav') }}</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->

                @if (Auth::guest())
                    <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                    <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                @else
                    <!-- User Account Menu
                    <li class="dropdown user user-menu">
                        <!- Menu Toggle Button ->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!- The user image in the navbar->
                            <img src='/uploads/{{Auth::user()->avatar}}' class="user-image" alt="User Image"/>
                            <!- hidden-xs hides the username on small devices so only the image appears. ->
                            <span class="hidden-xs">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!- The user image in the menu ->
                            <li class="user-header">
                                <img src='/uploads/{{Auth::user()->avatar}}' class="img-circle" alt="User Image" />
                               <p>
                                    {{ Auth::user()->name }}
                                    <!- <small>{{ trans('adminlte_lang::message.login') }} Nov. 2012</small>->
                                </p>
                            </li>
                            <!- Menu Body ->
                            <li class="user-body">
                            <a href="{{ url('auth/profile') }}"><i class="fa fa-user"></i> {{ trans('adminlte_lang::message.profile') }}</a>
                                <!-<div class="col-xs-4 text-center">
                                    <a href="#">{{ trans('adminlte_lang::message.profile') }}</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">{{ trans('adminlte_lang::message.sales') }}</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">{{ trans('adminlte_lang::message.friends') }}</a>
                                </div>
                            </li>
                             Menu Footer
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat"><i class="fa fa-lock"></i> {{ trans('adminlte_lang::message.lock') }}</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ url('/logout') }}" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> {{ trans('adminlte_lang::message.signout') }}</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                  -->

                <li class="user user-menu">
                  <a href="{{ url('auth/profile') }}" data-toggle="tooltip" title="{{ trans('adminlte_lang::message.profile') }}">
                    @if(Auth::user()->avatar)
                        <img  src="/uploads/{{Auth::user()->avatar}}" class="user-image" alt="Cinque Terre" >
                    @else
                        <img  src="/img/avatar3.png"  class="user-image" alt="Cinque Terre" >
                    @endif
                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                    <span class="hidden-xs"><span class="name">{{ Auth::user()->name }}</span></span>
                  </a>
                </li>
                <li>

                  <a href="{{ url('/logout') }}"><i class="fa fa-sign-out"></i> {{ trans('adminlte_lang::message.signout') }}</a>

                </li>

                  @endif

                <!-- Control Sidebar Toggle Button
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>-->
            </ul>
        </div>
    </nav>
</header>
