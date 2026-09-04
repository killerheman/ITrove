<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand d-flex align-items-center" href="{{ route('admin.dashboard') }}">
                    <img alt="Innovation Trove" height="38" width="38" class="mr-2"
                        src="{{ asset('frontend/assets/images/logo/logo.png') }}"
                        style="object-fit: contain;">
                    <h2 class="brand-text mb-0" style="color: #000279; font-weight: 800; font-size: 1.35rem; letter-spacing: -0.5px;">Innovation<span style="color: #fb9506;">Trove</span></h2>
                </a>
            </li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                    <i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i>
                    <i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block primary" data-ticon="icon-disc"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <!-- MAIN -->
            <li class="navigation-header"><span>OVERVIEW</span></li>
            <li class="nav-item {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="feather icon-home"></i>
                    <span class="menu-title" data-i18n="Dashboard">Dashboard</span>
                </a>
            </li>

            <!-- AGENCY CORE CONTENT -->
            <li class="navigation-header"><span>AGENCY PORTFOLIO & SERVICES</span></li>
            
            <!-- Services -->
            <li class="nav-item has-sub {{ Request::is('admin/service*') ? 'open sidebar-group-active' : '' }}">
                <a href="#">
                    <i class="feather icon-layers"></i>
                    <span class="menu-title">Services</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Request::routeIs('admin.service.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.service.index') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">All Services</span>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('admin.service.create') ? 'active' : '' }}">
                        <a href="{{ route('admin.service.create') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">Add New Service</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Works / Portfolio -->
            <li class="nav-item has-sub {{ Request::is('admin/work*') ? 'open sidebar-group-active' : '' }}">
                <a href="#">
                    <i class="feather icon-briefcase"></i>
                    <span class="menu-title">Works / Portfolio</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Request::routeIs('admin.work.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.work.index') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">All Case Studies</span>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('admin.work.create') ? 'active' : '' }}">
                        <a href="{{ route('admin.work.create') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">Add Case Study</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Pricing Packages -->
            <li class="nav-item has-sub {{ Request::is('admin/pricing*') ? 'open sidebar-group-active' : '' }}">
                <a href="#">
                    <i class="feather icon-tag"></i>
                    <span class="menu-title">Pricing Packages</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Request::routeIs('admin.pricing.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.pricing.index') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">All Plans</span>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('admin.pricing.create') ? 'active' : '' }}">
                        <a href="{{ route('admin.pricing.create') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">Create Plan</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Blog Articles -->
            <li class="nav-item has-sub {{ Request::is('admin/blog*') ? 'open sidebar-group-active' : '' }}">
                <a href="#">
                    <i class="feather icon-file-text"></i>
                    <span class="menu-title">Blog & Insights</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Request::routeIs('admin.blog') ? 'active' : '' }}">
                        <a href="{{ route('admin.blog') }}#blogTable">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">All Articles</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.blog') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">Write Article</span>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('admin.blog-category.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.blog-category.index') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">Categories</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- TRAINING & ACADEMY -->
            <li class="navigation-header"><span>TRAINING & INTERNSHIPS</span></li>
            <li class="nav-item has-sub {{ Request::is('admin/student*') ? 'open sidebar-group-active' : '' }}">
                <a href="#">
                    <i class="feather icon-award"></i>
                    <span class="menu-title">Students</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Request::routeIs('admin.student.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.student.index') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">Enrolled Students</span>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('admin.student.create') ? 'active' : '' }}">
                        <a href="{{ route('admin.student.create') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">Pending Students</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- ACCESS & SECURITY -->
            <li class="navigation-header"><span>SECURITY & ACCESS</span></li>
            
            <li class="nav-item {{ Request::is('admin/user*') ? 'active' : '' }}">
                <a href="{{ route('admin.user.index') }}">
                    <i class="feather icon-users"></i>
                    <span class="menu-title">Admin Users</span>
                </a>
            </li>

            <li class="nav-item has-sub {{ Request::is('admin/role*') || Request::is('admin/permission*') || Request::is('admin/user-permission*') || Request::is('admin/roles-has-permission*') ? 'open sidebar-group-active' : '' }}">
                <a href="#">
                    <i class="feather icon-shield"></i>
                    <span class="menu-title">Roles & Access</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Request::routeIs('admin.role.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.role.index') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">Roles</span>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('admin.permission.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.permission.index') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">Permissions</span>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('admin.userPermission') ? 'active' : '' }}">
                        <a href="{{ route('admin.userPermission') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">Assign Permission</span>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('admin.roleHasPermission') ? 'active' : '' }}">
                        <a href="{{ route('admin.roleHasPermission') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">Role Permissions</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item {{ Request::routeIs('admin.fileuser.changepassword') ? 'active' : '' }}">
                <a href="{{ route('admin.fileuser.changepassword') }}">
                    <i class="feather icon-lock"></i>
                    <span class="menu-title">Change Password</span>
                </a>
            </li>

            <!-- QUICK SHORTCUTS -->
            <li class="navigation-header"><span>LIVE SITE</span></li>
            <li class="nav-item">
                <a href="{{ route('home') }}" target="_blank" rel="noopener noreferrer">
                    <i class="feather icon-external-link"></i>
                    <span class="menu-title">View Website</span>
                </a>
            </li>
        </ul>
    </div>
</div>
