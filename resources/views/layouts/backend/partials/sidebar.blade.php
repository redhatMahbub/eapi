<div class="left-sidenav">
    <ul class="metismenu left-sidenav-menu" id="side-nav">

        <li>
            <a href="{{ route('admin.dashboard') }}"><i class="mdi mdi-speedometer"></i><span>Dashboards</span>
                {{--<span class="badge badge-danger badge-pill float-right">9+</span>--}}
            </a>
        </li>
        <li>
            <a href="javascript: void(0);"><i class="mdi mdi-brush"></i><span>Appearance</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="{{ route('admin.menu.index') }}">Menu</a></li>
                <li><a href="{{ route('admin.category.index') }}">Category</a></li>
            </ul>
        </li>


    </ul>
</div>