@extends('admin.includes.layout')

@section('title', 'Dashboard')

@section('header-area')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/pages/dashboard-analytics.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/pages/card-analytics.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .stat-card { transition: all 0.3s ease; border: none; border-radius: 12px; }
        .stat-card:hover { transform: translateY(-4px); box-shadow: 0 8px 25px 0 rgba(0,0,0,0.08); }
        .stat-icon { width: 52px; height: 52px; display: flex; align-items: center; justify-content: center; border-radius: 12px; }
        .table-dashboard th { text-transform: uppercase; font-size: 0.78rem; letter-spacing: 0.5px; border-top: none !important; }
        .avatar-recent { width: 40px; height: 40px; border-radius: 50%; object-fit: cover; border: 2px solid #fff; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .welcome-banner {
            background: linear-gradient(135deg, #000279 0%, #171d9d 100%);
            border-radius: 14px;
            color: #ffffff;
            padding: 24px 30px;
            margin-bottom: 25px;
            box-shadow: 0 6px 20px rgba(0, 2, 121, 0.15);
        }
    </style>
@endsection

@section('content')
    <div class="content-body">
        <!-- Welcome Hero Banner -->
        <div class="welcome-banner d-flex justify-content-between align-items-center flex-wrap">
            <div>
                <h3 class="text-white font-weight-bold mb-1">
                    Innovation Trove Command Center
                </h3>
                <p class="mb-0 text-white-50" style="font-size: 14px;">
                    Manage your agency services, global portfolio case studies, blogs, client inquiries, and platform access.
                </p>
            </div>
            <div class="mt-2 mt-md-0">
                <a href="{{ route('admin.work.create') }}" class="btn btn-warning text-white mr-1 shadow-sm">
                    <i class="feather icon-plus mr-1"></i> Add Case Study
                </a>
                <a href="{{ route('home') }}" target="_blank" class="btn btn-outline-light">
                    <i class="feather icon-external-link mr-1"></i> Live Website
                </a>
            </div>
        </div>

        <!-- Primary Stats Row -->
        <div class="row">
            <div class="col-xl-3 col-md-6 col-12">
                <div class="card stat-card shadow-sm">
                    <div class="card-body d-flex align-items-center">
                        <div class="stat-icon bg-light-primary mr-2">
                            <i class="feather icon-layers text-primary font-medium-5"></i>
                        </div>
                        <div>
                            <h2 class="text-bold-700 mb-0" style="color: #000279;">{{ $stats['services'] }}</h2>
                            <p class="text-muted mb-0 font-weight-semibold">Active Services</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 col-12">
                <div class="card stat-card shadow-sm">
                    <div class="card-body d-flex align-items-center">
                        <div class="stat-icon bg-light-success mr-2">
                            <i class="feather icon-briefcase text-success font-medium-5"></i>
                        </div>
                        <div>
                            <h2 class="text-bold-700 mb-0" style="color: #28c76f;">{{ $stats['works'] }}</h2>
                            <p class="text-muted mb-0 font-weight-semibold">Portfolio Items</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 col-12">
                <div class="card stat-card shadow-sm">
                    <div class="card-body d-flex align-items-center">
                        <div class="stat-icon bg-light-warning mr-2">
                            <i class="feather icon-mail text-warning font-medium-5"></i>
                        </div>
                        <div>
                            <h2 class="text-bold-700 mb-0" style="color: #ff9f43;">{{ $stats['contacts'] ?? 0 }}</h2>
                            <p class="text-muted mb-0 font-weight-semibold">Client Inquiries</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 col-12">
                <div class="card stat-card shadow-sm">
                    <div class="card-body d-flex align-items-center">
                        <div class="stat-icon bg-light-info mr-2">
                            <i class="feather icon-file-text text-info font-medium-5"></i>
                        </div>
                        <div>
                            <h2 class="text-bold-700 mb-0" style="color: #00cfe8;">{{ $stats['blogs'] }}</h2>
                            <p class="text-muted mb-0 font-weight-semibold">Published Blogs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Secondary Stats Row -->
        <div class="row">
            <div class="col-xl-4 col-md-4 col-12">
                <div class="card stat-card shadow-sm">
                    <div class="card-body d-flex align-items-center">
                        <div class="stat-icon bg-light-danger mr-2">
                            <i class="feather icon-users text-danger font-medium-5"></i>
                        </div>
                        <div>
                            <h2 class="text-bold-700 mb-0">{{ $stats['users'] }}</h2>
                            <p class="text-muted mb-0">System Administrators</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-4 col-12">
                <div class="card stat-card shadow-sm">
                    <div class="card-body d-flex align-items-center">
                        <div class="stat-icon bg-light-secondary mr-2">
                            <i class="feather icon-tag text-secondary font-medium-5"></i>
                        </div>
                        <div>
                            <h2 class="text-bold-700 mb-0">{{ $stats['pricing'] }}</h2>
                            <p class="text-muted mb-0">Pricing Tiers</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-4 col-12">
                <div class="card stat-card shadow-sm">
                    <div class="card-body d-flex align-items-center">
                        <div class="stat-icon bg-light-primary mr-2">
                            <i class="feather icon-award text-primary font-medium-5"></i>
                        </div>
                        <div>
                            <h2 class="text-bold-700 mb-0">{{ $stats['students'] }}</h2>
                            <p class="text-muted mb-0">Enrolled Students</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tables Section -->
        <div class="row">
            <!-- Recent Inquiries -->
            <div class="col-lg-7 col-12">
                <div class="card shadow-sm" style="border-radius: 12px;">
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0" style="font-weight: 700; color: #1c2d52;">
                            <i class="feather icon-inbox mr-1 text-primary"></i> Recent Client Inquiries
                        </h4>
                        <span class="badge badge-light-primary font-weight-bold">Latest 5</span>
                    </div>
                    <div class="card-body pt-2">
                        <div class="table-responsive">
                            <table class="table table-hover table-dashboard mb-0">
                                <thead>
                                    <tr>
                                        <th>Sender</th>
                                        <th>Phone</th>
                                        <th>Subject</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($recentContacts as $contact)
                                        <tr>
                                            <td>
                                                <div class="font-weight-bold text-dark">{{ $contact->name }}</div>
                                                <small class="text-muted">{{ $contact->email }}</small>
                                            </td>
                                            <td><small class="font-weight-semibold">{{ $contact->phone }}</small></td>
                                            <td><span class="badge badge-light-info">{{ Str::limit($contact->subject, 20) }}</span></td>
                                            <td><small class="text-muted">{{ $contact->created_at ? $contact->created_at->format('d M, Y') : 'Recent' }}</small></td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center text-muted py-3">
                                                <i class="feather icon-check-circle text-success font-large-1 d-block mb-1"></i>
                                                All inquiries handled. No new incoming messages.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Work Highlights -->
            <div class="col-lg-5 col-12">
                <div class="card shadow-sm" style="border-radius: 12px;">
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0" style="font-weight: 700; color: #1c2d52;">
                            <i class="feather icon-star mr-1 text-warning"></i> Latest Portfolio Case Studies
                        </h4>
                        <a href="{{ route('admin.work.index') }}" class="btn btn-sm btn-outline-primary">Manage</a>
                    </div>
                    <div class="card-body pt-2">
                        <ul class="list-group list-group-flush">
                            @forelse($recentWorks as $work)
                                <li class="list-group-item d-flex align-items-center px-0 border-0 mb-1">
                                    <img src="{{ asset('storage/' . $work->image) }}" class="rounded mr-2" style="width: 48px; height: 48px; object-fit: cover; border: 1px solid #edf2f7;" onerror="this.src='{{ asset('frontend/assets/images/gallery/project-1.jpg') }}'">
                                    <div class="flex-grow-1" style="min-width: 0;">
                                        <div class="font-weight-bold text-truncate mb-0" style="font-size: 14px;">{{ $work->title }}</div>
                                        <small class="text-muted text-truncate d-block">{{ $work->technology }}</small>
                                    </div>
                                    <div class="badge badge-pill badge-light-primary ml-2">
                                        {{ $work->created_at ? $work->created_at->diffForHumans() : 'Active' }}
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item text-center text-muted py-2">No work items found</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
