
        <aside class="main-sidebar main-sidebar-custom sidebar-dark-olive elevation-4">
            <!-- Brand Logo -->
            <a href="{{ url('/') }}" class="brand-link bg-olive">
                <img src="{{ asset('adm') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-bold">{{ config('app.name', 'Laravel') }}</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ Auth::user()->avatar == NULL ? asset('adm').'/dist/img/avatar5.png' : '' }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-flat nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        @can('role-R')
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link {{ Request::routeIs('dashboard') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    {{ trans('menu.dashboard.title') }}
                                    {{-- <span class="right badge badge-danger">New</span> --}}
                                </p>
                            </a>
                        </li>
                        @endcan
                        @canany(['role-R', 'permission-R', 'user-R'])
                        <li class="nav-item {{ Request::routeIs('roles*') || Request::routeIs('permissions*') || Request::routeIs('users*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::routeIs('roles*') || Request::routeIs('permissions*') || Request::routeIs('users*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-shield-alt"></i>
                                <p>
                                    {{ trans('menu.userManagement.title') }}
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @can('role-R')
                                <li class="nav-item">
                                    <a href="{{ route('roles.index') }}" class="nav-link {{ Request::routeIs('roles*') ? 'active' : '' }}">
                                        <i class="fas fa-angle-right nav-icon"></i>
                                        <p>{{ trans('menu.role.title') }}</p>
                                    </a>
                                </li>
                                @endcan
                                @can('permission-R')
                                <li class="nav-item">
                                    <a href="{{ route('permissions.index') }}" class="nav-link {{ Request::routeIs('permissions*') ? 'active' : '' }}">
                                        <i class="fas fa-angle-right nav-icon"></i>
                                        <p>{{ trans('menu.permission.title') }}</p>
                                    </a>
                                </li>
                                @endcan
                                @can('user-R')
                                <li class="nav-item">
                                    <a href="{{ route('users.index') }}" class="nav-link {{ Request::routeIs('users*') ? 'active' : '' }}">
                                        <i class="fas fa-angle-right nav-icon"></i>
                                        <p>{{ trans('menu.user.title') }}</p>
                                    </a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                        @endcan
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-shield-alt"></i>
                                <p>
                                    {{ trans('menu.settingManagement.title') }}
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="fas fa-angle-right nav-icon"></i>
                                        <p>{{ trans('menu.settingWebsite.title') }}</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="fas fa-angle-right nav-icon"></i>
                                        <p>{{ trans('menu.termsOfService.title') }}</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="fas fa-angle-right nav-icon"></i>
                                        <p>{{ trans('menu.privacyPolicy.title') }}</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
            <div class="sidebar-custom accent-teal">
                @can('website-config')
                    <a href="#" class="btn btn-link"><i class="fas fa-cogs"></i></a>
                @endcan

                <!-- Logout Start -->
                <a href="{{ route('logout') }}" class="btn btn-danger hide-on-collapse pos-right" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ trans('auth.logout.title') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                <!-- Logout End -->
            </div>
            <!-- /.sidebar-custom -->
        </aside>
