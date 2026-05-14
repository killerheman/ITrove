@extends('admin.includes.layout')

@section('title', 'Dashboard')

@section('header-area')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/pages/dashboard-analytics.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/pages/card-analytics.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .stat-card { transition: all 0.3s ease; border: none; }
        .stat-card:hover { transform: translateY(-5px); box-shadow: 0 4px 25px 0 rgba(0,0,0,0.1); }
        .stat-icon { width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; border-radius: 12px; }
        .table-dashboard th { text-transform: uppercase; font-size: 0.8rem; letter-spacing: 0.5px; border-top: none !important; }
        .avatar-recent { width: 40px; height: 40px; border-radius: 50%; object-fit: cover; border: 2px solid #fff; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .btn-outline-white { border-color: rgba(255,255,255,0.8); color: #fff; }
        .btn-outline-white:hover { background-color: #fff !important; color: #7C0000 !important; border-color: #fff !important; }
    </style>
@endsection

@section('content')
    <div class="content-body">
        <!-- Stats Section -->
        <div class="row">
            <div class="col-xl-3 col-md-6 col-12">
                <div class="card stat-card">
                    <div class="card-body d-flex align-items-center">
                        <div class="stat-icon bg-light-primary mr-2">
                            <i class="fa fa-users text-primary font-medium-5"></i>
                        </div>
                        <div>
                            <h2 class="text-bold-700 mb-0">{{ $stats['users'] }}</h2>
                            <p class="text-muted mb-0">Total Users</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="card stat-card">
                    <div class="card-body d-flex align-items-center">
                        <div class="stat-icon bg-light-info mr-2">
                            <i class="fa fa-graduation-cap text-info font-medium-5"></i>
                        </div>
                        <div>
                            <h2 class="text-bold-700 mb-0">{{ $stats['students'] }}</h2>
                            <p class="text-muted mb-0">Total Students</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="card stat-card">
                    <div class="card-body d-flex align-items-center">
                        <div class="stat-icon bg-light-success mr-2">
                            <i class="fa fa-newspaper-o text-success font-medium-5"></i>
                        </div>
                        <div>
                            <h2 class="text-bold-700 mb-0">{{ $stats['blogs'] }}</h2>
                            <p class="text-muted mb-0">Active Blogs</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="card stat-card">
                    <div class="card-body d-flex align-items-center">
                        <div class="stat-icon bg-light-warning mr-2">
                            <i class="fa fa-briefcase text-warning font-medium-5"></i>
                        </div>
                        <div>
                            <h2 class="text-bold-700 mb-0">{{ $stats['services'] }}</h2>
                            <p class="text-muted mb-0">Services Offered</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3 col-md-6 col-12">
                <div class="card stat-card">
                    <div class="card-body d-flex align-items-center">
                        <div class="stat-icon bg-light-danger mr-2">
                            <i class="fa fa-cogs text-danger font-medium-5"></i>
                        </div>
                        <div>
                            <h2 class="text-bold-700 mb-0">{{ $stats['works'] }}</h2>
                            <p class="text-muted mb-0">Portfolio Items</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="card stat-card">
                    <div class="card-body d-flex align-items-center">
                        <div class="stat-icon bg-light-secondary mr-2">
                            <i class="fa fa-tags text-secondary font-medium-5"></i>
                        </div>
                        <div>
                            <h2 class="text-bold-700 mb-0">{{ $stats['pricing'] }}</h2>
                            <p class="text-muted mb-0">Pricing Plans</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tables Section -->
        <div class="row">
            <!-- Recent Students -->
            <div class="col-lg-7 col-12">
                <div class="card shadow-sm">
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                        <h4 class="card-title"><i class="fa fa-clock-o mr-50 text-primary"></i> Recently Registered Students</h4>
                        <a href="{{ route('admin.student.index') }}" class="btn btn-sm btn-outline-primary">View All</a>
                    </div>
                    <div class="card-body pt-2">
                        <div class="table-responsive">
                            <table class="table table-hover table-dashboard">
                                <thead>
                                    <tr>
                                        <th>Student</th>
                                        <th>College</th>
                                        <th>Branch</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($recentStudents as $student)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar bg-light-primary mr-1">
                                                        <div class="avatar-content">{{ strtoupper(substr($student->name, 0, 1)) }}</div>
                                                    </div>
                                                    <div>
                                                        <div class="font-weight-bold">{{ $student->name }}</div>
                                                        <small class="text-muted">{{ $student->email }}</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $student->collegename }}</td>
                                            <td>{{ $student->branch }}</td>
                                            <td>{{ $student->created_at->format('d M, Y') }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center text-muted py-2">No recent registrations found</td>
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
                <div class="card shadow-sm">
                    <div class="card-header border-bottom">
                        <h4 class="card-title"><i class="fa fa-star-o mr-50 text-warning"></i> Latest Portfolio Updates</h4>
                    </div>
                    <div class="card-body pt-2">
                        <ul class="list-group list-group-flush">
                            @forelse($recentWorks as $work)
                                <li class="list-group-item d-flex align-items-center px-0 border-0 mb-1">
                                    <img src="{{ asset('storage/' . $work->image) }}" class="rounded mr-1" style="width: 50px; height: 50px; object-fit: cover;" onerror="this.src='{{ asset('backend/app-assets/images/pages/card-image-6.jpg') }}'">
                                    <div class="flex-grow-1">
                                        <div class="font-weight-bold mb-0">{{ $work->title }}</div>
                                        <small class="text-muted">{{ $work->technology }}</small>
                                    </div>
                                    <div class="badge badge-pill badge-light-primary ml-auto">
                                        {{ $work->created_at->diffForHumans() }}
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item text-center text-muted py-2">No work items found</li>
                            @endforelse
                        </ul>
                        <div class="text-center mt-2">
                            <a href="{{ route('admin.work.index') }}" class="btn btn-block btn-primary shadow">Manage Portfolio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions Row -->
        <div class="row">
            <div class="col-12">
                <div class="card bg-primary text-white text-center p-2 shadow">
                    <div class="card-content">
                        <div class="card-body">
                            <h3 class="text-white mb-1">Quick Management Shortcuts</h3>
                            <div class="d-flex justify-content-center flex-wrap">
                                <a href="{{ route('admin.blog') }}" class="btn btn-outline-white m-1">New Blog Post</a>
                                <a href="{{ route('admin.service.create') }}" class="btn btn-outline-white m-1">Add Service</a>
                                <a href="{{ route('admin.work.create') }}" class="btn btn-outline-white m-1">Add Work Item</a>
                                <a href="{{ route('admin.pricing.create') }}" class="btn btn-outline-white m-1">New Pricing Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
