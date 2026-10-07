<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>☀️ 7:00 AM Morning Lead Briefing | Innovation Trove POS & ERP</title>
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background-color: #f1f5f9; margin: 0; padding: 20px; color: #1e293b; }
        .card { background: #ffffff; max-width: 680px; margin: 0 auto; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); }
        .header { background: linear-gradient(135deg, #000279 0%, #4c1d95 60%, #1e1b4b 100%); color: #ffffff; padding: 30px; text-align: center; }
        .header h2 { margin: 0; font-size: 24px; font-weight: 800; letter-spacing: -0.5px; }
        .header p { margin: 6px 0 0 0; opacity: 0.9; font-size: 14px; font-weight: 600; }
        .content { padding: 30px; }
        .section-title { font-size: 15px; font-weight: 800; color: #000279; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 15px; border-bottom: 2px solid #e2e8f0; padding-bottom: 8px; }
        .lead-item { background: #f8fafc; border-left: 5px solid #4f46e5; padding: 16px; border-radius: 8px; margin-bottom: 14px; }
        .lead-item.overdue { border-left-color: #ef4444; background: #fef2f2; }
        .lead-item.pos { border-left-color: #8b5cf6; background: #f5f3ff; }
        .lead-name { font-weight: 800; font-size: 16px; color: #0f172a; margin-bottom: 4px; }
        .lead-meta { font-size: 13px; color: #475569; margin-bottom: 8px; }
        .badge { display: inline-block; padding: 4px 10px; border-radius: 20px; font-size: 11px; font-weight: 700; text-transform: uppercase; }
        .badge-pos { background: #e0e7ff; color: #3730a3; }
        .badge-status { background: #dcfce7; color: #15803d; }
        .badge-hot { background: #fee2e2; color: #b91c1c; }
        .btn-wa { display: inline-block; background: #25d366; color: #ffffff !important; text-decoration: none; padding: 8px 18px; border-radius: 20px; font-size: 12px; font-weight: 800; margin-top: 8px; box-shadow: 0 4px 10px rgba(37,211,102,0.3); }
        .footer { background: #f1f5f9; padding: 18px; text-align: center; font-size: 12px; color: #64748b; font-weight: 600; }
    </style>
</head>
<body>
    <div class="card">
        <div class="header">
            <h2>☀️ 7:00 AM Daily Morning Lead Briefing</h2>
            <p>Your POS Demos & Account Follow-Ups For Today</p>
        </div>
        <div class="content">
            <p style="font-size: 15px; font-weight: 600;">Good Morning Admin 👋,</p>
            <p style="color: #475569; margin-bottom: 25px;">Here is your automated 7:00 AM action summary of customers, POS trial account creations, and scheduled demos for today:</p>

            @if(count($overdueLeads) > 0)
                <div class="section-title" style="color: #dc2626;">⚠️ OVERDUE ACTION REQUIRED ({{ count($overdueLeads) }})</div>
                @foreach($overdueLeads as $lead)
                    <div class="lead-item overdue">
                        <div class="lead-name">
                            {{ $lead->name }} 
                            @if($lead->company_name) - <span style="color: #475569;">{{ $lead->company_name }}</span> @endif
                        </div>
                        <div class="lead-meta">
                            📞 <strong>Phone:</strong> {{ $lead->phone }} | 📍 <strong>City:</strong> {{ $lead->city ?? 'N/A' }}
                        </div>
                        <div style="margin-bottom: 8px;">
                            <span class="badge badge-pos">🛒 {{ $lead->product_campaign }}</span>
                            <span class="badge badge-status">Stage: {{ $lead->status }}</span>
                            <span class="badge badge-hot">🔥 {{ $lead->priority }} Priority</span>
                        </div>
                        @if($lead->notes)
                            <div style="font-size: 12px; color: #334155; font-style: italic; background: #ffffff; padding: 8px; border-radius: 6px; margin-top: 6px;">
                                📝 Note: "{{ $lead->notes }}"
                            </div>
                        @endif
                        <a href="https://wa.me/{{ $lead->clean_phone }}" class="btn-wa" target="_blank">💬 Open WhatsApp Chat</a>
                    </div>
                @endforeach
            @endif

            @if(count($leads) > 0)
                <div class="section-title">📌 SCHEDULED FOR TODAY ({{ count($leads) }})</div>
                @foreach($leads as $lead)
                    <div class="lead-item {{ $lead->product_campaign == 'ITrove POS' ? 'pos' : '' }}">
                        <div class="lead-name">
                            {{ $lead->name }} 
                            @if($lead->company_name) - <span style="color: #475569;">{{ $lead->company_name }}</span> @endif
                        </div>
                        <div class="lead-meta">
                            📞 <strong>Phone:</strong> {{ $lead->phone }} | 📍 <strong>City:</strong> {{ $lead->city ?? 'N/A' }}
                        </div>
                        <div style="margin-bottom: 8px;">
                            <span class="badge badge-pos">🛒 {{ $lead->product_campaign }}</span>
                            <span class="badge badge-status">Stage: {{ $lead->status }}</span>
                            <span class="badge badge-hot">🔥 {{ $lead->priority }}</span>
                            @if($lead->estimated_value > 0)
                                <span class="badge" style="background: #dcfce7; color: #166534;">₹{{ number_format($lead->estimated_value, 0) }}</span>
                            @endif
                        </div>
                        @if($lead->notes)
                            <div style="font-size: 12px; color: #334155; font-style: italic; background: #ffffff; padding: 8px; border-radius: 6px; margin-top: 6px;">
                                📝 Note: "{{ $lead->notes }}"
                            </div>
                        @endif
                        <a href="https://wa.me/{{ $lead->clean_phone }}" class="btn-wa" target="_blank">💬 Open WhatsApp Chat</a>
                    </div>
                @endforeach
            @else
                @if(count($overdueLeads) == 0)
                    <div style="background: #ecfdf5; border: 1px solid #a7f3d0; border-radius: 8px; padding: 20px; text-align: center; color: #065f46; font-weight: 700;">
                        🎉 All caught up! No pending lead follow-ups or POS demos scheduled for today.
                    </div>
                @endif
            @endif

            <div style="margin-top: 30px; text-align: center;">
                <a href="{{ route('admin.lead.index') }}" style="background: linear-gradient(135deg, #000279 0%, #4c1d95 100%); color: #ffffff !important; text-decoration: none; padding: 14px 30px; border-radius: 10px; font-weight: 800; display: inline-block; box-shadow: 0 4px 15px rgba(0, 2, 121, 0.3);">
                    Open Lead Command Center ➔
                </a>
            </div>
        </div>
        <div class="footer">
            Innovation Trove POS & ERP Automated Lead System &copy; {{ date('Y') }}
        </div>
    </div>
</body>
</html>
