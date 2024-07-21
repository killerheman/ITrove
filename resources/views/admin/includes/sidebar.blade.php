<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="#">
                    <img class="" alt="logo" height="50" width="50"
                        src="{{ asset('frontend/assets/images/logo/logo.png') }}">
                    <h2 class="brand-text" style="color: #7C0000;">ITrove</h2>
                    {{-- <h2 class="brand-text mb-0">LNMU</h2> --}}
                </a>
            </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                        class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block primary"
                        data-ticon="icon-disc"></i></a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="{{ route('admin.dashboard') }}"><i class="feather icon-home"></i><span
                        class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
            </li>

            <li class=" nav-item"><a href="{{ route('admin.user.index') }}"><i class="feather icon-users"></i><span
                        class="menu-title" data-i18n="Documentation">Users</span></a>
            </li>


            <li class=" nav-item"><a href="#"><i class="feather icon-zap"></i><span class="menu-title"
                        data-i18n="Starter kit">Roles/Permissions</span></a>
                <ul class="menu-content">
                    <ul class="menu-content">
                        <li><a href="{{ route('admin.role.index') }}"><i></i><span class="menu-item"
                                    data-i18n="Roles">Roles</span></a>
                        </li>
                        <li><a href="{{ route('admin.permission.index') }}"><i></i><span class="menu-item"
                                    data-i18n="Permissions">Permissions</span></a>
                        </li>
                        <li><a href="{{ route('admin.userPermission') }}"><i></i><span class="menu-item"
                                    data-i18n="Assign Permission">Assign Permission</span></a>
                        </li>
                        <li><a href="{{ route('admin.roleHasPermission') }}"><i></i><span class="menu-item"
                                    data-i18n="Role Has Permission">Role Has Permission</span></a>
                        </li>

                    </ul>
                </ul>
            </li>


            <li class=" nav-item"><a href="#"><i class="feather icon-zap"></i><span class="menu-title"
                        data-i18n="Starter kit">Blog</span></a>
                <ul class="menu-content">
                    <ul class="menu-content">
                        <li><a href="{{ route('admin.blog') }}"><i></i><span class="menu-item"
                                    data-i18n="Blog">Add</span></a>
                        </li>
                    </ul>
                </ul>
            </li>

            <li class=" nav-item"><a href="#"><i class="feather icon-zap"></i><span class="menu-title"
                        data-i18n="Starter kit">Students</span></a>
                <ul class="menu-content">
                    <ul class="menu-content">
                        <li><a href="{{ route('admin.student.index') }}"><i></i><span class="menu-item"
                                    data-i18n="Blog">Pending Student</span></a>
                        </li>
                        <li><a href="{{ route('admin.student.create') }}"><i></i><span class="menu-item"
                                    data-i18n="Blog">Manage Students</span></a>
                        </li>
                    </ul>
                </ul>
            </li>

            <li class=" nav-item"><a href="#"><i class="feather icon-zap"></i><span class="menu-title"
                        data-i18n="Starter kit">Services</span></a>
                <ul class="menu-content">
                    <ul class="menu-content">
                        <li><a href="{{ route('admin.service.index') }}"><i></i><span class="menu-item"
                                    data-i18n="Blog">Add</span></a>
                        </li>
                        <li><a href="{{ route('admin.service.create') }}"><i></i><span class="menu-item"
                                    data-i18n="Blog">Manage</span></a>
                        </li>
                    </ul>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-zap"></i><span class="menu-title"
                        data-i18n="Starter kit">Work</span></a>
                <ul class="menu-content">
                    <ul class="menu-content">
                        <li><a href="{{ route('admin.work.index') }}"><i></i><span class="menu-item"
                                    data-i18n="work">Add</span></a>
                        </li>
                        <li><a href="{{ route('admin.work.create') }}"><i></i><span class="menu-item"
                            data-i18n="work">Manage</span></a>
                         </li>
                    </ul>
                </ul>
            </li>
        </ul>
    </div>
</div>
