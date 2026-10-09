@extends('admin.includes.layout')

@section('title', 'Lead Management & CRM | Innovation Trove')

@section('header-area')
<style>
    .lead-hero-banner {
        background: linear-gradient(135deg, #000279 0%, #4c1d95 60%, #1e1b4b 100%);
        border-radius: 16px;
        color: #ffffff;
        padding: 28px 32px;
        margin-bottom: 25px;
        box-shadow: 0 10px 30px rgba(0, 2, 121, 0.2);
        position: relative;
        overflow: hidden;
    }
    .lead-hero-banner::after {
        content: '';
        position: absolute;
        right: -30px;
        top: -30px;
        width: 200px;
        height: 200px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 50%;
        pointer-events: none;
    }
    .stat-card-elevated {
        border: none;
        border-radius: 14px;
        box-shadow: 0 4px 18px rgba(0,0,0,0.05);
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        background: #ffffff;
    }
    .stat-card-elevated:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.1);
    }
    .icon-shape {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.4rem;
    }
    .badge-campaign {
        font-size: 12px;
        font-weight: 700;
        padding: 6px 14px;
        border-radius: 30px;
        transition: all 0.2s ease;
    }
    .badge-campaign:hover {
        transform: scale(1.03);
    }
    .btn-whatsapp-green {
        background-color: #25D366 !important;
        color: #ffffff !important;
        border: none !important;
        font-weight: 700 !important;
        box-shadow: 0 4px 12px rgba(37, 211, 102, 0.3) !important;
    }
    .btn-whatsapp-green:hover {
        background-color: #1eb956 !important;
        color: #ffffff !important;
        box-shadow: 0 6px 16px rgba(37, 211, 102, 0.4) !important;
    }

    /* Kanban Pipeline Board Styling */
    .kanban-board-container {
        display: flex;
        gap: 16px;
        overflow-x: auto;
        padding-bottom: 20px;
    }
    .kanban-column {
        flex: 0 0 300px;
        min-width: 300px;
        background: #f8fafc;
        border-radius: 14px;
        padding: 14px;
        border: 1px solid #e2e8f0;
    }
    .kanban-column-header {
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding-bottom: 10px;
        margin-bottom: 12px;
        border-bottom: 2px solid #cbd5e1;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .kanban-card {
        background: #ffffff;
        border-radius: 10px;
        padding: 14px;
        margin-bottom: 12px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        border-left: 4px solid #3b82f6;
        transition: all 0.2s ease;
    }
    .kanban-card:hover {
        box-shadow: 0 6px 18px rgba(0,0,0,0.08);
        transform: translateY(-2px);
    }
    .kanban-card.stage-new { border-left-color: #3b82f6; }
    .kanban-card.stage-contacted { border-left-color: #06b6d4; }
    .kanban-card.stage-demo { border-left-color: #8b5cf6; }
    .kanban-card.stage-proposal { border-left-color: #f59e0b; }
    .kanban-card.stage-won { border-left-color: #10b981; }

    .pulse-indicator {
        animation: pulse-animation 2s infinite;
    }
    @keyframes pulse-animation {
        0% { box-shadow: 0 0 0 0 rgba(239, 68, 68, 0.4); }
        70% { box-shadow: 0 0 0 10px rgba(239, 68, 68, 0); }
        100% { box-shadow: 0 0 0 0 rgba(239, 68, 68, 0); }
    }

    /* Custom Professional Filter Controls */
    .custom-filter-select {
        height: 42px !important;
        font-size: 13.5px !important;
        font-weight: 600 !important;
        color: #1e293b !important;
        background-color: #ffffff !important;
        border: 1.5px solid #cbd5e1 !important;
        border-radius: 8px !important;
        padding: 6px 12px !important;
        line-height: 1.5 !important;
        box-shadow: 0 1px 3px rgba(0,0,0,0.03) !important;
        transition: all 0.2s ease-in-out !important;
    }
    .custom-filter-select:focus {
        border-color: #4f46e5 !important;
        box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.12) !important;
        outline: none !important;
    }
    .custom-search-input {
        height: 42px !important;
        font-size: 13.5px !important;
        font-weight: 500 !important;
        border: 1.5px solid #cbd5e1 !important;
        border-right: none !important;
        border-top-left-radius: 8px !important;
        border-bottom-left-radius: 8px !important;
        padding: 8px 14px !important;
    }
    .custom-search-input:focus {
        border-color: #4f46e5 !important;
        box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.12) !important;
    }
    .custom-search-btn {
        height: 42px !important;
        padding: 0 20px !important;
        font-weight: 700 !important;
        font-size: 13.5px !important;
        border-top-right-radius: 8px !important;
        border-bottom-right-radius: 8px !important;
        background: linear-gradient(135deg, #000279 0%, #4c1d95 100%) !important;
        border: none !important;
        color: #ffffff !important;
        box-shadow: 0 3px 10px rgba(0, 2, 121, 0.2) !important;
        display: flex !important;
        align-items: center !important;
        gap: 6px !important;
    }
    .custom-search-btn:hover {
        background: linear-gradient(135deg, #000255 0%, #3b0764 100%) !important;
        color: #ffffff !important;
    }
</style>
@endsection

@section('content')
<div class="content-body">
    <!-- Flash Notifications -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm mb-2" role="alert">
            <strong><i class="feather icon-check-circle mr-1"></i> Success!</strong> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show shadow-sm mb-2" role="alert">
            <strong><i class="feather icon-alert-circle mr-1"></i> Error!</strong> {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- Hero Command Center Banner -->
    <div class="lead-hero-banner d-flex justify-content-between align-items-center flex-wrap">
        <div>
            <div class="d-inline-flex align-items-center bg-white-10 px-3 py-1 rounded-pill mb-2" style="background: rgba(255,255,255,0.15); font-size: 12px; font-weight: 700; letter-spacing: 0.8px;">
                <span class="mr-1">🚀</span> AD CAMPAIGNS & WHATSAPP LEAD CRM
            </div>
            <h2 class="text-white font-weight-bold mb-1" style="font-size: 26px; letter-spacing: -0.5px;">
                Lead Management Command Center
            </h2>
            <p class="mb-0 text-white-50" style="font-size: 14px; max-width: 650px;">
                Track incoming inquiries from WhatsApp Ads for <strong>ITrove POS</strong>, <strong>ITrove School ERP</strong>, and <strong>IT Agency Services</strong>. Schedule follow-ups, send quick WhatsApp replies, and close high-value deals.
            </p>
        </div>
        <div class="mt-2 mt-md-0 d-flex flex-wrap gap-2">
            <button class="btn btn-warning font-weight-bold shadow-sm mr-2" data-toggle="modal" data-target="#addLeadModal">
                <i class="feather icon-plus mr-1"></i> Add New Lead
            </button>
            <a href="{{ route('admin.lead.sendDigest') }}" class="btn btn-outline-light font-weight-semibold mr-2" onclick="return confirm('Send email reminder digest of leads to contact today?')">
                <i class="feather icon-mail mr-1"></i> Email Digest Today
            </a>
        </div>
    </div>

    <!-- Executive Metrics Grid -->
    <div class="row">
        <div class="col-xl-3 col-md-6 col-12 mb-2">
            <div class="card stat-card-elevated h-100">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <p class="text-muted font-weight-bold mb-0 text-uppercase" style="font-size: 11px; letter-spacing: 0.5px;">Total Leads & Pipeline</p>
                        <h2 class="font-weight-bolder mb-0" style="color: #000279; font-size: 28px;">{{ $stats['total'] }}</h2>
                        <small class="text-primary font-weight-bold">Pipeline Value: ₹{{ number_format($stats['pipeline_value'], 0) }}</small>
                    </div>
                    <div class="icon-shape bg-light-primary text-primary">
                        <i class="feather icon-users"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 col-12 mb-2">
            <div class="card stat-card-elevated h-100 {{ $stats['today'] > 0 ? 'pulse-indicator' : '' }}" style="{{ $stats['today'] > 0 ? 'border: 2px solid #ef4444;' : '' }}">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <p class="text-muted font-weight-bold mb-0 text-uppercase" style="font-size: 11px; letter-spacing: 0.5px;">Contact Scheduled Today</p>
                        <h2 class="font-weight-bolder mb-0 text-danger" style="font-size: 28px;">{{ $stats['today'] }}</h2>
                        <small class="text-danger font-weight-bold">Action Required Today</small>
                    </div>
                    <div class="icon-shape bg-light-danger text-danger">
                        <i class="feather icon-phone-call"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 col-12 mb-2">
            <div class="card stat-card-elevated h-100">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <p class="text-muted font-weight-bold mb-0 text-uppercase" style="font-size: 11px; letter-spacing: 0.5px;">Converted Value (Won)</p>
                        <h2 class="font-weight-bolder mb-0 text-success" style="font-size: 28px;">₹{{ number_format($stats['won_value'], 0) }}</h2>
                        <small class="text-success font-weight-bold">Win Rate: {{ $stats['conversion_rate'] }}%</small>
                    </div>
                    <div class="icon-shape bg-light-success text-success">
                        <i class="feather icon-award"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 col-12 mb-2">
            <div class="card stat-card-elevated h-100">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <p class="text-muted font-weight-bold mb-0 text-uppercase" style="font-size: 11px; letter-spacing: 0.5px;">Hot Leads & Overdue</p>
                        <h2 class="font-weight-bolder mb-0 text-warning" style="font-size: 28px;">🔥 {{ $stats['hot'] }}</h2>
                        <small class="text-warning font-weight-bold">Overdue: {{ $stats['overdue'] }}</small>
                    </div>
                    <div class="icon-shape bg-light-warning text-warning">
                        <i class="feather icon-flame"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Campaign Selector & View Mode Switcher -->
    <div class="card mb-2 shadow-sm border-0" style="border-radius: 14px;">
        <div class="card-body p-2 d-flex flex-wrap align-items-center justify-content-between">
            <div class="d-flex align-items-center flex-wrap mr-1 mb-1 mb-md-0">
                <span class="font-weight-bold mr-2 text-uppercase text-muted" style="font-size: 11px; letter-spacing: 0.5px;">Filter by Campaign:</span>
                
                <a href="{{ route('admin.lead.index', array_merge(request()->query(), ['campaign' => 'all'])) }}" 
                   class="badge badge-campaign mr-2 mb-1 {{ request('campaign', 'all') == 'all' ? 'bg-primary text-white' : 'bg-light text-dark' }}">
                    ⚡ All Campaigns ({{ $stats['total'] }})
                </a>
                
                <a href="{{ route('admin.lead.index', array_merge(request()->query(), ['campaign' => 'ITrove POS'])) }}" 
                   class="badge badge-campaign mr-2 mb-1 {{ request('campaign') == 'ITrove POS' ? 'bg-indigo text-white' : 'bg-light-primary text-primary' }}" style="{{ request('campaign') == 'ITrove POS' ? 'background: #4f46e5; color: white;' : '' }}">
                    🛒 ITrove POS ({{ $stats['pos_count'] }})
                </a>
                
                <a href="{{ route('admin.lead.index', array_merge(request()->query(), ['campaign' => 'ITrove School'])) }}" 
                   class="badge badge-campaign mr-2 mb-1 {{ request('campaign') == 'ITrove School' ? 'bg-warning text-white' : 'bg-light-warning text-warning' }}">
                    🏫 ITrove School ERP ({{ $stats['school_count'] }})
                </a>
                
                <a href="{{ route('admin.lead.index', array_merge(request()->query(), ['campaign' => 'ITrove Agency'])) }}" 
                   class="badge badge-campaign mr-2 mb-1 {{ request('campaign') == 'ITrove Agency' ? 'bg-info text-white' : 'bg-light-info text-info' }}">
                    💼 ITrove Agency / Web ({{ $stats['agency_count'] }})
                </a>
            </div>

            <!-- View Switcher Tabs (Directory Table vs Kanban Board) -->
            <div class="nav nav-pills" role="tablist">
                <a class="nav-link active font-weight-bold py-50 px-1 mr-1" id="table-view-tab" data-toggle="pill" href="#table-view" role="tab" aria-selected="true">
                    <i class="feather icon-list mr-1"></i> Directory List
                </a>
                <a class="nav-link font-weight-bold py-50 px-1" id="kanban-view-tab" data-toggle="pill" href="#kanban-view" role="tab" aria-selected="false">
                    <i class="feather icon-grid mr-1"></i> Kanban Pipeline Board
                </a>
            </div>
        </div>
    </div>

    <!-- Main Content Tab Views -->
    <div class="tab-content">
        <!-- TAB 1: DIRECTORY TABLE VIEW -->
        <div class="tab-pane fade show active" id="table-view" role="tabpanel">
            <!-- Filter Bar & Category Tabs -->
            <div class="card mb-2 shadow-sm border-0" style="border-radius: 14px;">
                <div class="card-header pb-1 border-bottom">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link {{ $viewType === 'all' ? 'active' : '' }}" href="{{ route('admin.lead.index', ['view' => 'all']) }}">
                                All Leads <span class="badge badge-pill badge-primary ml-1">{{ $stats['total'] }}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $viewType === 'today' ? 'active font-weight-bold' : '' }}" href="{{ route('admin.lead.index', ['view' => 'today']) }}">
                                📌 Contact Today <span class="badge badge-pill badge-danger ml-1">{{ $stats['today'] }}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $viewType === 'overdue' ? 'active' : '' }}" href="{{ route('admin.lead.index', ['view' => 'overdue']) }}">
                                ⚠️ Overdue <span class="badge badge-pill badge-warning ml-1">{{ $stats['overdue'] }}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $viewType === 'hot' ? 'active' : '' }}" href="{{ route('admin.lead.index', ['view' => 'hot']) }}">
                                🔥 Hot Leads <span class="badge badge-pill badge-danger ml-1">{{ $stats['hot'] }}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $viewType === 'won' ? 'active' : '' }}" href="{{ route('admin.lead.index', ['view' => 'won']) }}">
                                🎉 Won / Converted
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body p-2">
                    <form method="GET" action="{{ route('admin.lead.index') }}" class="row align-items-end">
                        <input type="hidden" name="view" value="{{ $viewType }}">
                        
                        <div class="col-md-3 col-sm-6 mb-1">
                            <label class="custom-filter-label">Status Stage</label>
                            <select name="status" class="form-control custom-filter-select" onchange="this.form.submit()">
                                <option value="all" {{ request('status') == 'all' ? 'selected' : '' }}>⚡ All Lead Statuses</option>
                                <option value="New" {{ request('status') == 'New' ? 'selected' : '' }}>🔵 New Lead</option>
                                <option value="Contacted" {{ request('status') == 'Contacted' ? 'selected' : '' }}>ℹ️ Contacted / Discussion</option>
                                <option value="Contact Tomorrow" {{ request('status') == 'Contact Tomorrow' ? 'selected' : '' }}>🗓️ Contact Tomorrow</option>
                                <option value="Demo Scheduled" {{ request('status') == 'Demo Scheduled' ? 'selected' : '' }}>🟣 POS Demo Scheduled</option>
                                <option value="Demo Completed" {{ request('status') == 'Demo Completed' ? 'selected' : '' }}>✅ Demo Completed</option>
                                <option value="Account Created" {{ request('status') == 'Account Created' ? 'selected' : '' }}>💻 POS Account Created</option>
                                <option value="Proposal Sent" {{ request('status') == 'Proposal Sent' ? 'selected' : '' }}>🟧 Proposal Sent</option>
                                <option value="Won" {{ request('status') == 'Won' || request('status') == 'Account Activated / Paid' ? 'selected' : '' }}>🎉 Won / Account Activated</option>
                                <option value="Lost" {{ request('status') == 'Lost' ? 'selected' : '' }}>❌ Lost / Uninterested</option>
                                <option value="Junk" {{ request('status') == 'Junk' ? 'selected' : '' }}>🚫 Junk / Invalid</option>
                            </select>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-1">
                            <label class="custom-filter-label">Priority Filter</label>
                            <select name="priority" class="form-control custom-filter-select" onchange="this.form.submit()">
                                <option value="all" {{ request('priority') == 'all' ? 'selected' : '' }}>All Priorities</option>
                                <option value="Hot" {{ request('priority') == 'Hot' ? 'selected' : '' }}>🔥 Hot Priority</option>
                                <option value="Warm" {{ request('priority') == 'Warm' ? 'selected' : '' }}>⚡ Warm Priority</option>
                                <option value="Cold" {{ request('priority') == 'Cold' ? 'selected' : '' }}>❄️ Cold Priority</option>
                            </select>
                        </div>

                        <div class="col-md-6 col-sm-12 mb-1">
                            <label class="custom-filter-label">Search Leads & Keywords</label>
                            <div class="input-group">
                                <input type="text" name="search" class="form-control custom-search-input" placeholder="Search Lead Name, Phone, City, Requirement Note..." value="{{ request('search') }}">
                                <div class="input-group-append">
                                    <button class="btn custom-search-btn" type="submit"><i class="feather icon-search"></i> Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Directory Table Card -->
            <div class="card shadow-sm border-0" style="border-radius: 14px;">
                <div class="table-responsive">
                    <table class="table table-hover table-striped align-middle mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th>Lead Contact Info</th>
                                <th>Ad Campaign / Product</th>
                                <th>Quick WhatsApp Action</th>
                                <th>Status & Deal Value</th>
                                <th>Priority</th>
                                <th>Next Contact Date</th>
                                <th class="text-right">Manage Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($leads as $lead)
                                <tr class="{{ $lead->isScheduledToday() ? 'table-warning' : ($lead->isOverdue() ? 'table-danger' : '') }}">
                                    <td>
                                        <div class="font-weight-bold text-dark" style="font-size: 15px;">{{ $lead->name }}</div>
                                        @if($lead->company_name)
                                            <div class="text-muted small"><i class="feather icon-briefcase mr-1"></i>{{ $lead->company_name }}</div>
                                        @endif
                                        @if($lead->city)
                                            <div class="text-muted small"><i class="feather icon-map-pin mr-1"></i>{{ $lead->city }}</div>
                                        @endif
                                        <div class="text-muted small font-weight-bold"><i class="feather icon-phone mr-1"></i>{{ $lead->phone }}</div>
                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-light-primary font-weight-bold p-50">
                                            {{ $lead->product_campaign }}
                                        </span>
                                        <div class="text-muted small mt-25">Source: <strong>{{ $lead->lead_source }}</strong></div>
                                    </td>
                                    <td>
                                        <a href="{{ $lead->whatsapp_url }}" target="_blank" rel="noopener" class="btn btn-sm btn-whatsapp-green waves-effect waves-light mb-25">
                                            <i class="feather icon-message-circle mr-1"></i> WhatsApp Chat
                                        </a>
                                        @if($lead->email)
                                            <div><a href="mailto:{{ $lead->email }}" class="small text-muted"><i class="feather icon-mail mr-1"></i>{{ $lead->email }}</a></div>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="badge badge-pill {{ $lead->status_badge_class }} p-50">
                                            {{ $lead->status }}
                                        </span>
                                        @if($lead->estimated_value > 0)
                                            <div class="text-success font-weight-bold small mt-25">₹{{ number_format($lead->estimated_value, 0) }}</div>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="badge badge-pill {{ $lead->priority_badge_class }} p-50">
                                            @if($lead->priority == 'Hot') 🔥 @elseif($lead->priority == 'Warm') ⚡ @else ❄️ @endif {{ $lead->priority }}
                                        </span>
                                    </td>
                                    <td>
                                        @if($lead->next_followup_date)
                                            <div class="font-weight-bold {{ $lead->isScheduledToday() ? 'text-danger' : ($lead->isOverdue() ? 'text-danger font-weight-bolder' : 'text-dark') }}">
                                                @if($lead->isScheduledToday())
                                                    📌 TODAY ({{ $lead->next_followup_date->format('h:i A') }})
                                                @elseif($lead->isOverdue())
                                                    ⚠️ OVERDUE ({{ $lead->next_followup_date->format('d M Y') }})
                                                @else
                                                    {{ $lead->next_followup_date->format('d M Y, h:i A') }}
                                                @endif
                                            </div>
                                        @else
                                            <span class="text-muted small">Not set</span>
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-primary waves-effect waves-light" data-toggle="modal" data-target="#updateStatusModal{{ $lead->id }}" title="Update Lead Status">
                                                <i class="feather icon-edit-2"></i> Update
                                            </button>
                                            <button class="btn btn-sm btn-outline-info waves-effect waves-light" data-toggle="modal" data-target="#historyModal{{ $lead->id }}" title="View Call History Log">
                                                <i class="feather icon-clock"></i>
                                            </button>
                                            <form action="{{ route('admin.lead.destroy', $lead->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this lead record?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger waves-effect waves-light" title="Delete Lead">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Quick Update Status Modal -->
                                <div class="modal fade" id="updateStatusModal{{ $lead->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary text-white">
                                                <h5 class="modal-title text-white font-weight-bold"><i class="feather icon-edit mr-1"></i> Update Lead: {{ $lead->name }}</h5>
                                                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('admin.lead.updateStatus', $lead->id) }}" method="POST">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label class="font-weight-bold">Lead Status Stage</label>
                                                        <select name="status" class="form-control" required>
                                                            <option value="New" {{ $lead->status == 'New' ? 'selected' : '' }}>🔵 New Lead</option>
                                                            <option value="Contacted" {{ $lead->status == 'Contacted' ? 'selected' : '' }}>ℹ️ Contacted / In Discussion</option>
                                                            <option value="Contact Tomorrow" {{ $lead->status == 'Contact Tomorrow' ? 'selected' : '' }}>🗓️ Contact Tomorrow / Next Date</option>
                                                            <option value="Demo Scheduled" {{ $lead->status == 'Demo Scheduled' ? 'selected' : '' }}>🟣 POS Demo Scheduled</option>
                                                            <option value="Demo Completed" {{ $lead->status == 'Demo Completed' ? 'selected' : '' }}>✅ Demo Completed</option>
                                                            <option value="Account Created" {{ $lead->status == 'Account Created' ? 'selected' : '' }}>💻 POS Account Created (Trial)</option>
                                                            <option value="Proposal Sent" {{ $lead->status == 'Proposal Sent' ? 'selected' : '' }}>🟧 Quotation / Proposal Sent</option>
                                                            <option value="Account Activated / Paid" {{ $lead->status == 'Account Activated / Paid' || $lead->status == 'Won' ? 'selected' : '' }}>🎉 Account Activated & Paid (Won)</option>
                                                            <option value="Lost" {{ $lead->status == 'Lost' ? 'selected' : '' }}>❌ Lost / Uninterested</option>
                                                            <option value="Junk" {{ $lead->status == 'Junk' ? 'selected' : '' }}>🚫 Junk / Invalid Number</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="font-weight-bold">Priority Level</label>
                                                        <select name="priority" class="form-control">
                                                            <option value="Hot" {{ $lead->priority == 'Hot' ? 'selected' : '' }}>🔥 Hot (Immediate Buy Intent)</option>
                                                            <option value="Warm" {{ $lead->priority == 'Warm' ? 'selected' : '' }}>⚡ Warm (Interested)</option>
                                                            <option value="Cold" {{ $lead->priority == 'Cold' ? 'selected' : '' }}>❄️ Cold (Exploring Options)</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="font-weight-bold">Estimated Deal Value (₹)</label>
                                                        <input type="number" name="estimated_value" class="form-control" placeholder="e.g. 3499" min="0" step="any" value="{{ $lead->estimated_value > 0 ? (float)$lead->estimated_value : '' }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="font-weight-bold">Next Follow-Up Date & Time</label>
                                                        <input type="datetime-local" name="next_followup_date" class="form-control" value="{{ $lead->next_followup_date ? $lead->next_followup_date->format('Y-m-d\TH:i') : '' }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="font-weight-bold">Call / Interaction Note</label>
                                                        <textarea name="note" class="form-control" rows="3" placeholder="Summary of phone conversation, WhatsApp message, customer queries..."></textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-primary font-weight-bold"><i class="feather icon-save mr-1"></i> Save Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Lead History Log Modal -->
                                <div class="modal fade" id="historyModal{{ $lead->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-dark text-white">
                                                <h5 class="modal-title text-white font-weight-bold"><i class="feather icon-clock mr-1"></i> Activity Timeline: {{ $lead->name }}</h5>
                                                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body p-2">
                                                <div class="d-flex justify-content-between border-bottom pb-1 mb-2">
                                                    <div><strong>Phone:</strong> {{ $lead->phone }}</div>
                                                    <div><strong>Campaign:</strong> {{ $lead->product_campaign }}</div>
                                                    <div><strong>Created:</strong> {{ $lead->created_at->format('d M Y') }}</div>
                                                </div>
                                                <h6 class="font-weight-bold mb-1">Activity Log:</h6>
                                                <div class="timeline" style="border-left: 2px solid #e2e8f0; padding-left: 15px; margin-left: 5px;">
                                                    @forelse($lead->activities as $act)
                                                        <div class="mb-2 position-relative">
                                                            <div style="font-size: 13px;" class="font-weight-bold text-primary">{{ $act->activity_type }} <span class="text-muted small">({{ $act->created_at->format('d M Y, h:i A') }})</span></div>
                                                            <div class="text-dark">{{ $act->note }}</div>
                                                        </div>
                                                    @empty
                                                        <div class="text-muted">No activity records logged yet.</div>
                                                    @endforelse
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @empty
                                <tr>
                                    <td colspan="7" class="text-center py-4 text-muted">
                                        <i class="feather icon-inbox font-large-2 d-block mb-1"></i>
                                        No leads found matching the selected filter criteria.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                    <div>Showing {{ $leads->firstItem() ?? 0 }} to {{ $leads->lastItem() ?? 0 }} of {{ $leads->total() }} leads</div>
                    <div>{{ $leads->links() }}</div>
                </div>
            </div>
        </div>

        <!-- TAB 2: VISUAL KANBAN PIPELINE BOARD -->
        <div class="tab-pane fade" id="kanban-view" role="tabpanel">
            <div class="card p-2 shadow-sm border-0 mb-2">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h4 class="font-weight-bold text-dark mb-0"><i class="feather icon-grid text-primary mr-1"></i> Sales Pipeline Stage Board</h4>
                    <small class="text-muted">Drag or click to update lead stage across your funnel</small>
                </div>
                <div class="kanban-board-container">
                    <!-- Column 1: New Leads -->
                    <div class="kanban-column">
                        <div class="kanban-column-header text-primary">
                            <span>🔵 New Inquiries</span>
                            <span class="badge badge-pill badge-primary">{{ count($kanbanStages['New']) }}</span>
                        </div>
                        @forelse($kanbanStages['New'] as $kLead)
                            <div class="kanban-card stage-new">
                                <div class="font-weight-bold text-dark">{{ $kLead->name }}</div>
                                <div class="small text-muted mb-1">{{ $kLead->company_name ?? $kLead->city ?? 'Individual' }}</div>
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <span class="badge badge-light-primary p-25 font-weight-bold" style="font-size: 10px;">{{ $kLead->product_campaign }}</span>
                                    @if($kLead->estimated_value > 0)
                                        <span class="font-weight-bold text-success small">₹{{ number_format($kLead->estimated_value, 0) }}</span>
                                    @endif
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ $kLead->whatsapp_url }}" target="_blank" class="btn btn-xs btn-whatsapp-green font-weight-bold">
                                        <i class="feather icon-message-circle mr-1"></i> Chat
                                    </a>
                                    <button class="btn btn-xs btn-outline-primary" data-toggle="modal" data-target="#updateStatusModal{{ $kLead->id }}">Move ➔</button>
                                </div>
                            </div>
                        @empty
                            <div class="text-center text-muted py-2 small">No new leads</div>
                        @endforelse
                    </div>

                    <!-- Column 2: Contacted -->
                    <div class="kanban-column">
                        <div class="kanban-column-header text-info">
                            <span>ℹ️ Contacted / Discussion</span>
                            <span class="badge badge-pill badge-info">{{ count($kanbanStages['Contacted']) }}</span>
                        </div>
                        @forelse($kanbanStages['Contacted'] as $kLead)
                            <div class="kanban-card stage-contacted">
                                <div class="font-weight-bold text-dark">{{ $kLead->name }}</div>
                                <div class="small text-muted mb-1">{{ $kLead->company_name ?? $kLead->city ?? 'Individual' }}</div>
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <span class="badge badge-light-info p-25 font-weight-bold" style="font-size: 10px;">{{ $kLead->product_campaign }}</span>
                                    @if($kLead->estimated_value > 0)
                                        <span class="font-weight-bold text-success small">₹{{ number_format($kLead->estimated_value, 0) }}</span>
                                    @endif
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ $kLead->whatsapp_url }}" target="_blank" class="btn btn-xs btn-whatsapp-green font-weight-bold">
                                        <i class="feather icon-message-circle mr-1"></i> Chat
                                    </a>
                                    <button class="btn btn-xs btn-outline-info" data-toggle="modal" data-target="#updateStatusModal{{ $kLead->id }}">Move ➔</button>
                                </div>
                            </div>
                        @empty
                            <div class="text-center text-muted py-2 small">No leads in discussion</div>
                        @endforelse
                    </div>

                    <!-- Column 3: Demo Scheduled -->
                    <div class="kanban-column">
                        <div class="kanban-column-header" style="color: #8b5cf6;">
                            <span>🟣 Demo / Presentation</span>
                            <span class="badge badge-pill" style="background: #8b5cf6; color: white;">{{ count($kanbanStages['Demo Scheduled']) }}</span>
                        </div>
                        @forelse($kanbanStages['Demo Scheduled'] as $kLead)
                            <div class="kanban-card stage-demo">
                                <div class="font-weight-bold text-dark">{{ $kLead->name }}</div>
                                <div class="small text-muted mb-1">{{ $kLead->company_name ?? $kLead->city ?? 'Individual' }}</div>
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <span class="badge p-25 font-weight-bold" style="background: #f3e8ff; color: #7e22ce; font-size: 10px;">{{ $kLead->product_campaign }}</span>
                                    @if($kLead->estimated_value > 0)
                                        <span class="font-weight-bold text-success small">₹{{ number_format($kLead->estimated_value, 0) }}</span>
                                    @endif
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ $kLead->whatsapp_url }}" target="_blank" class="btn btn-xs btn-whatsapp-green font-weight-bold">
                                        <i class="feather icon-message-circle mr-1"></i> Chat
                                    </a>
                                    <button class="btn btn-xs btn-outline-primary" data-toggle="modal" data-target="#updateStatusModal{{ $kLead->id }}">Move ➔</button>
                                </div>
                            </div>
                        @empty
                            <div class="text-center text-muted py-2 small">No demos scheduled</div>
                        @endforelse
                    </div>

                    <!-- Column 4: Proposal Sent -->
                    <div class="kanban-column">
                        <div class="kanban-column-header text-warning">
                            <span>🟧 Proposal Sent</span>
                            <span class="badge badge-pill badge-warning">{{ count($kanbanStages['Proposal Sent']) }}</span>
                        </div>
                        @forelse($kanbanStages['Proposal Sent'] as $kLead)
                            <div class="kanban-card stage-proposal">
                                <div class="font-weight-bold text-dark">{{ $kLead->name }}</div>
                                <div class="small text-muted mb-1">{{ $kLead->company_name ?? $kLead->city ?? 'Individual' }}</div>
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <span class="badge badge-light-warning p-25 font-weight-bold" style="font-size: 10px;">{{ $kLead->product_campaign }}</span>
                                    @if($kLead->estimated_value > 0)
                                        <span class="font-weight-bold text-success small">₹{{ number_format($kLead->estimated_value, 0) }}</span>
                                    @endif
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ $kLead->whatsapp_url }}" target="_blank" class="btn btn-xs btn-whatsapp-green font-weight-bold">
                                        <i class="feather icon-message-circle mr-1"></i> Chat
                                    </a>
                                    <button class="btn btn-xs btn-outline-warning" data-toggle="modal" data-target="#updateStatusModal{{ $kLead->id }}">Move ➔</button>
                                </div>
                            </div>
                        @empty
                            <div class="text-center text-muted py-2 small">No proposals pending</div>
                        @endforelse
                    </div>

                    <!-- Column 5: Won / Closed -->
                    <div class="kanban-column">
                        <div class="kanban-column-header text-success">
                            <span>🟢 Won / Converted</span>
                            <span class="badge badge-pill badge-success">{{ count($kanbanStages['Won']) }}</span>
                        </div>
                        @forelse($kanbanStages['Won'] as $kLead)
                            <div class="kanban-card stage-won">
                                <div class="font-weight-bold text-dark">{{ $kLead->name }}</div>
                                <div class="small text-muted mb-1">{{ $kLead->company_name ?? $kLead->city ?? 'Individual' }}</div>
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <span class="badge badge-light-success p-25 font-weight-bold" style="font-size: 10px;">{{ $kLead->product_campaign }}</span>
                                    @if($kLead->estimated_value > 0)
                                        <span class="font-weight-bold text-success small">₹{{ number_format($kLead->estimated_value, 0) }}</span>
                                    @endif
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ $kLead->whatsapp_url }}" target="_blank" class="btn btn-xs btn-whatsapp-green font-weight-bold">
                                        <i class="feather icon-message-circle mr-1"></i> Chat
                                    </a>
                                    <span class="badge badge-success">Closed Deal</span>
                                </div>
                            </div>
                        @empty
                            <div class="text-center text-muted py-2 small">No closed deals yet</div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal: Add New Lead -->
<div class="modal fade" id="addLeadModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content" style="border-radius: 14px;">
            <div class="modal-header bg-primary text-white" style="border-radius: 14px 14px 0 0;">
                <h5 class="modal-title text-white font-weight-bold"><i class="feather icon-user-plus mr-1"></i> Add New Inquiry / Ad Lead</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.lead.store') }}" method="POST">
                @csrf
                <div class="modal-body row">
                    <div class="form-group col-md-6">
                        <label class="font-weight-bold">Lead Full Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" placeholder="e.g. Rahul Sharma" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="font-weight-bold">WhatsApp / Phone Number <span class="text-danger">*</span></label>
                        <input type="text" name="phone" class="form-control" placeholder="e.g. 9876543210" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="font-weight-bold">Email Address</label>
                        <input type="email" name="email" class="form-control" placeholder="client@example.com">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="font-weight-bold">Company / Business Name</label>
                        <input type="text" name="company_name" class="form-control" placeholder="e.g. Sharma Departmental Store / School / Enterprise">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="font-weight-bold">City / Location</label>
                        <input type="text" name="city" class="form-control" placeholder="e.g. Jaipur, Delhi, Mumbai">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="font-weight-bold">Product / Campaign <span class="text-danger">*</span></label>
                        <select name="product_campaign" class="form-control" required>
                            <option value="ITrove POS">🛒 ITrove POS System</option>
                            <option value="ITrove School">🏫 ITrove School ERP</option>
                            <option value="ITrove Agency">💼 ITrove Agency / Custom Web App</option>
                            <option value="Other">Other Custom Software</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="font-weight-bold">Lead Source <span class="text-danger">*</span></label>
                        <select name="lead_source" class="form-control" required>
                            <option value="WhatsApp Ad">💬 WhatsApp Ad</option>
                            <option value="Facebook/Instagram Ad">📱 Facebook / Instagram Ad</option>
                            <option value="Google Ad">🔍 Google Ad</option>
                            <option value="Website Form">🌐 Website Contact Form</option>
                            <option value="Direct Call">📞 Direct Phone Call</option>
                            <option value="Referral">🤝 Referral</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="font-weight-bold">Initial Priority</label>
                        <select name="priority" class="form-control" required>
                            <option value="Hot">🔥 Hot (Immediate Intent)</option>
                            <option value="Warm" selected>⚡ Warm (Interested)</option>
                            <option value="Cold">❄️ Cold (General Query)</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="font-weight-bold">Initial Status Stage</label>
                        <select name="status" class="form-control" required>
                            <option value="New" selected>🔵 New Lead</option>
                            <option value="Contacted">ℹ️ Contacted / In Discussion</option>
                            <option value="Contact Tomorrow">🗓️ Contact Tomorrow / Next Date</option>
                            <option value="Demo Scheduled">🟣 POS Demo Scheduled</option>
                            <option value="Account Created">💻 POS Account Created (Trial)</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="font-weight-bold">Estimated Deal Value (₹)</label>
                        <input type="number" name="estimated_value" class="form-control" placeholder="e.g. 3499" min="0" step="any">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="font-weight-bold">Schedule Next Contact / Follow-up Date</label>
                        <input type="datetime-local" name="next_followup_date" class="form-control" value="{{ \Carbon\Carbon::now()->format('Y-m-d\TH:i') }}">
                    </div>
                    <div class="form-group col-md-12">
                        <label class="font-weight-bold">Lead Details / Initial Requirement Note</label>
                        <textarea name="notes" class="form-control" rows="3" placeholder="Requirement details from WhatsApp chat or phone call..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary font-weight-bold"><i class="feather icon-check-circle mr-1"></i> Save Lead</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
