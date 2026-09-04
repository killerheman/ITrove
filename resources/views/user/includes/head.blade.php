<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
<meta name="author" content="Innovation Trove">
<meta name="publisher" content="Innovation Trove">

@php
    $defaultTitle = 'Innovation Trove | Custom Software & Web Application Development Company';
    $defaultDesc = 'Innovation Trove is a premier custom software and web application development company. We deliver scalable bespoke software, mobile apps, SaaS platforms, and dedicated developer teams for clients across the USA, UK, Europe, and India.';
    $defaultKeywords = 'custom software development company, bespoke software solutions, web application development, SaaS development, mobile app development, hire dedicated developers, offshore IT partner India, Laravel React agency';
    $metaTitle = View::hasSection('meta_title') ? View::getSection('meta_title') : $defaultTitle;
    $metaDesc = View::hasSection('meta_description') ? View::getSection('meta_description') : $defaultDesc;
    $metaKeywords = View::hasSection('meta_keywords') ? View::getSection('meta_keywords') : $defaultKeywords;
    $canonicalUrl = url()->current();
    $ogImage = View::hasSection('meta_image') ? View::getSection('meta_image') : asset('frontend/assets/images/logo/logo.png');
@endphp

<title>{{ $metaTitle }}</title>
<meta name="description" content="{{ $metaDesc }}" />
<meta name="keywords" content="{{ $metaKeywords }}">
<link rel="canonical" href="{{ $canonicalUrl }}">

<!-- Open Graph / Facebook / LinkedIn -->
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Innovation Trove" />
<meta property="og:url" content="{{ $canonicalUrl }}" />
<meta property="og:title" content="{{ $metaTitle }}" />
<meta property="og:description" content="{{ $metaDesc }}" />
<meta property="og:image" content="{{ $ogImage }}" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:image:alt" content="Innovation Trove - Leading Software & Web Solutions Company" />
<meta property="og:locale" content="en_US" />

<!-- Twitter / X -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@innovationtrove" />
<meta name="twitter:creator" content="@InnovationTrove" />
<meta name="twitter:url" content="{{ $canonicalUrl }}" />
<meta name="twitter:title" content="{{ $metaTitle }}" />
<meta name="twitter:description" content="{{ $metaDesc }}" />
<meta name="twitter:image" content="{{ $ogImage }}" />
<meta name="twitter:image:alt" content="Innovation Trove - Global Software Engineering Partner" />

<!-- Geo & Target Market Metas -->
<meta name="geo.region" content="IN-WB" />
<meta name="geo.placename" content="Jaigaon, Jalpaiguri, West Bengal" />
<meta name="geo.position" content="26.8600;89.3700" />
<meta name="ICBM" content="26.8600, 89.3700" />

<!-- Fav Icon -->
<link rel="icon" href="{{ asset('frontend/assets/images/logo/logo.png') }}" type="image/x-icon">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{ asset('frontend/assets/css/font-awesome-all.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/flaticon.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/owl.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/animate.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/color.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/responsive.css') }}" rel="stylesheet">

<!-- Structured Data (Schema.org JSON-LD) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://innovationtrove.in/#organization",
      "name": "Innovation Trove",
      "url": "https://innovationtrove.in/",
      "logo": "{{ asset('frontend/assets/images/logo/logo.png') }}",
      "email": ["info@innovationtrove.in", "innovationtrove@gmail.com"],
      "telephone": ["+91-9648061515", "+91-9648471515", "+975-17126364"],
      "description": "Global custom software development, web applications, SaaS platforms, and dedicated engineering team services.",
      "sameAs": [
        "https://www.facebook.com/profile.php?id=100089113158762",
        "https://www.instagram.com/innovationtrove/",
        "https://www.linkedin.com/company/innovation-trove-llp",
        "https://x.com/InnovationTrove"
      ],
      "address": [
        {
          "@type": "PostalAddress",
          "streetAddress": "Daragaon, Near Petrol Pump, Jaigaon",
          "addressLocality": "Jalpaiguri",
          "addressRegion": "West Bengal",
          "postalCode": "736182",
          "addressCountry": "IN"
        },
        {
          "@type": "PostalAddress",
          "streetAddress": "212 B Sahdeo Mahto Marg, Boring Rd, Sri Krishna Puri",
          "addressLocality": "Patna",
          "addressRegion": "Bihar",
          "postalCode": "800001",
          "addressCountry": "IN"
        }
      ]
    },
    {
      "@type": "WebSite",
      "@id": "https://innovationtrove.in/#website",
      "url": "https://innovationtrove.in/",
      "name": "Innovation Trove",
      "publisher": {
        "@id": "https://innovationtrove.in/#organization"
      },
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://innovationtrove.in/services?q={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    },
    {
      "@type": "ProfessionalService",
      "@id": "https://innovationtrove.in/#service",
      "name": "Innovation Trove - Software & Web Development Agency",
      "url": "https://innovationtrove.in/",
      "telephone": ["+91-9648061515", "+91-9648471515", "+975-17126364"],
      "priceRange": "$$",
      "image": "{{ asset('frontend/assets/images/logo/logo.png') }}",
      "areaServed": [
        {"@type": "Country", "name": "India"},
        {"@type": "Country", "name": "Bhutan"},
        {"@type": "Country", "name": "United States"},
        {"@type": "Country", "name": "United Kingdom"},
        {"@type": "Country", "name": "Germany"},
        {"@type": "Country", "name": "Canada"},
        {"@type": "Country", "name": "Australia"},
        {"@type": "Country", "name": "United Arab Emirates"}
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Software Development Services",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Custom Software Development"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Web Application & SaaS Development"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Mobile App Development (iOS & Android)"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Enterprise ERP & CRM Solutions"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "AI Integration & Business Automation"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Cloud Infrastructure & DevOps"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Dedicated Remote Developers & Staff Augmentation"
            }
          }
        ]
      }
    }
  ]
}
</script>

<style>
    /* Ensure Header & Sticky Header ALWAYS stay on top of all scrolling content */
    .main-header,
    .sticky-header,
    .fixed-header .sticky-header {
        z-index: 99999 !important;
    }

    /* Page Title with generous top padding for absolute header */
    .page-title {
        position: relative;
        padding: 210px 0 100px !important;
        z-index: 1;
    }
    .page-title .content-box h1 {
        font-size: 38px !important;
        margin-bottom: 15px !important;
    }
    .page-title .bread-crumb {
        margin-top: 10px !important;
    }

    /* Sticky Sidebars - always below the header */
    .service-sidebar,
    .project-info-card,
    .sidebar-side .sticky-top {
        position: -webkit-sticky !important;
        position: sticky !important;
        top: 110px !important;
        z-index: 10 !important;
    }

    /* Modern, Flawless Service Sidebar Navigation */
    .service-sidebar .category-widget {
        margin-bottom: 30px !important;
    }
    .service-sidebar .category-widget .category-list li {
        margin-bottom: 10px !important;
    }
    .service-sidebar .category-widget .category-list li a {
        position: relative !important;
        display: block !important;
        background: #ffffff !important;
        padding: 16px 60px 16px 20px !important;
        border-radius: 10px !important;
        font-size: 15px !important;
        font-weight: 700 !important;
        line-height: 22px !important;
        color: #1c2d52 !important;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05) !important;
        border: 1px solid #edf2f7 !important;
        transition: all 0.3s ease !important;
        overflow: hidden;
    }
    .service-sidebar .category-widget .category-list li a:before {
        display: none !important;
    }
    .service-sidebar .category-widget .category-list li a i {
        position: absolute !important;
        top: 50% !important;
        right: 15px !important;
        transform: translateY(-50%) !important;
        width: 32px !important;
        height: 32px !important;
        line-height: 32px !important;
        text-align: center !important;
        border-radius: 50% !important;
        background: #f0f4ff !important;
        color: #000279 !important;
        font-size: 12px !important;
        transition: all 0.3s ease !important;
        box-shadow: none !important;
    }
    .service-sidebar .category-widget .category-list li a:hover,
    .service-sidebar .category-widget .category-list li a.current {
        background: #000279 !important;
        color: #ffffff !important;
        border-color: #000279 !important;
        box-shadow: 0 6px 20px rgba(0, 2, 121, 0.22) !important;
    }
    .service-sidebar .category-widget .category-list li a:hover i,
    .service-sidebar .category-widget .category-list li a.current i {
        background: #fb9506 !important;
        color: #ffffff !important;
    }

    /* Content Checklist Icons in Service Details */
    .service-details-content .list-style-one li {
        padding-left: 28px !important;
        position: relative !important;
        margin-bottom: 12px !important;
        line-height: 26px !important;
    }
    .service-details-content .list-style-one li:before {
        content: '\f00c' !important;
        font-family: 'Font Awesome 5 Free' !important;
        font-weight: 900 !important;
        width: auto !important;
        height: auto !important;
        border: none !important;
        background: transparent !important;
        color: #000279 !important;
        font-size: 14px !important;
        top: 0px !important;
        left: 0px !important;
    }
    .service-details-content .list-style-one li:after {
        display: none !important;
    }

    /* Global Trust & SEO Enhancements */
    .tech-pill {
        display: inline-block;
        background: #f0f4ff;
        color: #000279;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        margin: 3px 4px 3px 0;
        border: 1px solid #d8e2fd;
    }

    /* Mobile View Enhancements */
    @media only screen and (max-width: 767px) {
        .page-title {
            padding: 140px 0 60px !important;
        }
        .header-style-six .header-lower .logo-box {
            padding: 16px 0 !important;
            width: auto !important;
            max-width: 220px !important;
        }
        .header-style-six .header-lower .logo-box .logo img {
            max-height: 50px !important;
            width: auto !important;
            display: block !important;
        }
        .header-style-six .menu-area .mobile-nav-toggler {
            margin-top: 5px !important;
        }
    }

    /* Fix Form Submit Button Icon & Layout */
    .contact-style-two .default-form .form-group.message-btn i,
    .contact-style-two .default-form .message-btn .theme-btn i,
    .message-btn .theme-btn i {
        position: static !important;
        display: inline-block !important;
        margin-right: 8px !important;
        color: inherit !important;
    }

    /* Service Block One - Flawless Vector Card Styling */
    .service-block-one .inner-box .icon-box i {
        font-size: 42px !important;
        line-height: 90px !important;
        color: #ff009c !important;
    }
    .service-block-one .inner-box:hover .icon-box i {
        color: #ff009c !important;
    }
    .service-block-one .inner-box:hover h3 a {
        color: #ff009c !important;
    }
    .service-block-one .inner-box:hover p {
        color: #ffffff !important;
    }

    /* Contact Info Card Enhancements */
    .contact-info-item:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 24px rgba(0, 2, 121, 0.1) !important;
        border-color: #cbd5e0 !important;
    }

    /* SweetAlert & Toast Notifications - Always in Front with Navbar Clearance */
    .swal2-container {
        z-index: 99999999 !important;
    }
    .swal2-container.swal2-top-end,
    .swal2-container.swal2-top-right,
    .swal2-top-end,
    .swal2-top-right {
        top: 95px !important;
        right: 25px !important;
        z-index: 99999999 !important;
    }
    .swal2-toast {
        box-shadow: 0 10px 35px rgba(0, 2, 121, 0.22) !important;
        border-radius: 12px !important;
        border: 1px solid #d8e2fd !important;
        padding: 12px 18px !important;
    }
</style>
