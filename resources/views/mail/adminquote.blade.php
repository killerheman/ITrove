<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Project Quote Request</title>
</head>
<body style="margin: 0; padding: 24px; background-color: #f4f6f9; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color: #2d3748;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td align="center">
                <table border="0" cellpadding="0" cellspacing="0" width="600" style="max-width: 600px; background-color: #ffffff; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;">
                    <tr>
                        <td style="background-color: #000279; padding: 24px; text-align: left; color: #ffffff;">
                            <h2 style="margin: 0; font-size: 20px; font-weight: 700; color: #ffffff;">
                                &#128640; New Project Quote Request Received
                            </h2>
                            <div style="font-size: 13px; color: #fb9506; margin-top: 4px;">
                                Innovation Trove Admin Notification
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 28px;">
                            <p style="margin: 0 0 20px 0; font-size: 15px; color: #4a5568;">
                                A new quote lead has been submitted via the <strong>/get-quote</strong> page. Here are the client's submitted requirements:
                            </p>

                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="font-size: 14px; line-height: 1.6; border: 1px solid #e2e8f0; border-radius: 8px; overflow: hidden; margin-bottom: 24px;">
                                <tr style="background-color: #f8fafc; border-bottom: 1px solid #e2e8f0;">
                                    <td width="30%" style="padding: 10px 14px; font-weight: 600; color: #718096; border-bottom: 1px solid #e2e8f0;">Client Name:</td>
                                    <td width="70%" style="padding: 10px 14px; font-weight: 700; color: #1a202c; border-bottom: 1px solid #e2e8f0;">
                                        {{ is_object($data) ? ($data->name ?? 'N/A') : ($data['name'] ?? 'N/A') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px 14px; font-weight: 600; color: #718096; border-bottom: 1px solid #e2e8f0;">Email:</td>
                                    <td style="padding: 10px 14px; color: #000279; font-weight: 600; border-bottom: 1px solid #e2e8f0;">
                                        <a href="mailto:{{ is_object($data) ? ($data->email ?? '') : ($data['email'] ?? '') }}" style="color: #000279; text-decoration: underline;">
                                            {{ is_object($data) ? ($data->email ?? 'N/A') : ($data['email'] ?? 'N/A') }}
                                        </a>
                                    </td>
                                </tr>
                                <tr style="background-color: #f8fafc;">
                                    <td style="padding: 10px 14px; font-weight: 600; color: #718096; border-bottom: 1px solid #e2e8f0;">Phone / WhatsApp:</td>
                                    <td style="padding: 10px 14px; color: #1a202c; font-weight: 600; border-bottom: 1px solid #e2e8f0;">
                                        @php
                                            $phone = is_object($data) ? ($data->phone ?? 'N/A') : ($data['phone'] ?? 'N/A');
                                            $cleanPhone = preg_replace('/[^0-9]/', '', $phone);
                                        @endphp
                                        <a href="tel:{{ $phone }}" style="color: #1a202c; text-decoration: none;">{{ $phone }}</a>
                                        @if(!empty($cleanPhone))
                                            &nbsp;&bull;&nbsp;
                                            <a href="https://wa.me/{{ $cleanPhone }}" target="_blank" style="color: #25d366; font-size: 12px; text-decoration: none; font-weight: 700;">
                                                [Open in WhatsApp]
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px 14px; font-weight: 600; color: #718096; border-bottom: 1px solid #e2e8f0;">Service Requested:</td>
                                    <td style="padding: 10px 14px; color: #000279; font-weight: 700; border-bottom: 1px solid #e2e8f0;">
                                        {{ is_object($data) ? ($data->service ?? 'N/A') : ($data['service'] ?? 'N/A') }}
                                    </td>
                                </tr>
                                <tr style="background-color: #f8fafc;">
                                    <td style="padding: 10px 14px; font-weight: 600; color: #718096; vertical-align: top;">Project Scope / Description:</td>
                                    <td style="padding: 10px 14px; color: #2d3748; line-height: 1.5; vertical-align: top;">
                                        {{ is_object($data) ? ($data->description ?? ($data->message ?? 'N/A')) : ($data['description'] ?? ($data['message'] ?? 'N/A')) }}
                                    </td>
                                </tr>
                            </table>

                            <div style="text-align: center; margin-top: 24px;">
                                @php
                                    $clientEmail = is_object($data) ? ($data->email ?? '') : ($data['email'] ?? '');
                                    $clientName = is_object($data) ? ($data->name ?? '') : ($data['name'] ?? '');
                                @endphp
                                <a href="mailto:{{ $clientEmail }}?subject=Regarding%20Your%20Project%20Quote%20Request%20-%20Innovation%20Trove" style="display: inline-block; background-color: #000279; color: #ffffff; text-decoration: none; font-size: 14px; font-weight: 700; padding: 12px 28px; border-radius: 6px;">
                                    &#9993; Direct Reply to {{ $clientName }}
                                </a>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
