@extends('user.includes.master')

@section('meta_title', 'Enterprise Software & SaaS Portfolio | Proven Case Studies - Innovation Trove')
@section('meta_description', 'Explore Innovation Trove’s client case studies across healthcare telehealth, logistics ERP, multi-currency fintech, cloud kitchen platforms, and headless e-commerce systems.')
@section('meta_keywords', 'software development portfolio, web application case studies, custom ERP examples, Laravel portfolio, React case studies, telehealth platform development')

@section('title', 'Portfolio & Case Studies')

@section('head')
<style>
.portfolio-filter-tabs {
    margin: 25px 0 45px;
}

.filter-tabs-list {
    background: #f0f4ff;
    padding: 6px 8px;
    border-radius: 50px;
    display: inline-flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 8px;
    box-shadow: inset 0 2px 6px rgba(0, 2, 121, 0.05);
    border: 1px solid #d8e2fd;
}

.filter-tabs-list .filter-btn {
    padding: 10px 22px;
    border-radius: 40px;
    font-size: 14px;
    font-weight: 700;
    color: #1c2d52;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    user-select: none;
    border: none;
    background: transparent;
    display: flex;
    align-items: center;
}

.filter-tabs-list .filter-btn:hover {
    color: #000279;
    background: rgba(255, 255, 255, 0.7);
}

.filter-tabs-list .filter-btn.active {
    background: #000279;
    color: #ffffff;
    box-shadow: 0 4px 15px rgba(0, 2, 121, 0.25);
}

.filter-tabs-list .filter-btn .count {
    background: rgba(0, 2, 121, 0.1);
    color: #000279;
    padding: 2px 8px;
    border-radius: 12px;
    font-size: 11px;
    font-weight: 700;
    margin-left: 8px;
    transition: all 0.3s ease;
}

.filter-tabs-list .filter-btn.active .count {
    background: #fb9506;
    color: #ffffff;
}

.project-card {
    background: #fff;
    border: 1px solid #edf2f7;
    border-radius: 16px;
    transition: all 0.35s ease;
    margin-bottom: 30px;
    height: 100%;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.04);
}

.project-card:hover {
    box-shadow: 0 15px 35px rgba(0,2,121,0.12);
    transform: translateY(-6px);
    border-color: #000279;
}

.project-card .image-box {
    position: relative;
    height: 240px;
    overflow: hidden;
    background: #f8f9fa;
}

.project-card .image-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.project-card:hover .image-box img {
    transform: scale(1.05);
}

.category-pill-badge {
    position: absolute;
    top: 15px;
    left: 15px;
    background: rgba(0, 2, 121, 0.88);
    backdrop-filter: blur(4px);
    color: #ffffff;
    font-size: 12px;
    font-weight: 700;
    padding: 5px 14px;
    border-radius: 20px;
    letter-spacing: 0.3px;
    z-index: 2;
    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
}

.project-card .content-box {
    padding: 24px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.project-card h3 {
    font-size: 20px;
    font-weight: 700;
    color: #1c2d52;
    margin-bottom: 10px;
    line-height: 26px;
}

.project-card h3 a {
    color: #1c2d52;
    text-decoration: none;
    transition: color 0.2s ease;
}

.project-card h3 a:hover {
    color: #000279;
}

.project-card p {
    font-size: 14px;
    line-height: 22px;
    color: #666;
    margin-bottom: 16px;
}

.portfolio-item-col {
    transition: opacity 0.35s ease, transform 0.35s ease;
}

.portfolio-item-col.is-hidden {
    display: none !important;
}
</style>
@endsection

@section('content')

<!-- Page Title -->
<section class="page-title centred">
    <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-87.png') }});"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Our Works & Case Studies</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Works</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->

<!-- Portfolio Section -->
<section class="project-page-2 py-5">
    <div class="auto-container">
        <div class="sec-title style-two centred">
            <h5>PROVEN RESULTS</h5>
            <h2>Engineered Platforms That Deliver Impact</h2>
            <div class="divider" style="background-image: url({{ asset('frontend/assets/images/icons/divider-1.png') }});"></div>
            <p style="max-width: 750px; margin: 0 auto 20px; color: #666; font-size: 16px;">
                Explore real-world platforms built by our engineering squads for clients in the US, UK, Europe, and India. Every system is engineered for scalability, data integrity, and high uptime.
            </p>
        </div>

        <!-- Dynamic Category Filter Tabs -->
        <div class="portfolio-filter-tabs text-center">
            <ul class="filter-tabs-list list-unstyled mb-0">
                <li class="filter-btn active" data-filter="all">
                    All Projects <span class="count">{{ $works->count() }}</span>
                </li>
                @foreach($categories as $catItem)
                    <li class="filter-btn" data-filter="cat-{{ Str::slug($catItem->category) }}">
                        {{ $catItem->category }} <span class="count">{{ $catItem->count }}</span>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Portfolio Grid -->
        <div class="row clearfix" id="portfolio-grid">
            @forelse ($works as $workdata)
                @php
                    $mainImage = $workdata->image 
                        ? (Str::startsWith($workdata->image, 'http') ? $workdata->image : asset($workdata->image))
                        : asset('frontend/assets/images/gallery/project-1.jpg');
                    $detailUrl = route('project-details', $workdata->slug);
                    $categorySlug = 'cat-' . Str::slug($workdata->category ?? 'enterprise-erp');
                @endphp

                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 portfolio-item-col {{ $categorySlug }}" data-category="{{ $categorySlug }}">
                    <div class="project-card">
                        <div class="image-box">
                            <span class="category-pill-badge">
                                <i class="fas fa-folder-open mr-1"></i> {{ $workdata->category ?? 'Enterprise Platform' }}
                            </span>
                            @if($workdata->live_url)
                                <a href="{{ $workdata->live_url }}" target="_blank" rel="noopener noreferrer" style="position: absolute; bottom: 12px; right: 12px; background: rgba(40, 167, 69, 0.95); backdrop-filter: blur(4px); color: #fff; font-size: 11px; font-weight: 700; padding: 4px 12px; border-radius: 20px; z-index: 2; text-decoration: none; box-shadow: 0 2px 8px rgba(0,0,0,0.2);">
                                    <i class="fas fa-circle mr-1" style="font-size: 7px; color: #73ff9e;"></i> Live Website ↗
                                </a>
                            @endif
                            <img src="{{ $mainImage }}" loading="lazy" alt="{{ $workdata->title }}" onerror="this.src='{{ asset('frontend/assets/images/gallery/project-7.jpg') }}'">
                            <a href="{{ $detailUrl }}" style="position: absolute; top: 15px; right: 15px; background: rgba(0,2,121,0.85); color: #fff; width: 38px; height: 38px; border-radius: 50%; display: flex; align-items: center; justify-content: center; text-decoration: none; z-index: 2;" title="View Case Study">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>

                        <div class="content-box">
                            <div>
                                <div class="tech-tags mb-2">
                                    @foreach(explode(',', $workdata->technology) as $tech)
                                        <span class="tech-pill">{{ trim($tech) }}</span>
                                    @endforeach
                                </div>

                                <h3>
                                    <a href="{{ $detailUrl }}">{{ $workdata->title }}</a>
                                </h3>

                                <p>
                                    {{ Str::limit(strip_tags($workdata->short_description ?? ''), 130) }}
                                </p>
                            </div>

                            <div class="pt-3 border-top d-flex justify-content-between align-items-center flex-wrap gap-2">
                                <a href="{{ $detailUrl }}" style="color: #000279; font-weight: 700; font-size: 13px; text-decoration: none;">
                                    Case Study <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                                
                                @if($workdata->live_url)
                                    <a href="{{ $workdata->live_url }}" target="_blank" rel="noopener noreferrer" class="btn btn-sm" style="background: #eef2ff; color: #000279; font-size: 12px; font-weight: 700; border-radius: 20px; padding: 4px 12px; border: 1px solid #c7d2fe; transition: all 0.2s ease;">
                                        <i class="fas fa-external-link-alt mr-1" style="font-size: 10px;"></i> Visit Site
                                    </a>
                                @else
                                    <span style="font-size: 11px; color: #888; font-weight: 600;">Enterprise IP</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            @empty
                <div class="col-12 text-center py-5">
                    <h3>No Works Found</h3>
                    <p>We are currently updating our portfolio. Please check back soon!</p>
                </div>
            @endforelse
        </div>

        @if(is_object($works) && method_exists($works, 'hasPages') && $works->hasPages())
            <div class="pagination-wrapper centred mt-4">
                {{ $works->links() }}
            </div>
        @endif

    </div>
</section>

<!-- Call to Action for Similar Build -->
<section class="cta-banner py-5" style="background: linear-gradient(135deg, #000279 0%, #151a99 100%); color: #fff;">
    <div class="auto-container text-center py-4">
        <h2 style="color: #fff; font-size: 36px; font-weight: 800; margin-bottom: 15px;">
            Need a Similar Solution for Your Business?
        </h2>
        <p style="color: #cbd5e0; font-size: 17px; max-width: 720px; margin: 0 auto 30px; line-height: 28px;">
            Partner with Innovation Trove to design, architect, and deploy production-ready digital software that outperforms competitors and delivers quantifiable ROI.
        </p>
        <div class="btn-box">
            <a href="{{ route('get-quote') }}" class="theme-btn btn-seven mr-3" style="background: #fb9506; border-color: #fb9506; color: #ffffff;">
                Request Project Estimate
            </a>
            <a href="{{ route('contact') }}" class="btn btn-outline-light px-4 py-3" style="font-weight: 700; border-radius: 30px;">
                Talk with Our Engineers
            </a>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
(function() {
    function initPortfolioFilter() {
        var filterBtns = document.querySelectorAll('.portfolio-filter-tabs .filter-btn');
        var items = document.querySelectorAll('.portfolio-item-col');
        
        if (!filterBtns.length) return;

        filterBtns.forEach(function (btn) {
            btn.addEventListener('click', function (e) {
                e.preventDefault();

                // Toggle active state
                filterBtns.forEach(function (b) { b.classList.remove('active'); });
                this.classList.add('active');

                var filterValue = this.getAttribute('data-filter');

                items.forEach(function (item) {
                    var match = (filterValue === 'all' || item.classList.contains(filterValue) || item.getAttribute('data-category') === filterValue);

                    if (match) {
                        item.style.display = 'block';
                        setTimeout(function () {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, 20);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.96)';
                        setTimeout(function () {
                            item.style.display = 'none';
                        }, 200);
                    }
                });
            });
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initPortfolioFilter);
    } else {
        initPortfolioFilter();
    }
})();
</script>
@endsection