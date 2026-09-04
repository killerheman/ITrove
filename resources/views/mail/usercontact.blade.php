<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Contacting Innovation Trove</title>
    <style>
        body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { -ms-interpolation-mode: bicubic; border: 0; outline: none; text-decoration: none; }
        body { margin: 0; padding: 0; width: 100% !important; background-color: #f4f6f9; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; }
        @media only screen and (max-width: 620px) {
            .container { width: 100% !important; max-width: 100% !important; }
            .content-padding { padding: 20px 16px !important; }
            .col-split { display: block !important; width: 100% !important; margin-bottom: 12px !important; }
            .btn-stack { display: block !important; width: 100% !important; text-align: center !important; margin-bottom: 8px !important; }
        }
    </style>
</head>
<body style="margin: 0; padding: 30px 0; background-color: #f4f6f9; color: #2d3748;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td align="center">
                <!-- Main Container -->
                <table class="container" border="0" cellpadding="0" cellspacing="0" width="600" style="max-width: 600px; background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.06); border: 1px solid #e2e8f0;">
                    
                    <!-- Header Banner -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #070b28 0%, #000279 60%, #1a1f5c 100%); padding: 32px 30px; text-align: center;">
                            <a href="{{ url('/') }}" target="_blank" style="text-decoration: none; display: inline-block;">
                                <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="Innovation Trove" style="max-height: 48px; width: auto; display: block; margin: 0 auto;" />
                            </a>
                            <div style="margin-top: 14px; font-size: 13px; font-weight: 500; letter-spacing: 1.5px; text-transform: uppercase; color: #fb9506;">
                                Engineering Scalable Digital Innovations
                            </div>
                        </td>
                    </tr>

                    <!-- Accent Bar -->
                    <tr>
                        <td style="height: 4px; background: linear-gradient(90deg, #fb9506 0%, #ff5e3a 100%);"></td>
                    </tr>

                    <!-- Body Content -->
                    <tr>
                        <td class="content-padding" style="padding: 36px 32px;">
                            
                            <!-- Greeting & Confirmation -->
                            <h1 style="margin: 0 0 12px 0; font-size: 22px; font-weight: 700; color: #070b28; line-height: 1.3;">
                                Thank You for Reaching Out to Us!
                            </h1>
                            <p style="margin: 0 0 20px 0; font-size: 15px; line-height: 1.6; color: #4a5568;">
                                Dear <strong>{{ is_object($data) ? ($data->name ?? 'Valued Client') : ($data['name'] ?? 'Valued Client') }}</strong>,
                            </p>
                            <p style="margin: 0 0 24px 0; font-size: 15px; line-height: 1.6; color: #4a5568;">
                                We have received your inquiry. A member of our client relations and technical consulting team will review your message and get back to you within <strong>12 to 24 business hours</strong>.
                            </p>

                            <!-- Submission Summary Card -->
                            <div style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; margin-bottom: 28px;">
                                <div style="font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; color: #000279; margin-bottom: 14px; border-bottom: 1px solid #e2e8f0; padding-bottom: 8px;">
                                    <span style="color: #fb9506; margin-right: 6px;">&#9679;</span> Summary of Your Message
                                </div>
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="font-size: 14px; line-height: 1.6;">
                                    @php
                                        $subj = is_object($data) ? ($data->subject ?? null) : ($data['subject'] ?? null);
                                    @endphp
                                    @if(!empty($subj))
                                    <tr>
                                        <td width="35%" style="padding: 6px 0; color: #718096; font-weight: 600; vertical-align: top;">Subject:</td>
                                        <td width="65%" style="padding: 6px 0; color: #1a202c; font-weight: 700; vertical-align: top;">{{ $subj }}</td>
                                    </tr>
                                    @endif
                                    <tr>
                                        <td style="padding: 6px 0; color: #718096; font-weight: 600; vertical-align: top;">Business Email:</td>
                                        <td style="padding: 6px 0; color: #1a202c; vertical-align: top;">{{ is_object($data) ? ($data->email ?? 'N/A') : ($data['email'] ?? 'N/A') }}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 6px 0; color: #718096; font-weight: 600; vertical-align: top;">Phone / WhatsApp:</td>
                                        <td style="padding: 6px 0; color: #1a202c; vertical-align: top;">{{ is_object($data) ? ($data->phone ?? 'N/A') : ($data['phone'] ?? 'N/A') }}</td>
                                    </tr>
                                    @php
                                        $msg = is_object($data) ? ($data->message ?? ($data->description ?? '')) : ($data['message'] ?? ($data['description'] ?? ''));
                                    @endphp
                                    @if(!empty($msg))
                                    <tr>
                                        <td style="padding: 8px 0 4px 0; color: #718096; font-weight: 600; vertical-align: top;">Your Message:</td>
                                        <td style="padding: 8px 0 4px 0; color: #2d3748; font-style: italic; vertical-align: top; background: #ffffff; padding: 8px; border-radius: 6px; border: 1px dashed #cbd5e0; margin-top: 4px; display: block;">
                                            "{{ $msg }}"
                                        </td>
                                    </tr>
                                    @endif
                                </table>
                            </div>

                            <!-- Need Immediate Response / Direct Contact Callout -->
                            <div style="background: linear-gradient(135deg, #070b28 0%, #1a1f5c 100%); border-radius: 8px; padding: 22px; color: #ffffff; margin-bottom: 28px; text-align: center;">
                                <h4 style="margin: 0 0 8px 0; font-size: 16px; color: #ffffff; font-weight: 700;">
                                    Need an Urgent Response?
                                </h4>
                                <p style="margin: 0 0 16px 0; font-size: 13px; color: #cbd5e0; line-height: 1.5;">
                                    Feel free to reach out directly to our team via WhatsApp or Phone:
                                </p>
                                <table border="0" cellpadding="0" cellspacing="0" align="center" style="margin: 0 auto;">
                                    <tr>
                                        <td style="padding: 0 8px;">
                                            <a href="https://wa.me/919648061515?text=Hi%20Innovation%20Trove%2C%20I%20just%20submitted%20a%20contact%20request." target="_blank" style="display: inline-block; background-color: #25d366; color: #ffffff; text-decoration: none; font-size: 13px; font-weight: 700; padding: 10px 18px; border-radius: 6px;">
                                                &#128172; Chat on WhatsApp (+91 9648061515)
                                            </a>
                                        </td>
                                        <td style="padding: 0 8px;">
                                            <a href="tel:+919648061515" style="display: inline-block; background-color: #fb9506; color: #ffffff; text-decoration: none; font-size: 13px; font-weight: 700; padding: 10px 18px; border-radius: 6px;">
                                                &#9742; Call +91 9648061515
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <!-- Quick Action Buttons -->
                            <div style="text-align: center; margin-bottom: 10px;">
                                <a href="{{ route('works') }}" target="_blank" style="display: inline-block; background-color: #edf2f7; color: #000279; text-decoration: none; font-size: 13px; font-weight: 700; padding: 10px 22px; border-radius: 6px; margin: 4px; border: 1px solid #cbd5e0;">
                                    Explore Our Works & Portfolio &rarr;
                                </a>
                                <a href="{{ route('get-quote') }}" target="_blank" style="display: inline-block; background-color: #edf2f7; color: #000279; text-decoration: none; font-size: 13px; font-weight: 700; padding: 10px 22px; border-radius: 6px; margin: 4px; border: 1px solid #cbd5e0;">
                                    Request a Project Estimate &rarr;
                                </a>
                            </div>

                        </td>
                    </tr>

                    <!-- Sign-off & Corporate Footer -->
                    <tr>
                        <td style="background-color: #0b0f30; padding: 28px 30px; text-align: center; color: #a0aec0; font-size: 12px; line-height: 1.6; border-top: 1px solid #1a202c;">
                            <div style="font-weight: 700; color: #ffffff; font-size: 14px; margin-bottom: 6px;">
                                Innovation Trove Solutions
                            </div>
                            <div style="color: #cbd5e0; margin-bottom: 12px;">
                                Global IT Engineering & Agile Software Partner &bull; USA &bull; UK &bull; Europe &bull; India &bull; Bhutan
                            </div>
                            <div style="margin-bottom: 12px; color: #718096;">
                                <strong>Head Office:</strong> Daragaon, Near Petrol Pump, Jaigaon, Jalpaiguri, West Bengal (736182)<br/>
                                <strong>Phone & WhatsApp:</strong> +91 9648061515, +91 9648471515 (India) | +975 17126364 (Bhutan)<br/>
                                <strong>Direct Emails:</strong> <a href="mailto:info@innovationtrove.in" style="color: #fb9506; text-decoration: none;">info@innovationtrove.in</a> &bull; <a href="mailto:innovationtrove@gmail.com" style="color: #fb9506; text-decoration: none;">innovationtrove@gmail.com</a> | <strong>Website:</strong> <a href="{{ url('/') }}" target="_blank" style="color: #fb9506; text-decoration: none;">www.innovationtrove.in</a>
                            </div>
                            <div style="font-size: 11px; color: #718096; border-top: 1px solid #1f2937; padding-top: 12px; margin-top: 12px;">
                                &copy; {{ date('Y') }} Innovation Trove. All rights reserved.
                            </div>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>
