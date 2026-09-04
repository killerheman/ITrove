<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Innovation Trove Newsletter</title>
    <style>
        body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { -ms-interpolation-mode: bicubic; border: 0; outline: none; text-decoration: none; }
        body { margin: 0; padding: 0; width: 100% !important; background-color: #f4f6f9; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; }
        @media only screen and (max-width: 620px) {
            .container { width: 100% !important; max-width: 100% !important; }
            .content-padding { padding: 20px 16px !important; }
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
                            
                            <h1 style="margin: 0 0 12px 0; font-size: 22px; font-weight: 700; color: #070b28; line-height: 1.3;">
                                Welcome to the Innovation Trove Network!
                            </h1>
                            <p style="margin: 0 0 20px 0; font-size: 15px; line-height: 1.6; color: #4a5568;">
                                Hello,
                            </p>
                            <p style="margin: 0 0 20px 0; font-size: 15px; line-height: 1.6; color: #4a5568;">
                                Thank you for subscribing with <strong>{{ is_object($data) ? ($data->email ?? '') : ($data['email'] ?? '') }}</strong>. You are now tuned in to quarterly technical deep-dives, software engineering case studies, cloud architecture updates, and emerging AI solutions from our engineering team.
                            </p>

                            <div style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; margin-bottom: 28px;">
                                <div style="font-size: 14px; font-weight: 700; color: #000279; margin-bottom: 10px;">
                                    What you can expect from us:
                                </div>
                                <ul style="margin: 0; padding-left: 20px; font-size: 14px; line-height: 1.7; color: #4a5568;">
                                    <li>Actionable architectural blueprints for high-scale web & mobile apps</li>
                                    <li>Insights into enterprise ERP modernization & microservices</li>
                                    <li>Curated updates on hiring dedicated remote engineering teams</li>
                                    <li>Zero spam — only high-value engineering & tech strategy updates</li>
                                </ul>
                            </div>

                            <div style="text-align: center; margin-bottom: 10px;">
                                <a href="{{ route('works') }}" target="_blank" style="display: inline-block; background-color: #000279; color: #ffffff; text-decoration: none; font-size: 14px; font-weight: 700; padding: 12px 28px; border-radius: 6px; margin: 4px;">
                                    Explore Our Portfolio & Case Studies &rarr;
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
                                Global IT Engineering & Agile Software Partner &bull; USA &bull; UK &bull; Europe &bull; India
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
