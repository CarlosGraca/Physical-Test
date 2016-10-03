<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    @if(Auth::user()->avatar)
                        <img  src="/uploads/{{Auth::user()->avatar}}" class="img-circle" alt="Cinque Terre" >
                    @else
                        <img  src="/img/avatar3.png" class="img-thumbnail" alt="Cinque Terre" >
                    @endif
                </div>
                <div class="pull-left info">
                    <p><span class="name">{{ Auth::user()->name }}</span></p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li><a href="{{ url('tests') }}"><i class='fa fa-qrcode'></i><span>{{ trans('adminlte_lang::message.tests') }}</span></a></li>
            <li><a href="{{ url('sheets') }}"><i class='fa fa-tag'></i><span>{{ trans('adminlte_lang::message.evaluation_sheet') }}</span></a></li>
            <!--<li class="treeview">
                <a href="#"><i class='glyphicon glyphicon-qrcode'></i> <span>{{ trans('adminlte_lang::message.tests') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                     <li><a href="{{ url('tests') }}">{{ trans('adminlte_lang::message.list_test') }}</a></li>
                     <li><a href="{{ url('sheets') }}"><span>{{ trans('adminlte_lang::message.evaluation_sheet') }}</span></a></li>
                </ul>
            </li>-->
            <li><a href="{{ url('clients') }}"><i class='fa fa-user'></i> <span>{{ trans('adminlte_lang::message.clients') }}</span></a></li>
            <li><a href="{{ url('settings') }}"><i class='fa fa-gears'></i> <span>{{ trans('adminlte_lang::message.settings') }}</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
