<div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a
                                    class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                        class="ficon feather icon-menu"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav bookmark-icons">
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#"
                                    data-toggle="tooltip" data-placement="top" title="Back"><i
                                        class="ficon feather icon-arrow-left-circle"></i></a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i
                                        class="ficon feather icon-star warning"></i></a>
                                <div class="bookmark-input search-input">
                                    <div class="bookmark-input-icon"><i class="feather icon-search primary"></i></div>
                                    <input class="form-control input" type="text" placeholder="Explore Vuexy..."
                                        tabindex="0" data-search="starter-list">
                                    <ul class="search-list search-list-bookmark"></ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i
                                    class="ficon feather icon-maximize"></i></a></li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i
                                    class="ficon feather icon-search"></i></a>
                            <div class="search-input">
                                <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                                <input class="input" type="text" placeholder="Explore Vuexy..." tabindex="-1"
                                    data-search="starter-list">
                                <div class="search-input-close"><i class="feather icon-x"></i></div>
                                <ul class="search-list search-list-main"></ul>
                            </div>
                        </li>

                        @php
                            $notifTodayLeads = \App\Models\Lead::whereDate('next_followup_date', \Carbon\Carbon::today())
                                ->whereNotIn('status', ['Won', 'Lost', 'Junk'])
                                ->latest()
                                ->take(4)
                                ->get();

                            $notifOverdueLeads = \App\Models\Lead::where('next_followup_date', '<', \Carbon\Carbon::today())
                                ->whereNotIn('status', ['Won', 'Lost', 'Junk'])
                                ->latest()
                                ->take(3)
                                ->get();

                            $notifRecentContacts = \App\Models\contact::latest()->take(3)->get();
                            
                            $totalNotifCount = $notifTodayLeads->count() + $notifOverdueLeads->count();
                        @endphp

                        <li class="dropdown dropdown-notification nav-item">
                            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                                <i class="ficon feather icon-bell"></i>
                                @if($totalNotifCount > 0)
                                    <span class="badge badge-pill badge-danger badge-up pulse-animation">{{ $totalNotifCount }}</span>
                                @endif
                            </a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right shadow-lg" style="width: 360px; border-radius: 12px; border: none;">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-1" style="background: linear-gradient(135deg, #000279 0%, #4c1d95 100%);">
                                        <h5 class="white font-weight-bold mb-0">
                                            {{ $totalNotifCount }} Pending Notifications
                                        </h5>
                                        <small class="white-50">Real-time Lead & Inquiry Alerts</small>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list" style="max-height: 340px; overflow-y: auto;">
                                    
                                    {{-- TODAY LEADS NOTIFICATIONS --}}
                                    @foreach($notifTodayLeads as $nLead)
                                        <a class="d-flex justify-content-between border-bottom-light" href="{{ route('admin.lead.index', ['view' => 'today']) }}">
                                            <div class="media d-flex align-items-start p-1">
                                                <div class="media-left mr-1">
                                                    <i class="feather icon-phone-call font-medium-5 danger"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="danger media-heading font-weight-bold mb-25">Follow-up Today: {{ $nLead->name }}</h6>
                                                    <small class="notification-text text-dark d-block">{{ $nLead->product_campaign }} • Phone: {{ $nLead->phone }}</small>
                                                    <span class="badge badge-light-danger font-weight-bold p-25 mt-25">📌 Contact Scheduled Today</span>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach

                                    {{-- OVERDUE LEADS NOTIFICATIONS --}}
                                    @foreach($notifOverdueLeads as $oLead)
                                        <a class="d-flex justify-content-between border-bottom-light" href="{{ route('admin.lead.index', ['view' => 'overdue']) }}">
                                            <div class="media d-flex align-items-start p-1 bg-light-warning">
                                                <div class="media-left mr-1">
                                                    <i class="feather icon-alert-triangle font-medium-5 warning"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="warning media-heading font-weight-bold mb-25">Overdue: {{ $oLead->name }}</h6>
                                                    <small class="notification-text text-dark d-block">{{ $oLead->product_campaign }} • Phone: {{ $oLead->phone }}</small>
                                                    <span class="badge badge-light-warning font-weight-bold p-25 mt-25">⚠️ Follow-up Overdue</span>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach

                                    {{-- RECENT CONTACT MESSAGES --}}
                                    @foreach($notifRecentContacts as $rContact)
                                        <a class="d-flex justify-content-between border-bottom-light" href="{{ route('admin.dashboard') }}">
                                            <div class="media d-flex align-items-start p-1">
                                                <div class="media-left mr-1">
                                                    <i class="feather icon-mail font-medium-5 primary"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="primary media-heading font-weight-bold mb-25">Web Inquiry: {{ $rContact->name }}</h6>
                                                    <small class="notification-text text-muted d-block">{{ Str::limit($rContact->subject ?? $rContact->message ?? 'New contact message', 35) }}</small>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach

                                    @if($totalNotifCount == 0 && count($notifRecentContacts) == 0)
                                        <div class="text-center p-2 text-muted">
                                            <i class="feather icon-check-circle font-large-1 text-success d-block mb-1"></i>
                                            All notifications cleared! No pending lead tasks.
                                        </div>
                                    @endif

                                </li>
                                <li class="dropdown-menu-footer">
                                    <a class="dropdown-item p-1 text-center font-weight-bold text-primary" href="{{ route('admin.lead.index') }}">
                                        View All Lead Notifications & Pipeline ➔
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a
                                class="dropdown-toggle nav-link dropdown-user-link" href="#"
                                data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none">
                                    <span class="user-name text-bold-600">{{ Auth::user()->first_name ?? '' }}</span>
                                        <span class="user-status">{{ Auth::user()->roles[0]->name ?? '' }}</span></div><span><img
                                        class="round"
                                        src="{{ Auth::user()->pic ? asset(Auth::user()->pic) : 'https://ui-avatars.com/api/?name='.urlencode(Auth::user()->first_name ?? 'Admin').'&background=7367f0&color=fff' }}" onerror="this.src='https://ui-avatars.com/api/?name=Admin&background=7367f0&color=fff';"
                                        alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="feather icon-user"></i> Edit Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item"
                                    href="#">
                                    <i class="feather icon-lock"></i> Change Password
                                </a>
                                <div class="dropdown-divider"></div>
                                <form method="POST" id="my_form">
                                    @csrf
                                    <a class="dropdown-item" onclick="document.getElementById('my_form').submit();"><i class="feather icon-settings"></i> Logout
                                    </a>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="{{ asset('backend/app-assets/images/icons/xls.png') }}"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small
                            class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="{{ asset('backend/app-assets/images/icons/jpg.png') }}"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="{{ asset('backend/app-assets/images/icons/pdf.png') }}"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                            Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="{{ asset('backend/app-assets/images/icons/doc.png') }}"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web
                            Designer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img
                            src="{{ asset('backend/app-assets/images/portrait/small/avatar-s-8.jpg') }}"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img
                            src="{{ asset('backend/app-assets/images/portrait/small/avatar-s-1.jpg') }}"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img
                            src="{{ asset('backend/app-assets/images/portrait/small/avatar-s-14.jpg') }}"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing
                            Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img
                            src="{{ asset('backend/app-assets/images/portrait/small/avatar-s-6.jpg') }}"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web
                            Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span
                        class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
