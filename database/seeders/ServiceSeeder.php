<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate to avoid sequence unique constraint issues
        DB::table('services')->delete();

        $services = [
            [
                'title' => 'Custom Software Development',
                'fa_icon' => 'fa-code',
                'pic' => 'services/software.jpg',
                'thumbnail_image' => 'services/software-thumb.jpg',
                'thumbnail_img' => 'services/software-thumb.jpg',
                'meta_title' => 'Custom Software Development in Lucknow',
                'meta_keyword' => 'software development, custom software, itrove',
                'meta_description' => 'Tailored software solutions for your business needs.',
                'description' => 'A premier software company in Lucknow, we specialize in custom software development tailored to meet the unique needs of businesses. Our team designs intuitive, scalable, and high-performance software solutions.',
                'full_description' => '<p>From concept to deployment, we ensure seamless integration and exceptional results to help you stay ahead in the digital landscape. We use the latest technologies like Laravel, React, and Python to build robust systems.</p>',
                'sequence' => 1,
            ],
            [
                'title' => 'Social Media Marketing',
                'fa_icon' => 'fa-share-alt',
                'pic' => 'services/social-media.jpg',
                'thumbnail_image' => 'services/social-media-thumb.jpg',
                'thumbnail_img' => 'services/social-media-thumb.jpg',
                'meta_title' => 'Best Social Media Marketing Service',
                'meta_keyword' => 'smm, social media marketing, facebook ads',
                'meta_description' => 'Connect with your audience and grow your brand online.',
                'description' => 'We offer top-notch social media marketing services that help businesses connect with their audience and grow their brand online. We craft tailored strategies to boost engagement.',
                'full_description' => '<p>Drive traffic and increase conversions across platforms like Facebook, Instagram, LinkedIn, and more. Let us help you maximize your online presence and turn followers into loyal customers.</p>',
                'sequence' => 2,
            ],
            [
                'title' => 'Search Engine Optimization',
                'fa_icon' => 'fa-search',
                'pic' => 'services/seo.jpg',
                'thumbnail_image' => 'services/seo-thumb.jpg',
                'thumbnail_img' => 'services/seo-thumb.jpg',
                'meta_title' => 'SEO Services Lucknow - Top SEO Company',
                'meta_keyword' => 'seo, search engine optimization, rank high',
                'meta_description' => 'Enhance your website visibility and rank higher on search engines.',
                'description' => 'Our Search Engine Optimization (SEO) services are designed to enhance your website visibility and rank higher on search engines. As a trusted software company, we use data-driven strategies.',
                'full_description' => '<p>We implement on-page and off-page SEO techniques and stay updated with the latest industry trends to drive organic traffic and improve your online presence. Let us help your business stand out in search results.</p>',
                'sequence' => 3,
            ],
            [
                'title' => 'Website Design and Development',
                'fa_icon' => 'fa-laptop-code',
                'pic' => 'services/web-design.jpg',
                'thumbnail_image' => 'services/web-design-thumb.jpg',
                'thumbnail_img' => 'services/web-design-thumb.jpg',
                'meta_title' => 'Professional Web Design & Development',
                'meta_keyword' => 'web design, web development, responsive website',
                'meta_description' => 'Creating visually stunning and highly functional websites.',
                'description' => 'We specialize in website design and development, creating visually stunning and highly functional websites that reflect your brand identity. We ensure your website is responsive and user-friendly.',
                'full_description' => '<p>Optimized for performance, our custom designs lead to seamless user experiences. We help businesses build a powerful online presence that drives engagement and growth through modern web standards.</p>',
                'sequence' => 4,
            ],
            [
                'title' => 'Digital Marketing',
                'fa_icon' => 'fa-bullhorn',
                'pic' => 'services/digital-marketing.jpg',
                'thumbnail_image' => 'services/digital-marketing-thumb.jpg',
                'thumbnail_img' => 'services/digital-marketing-thumb.jpg',
                'meta_title' => 'Complete Digital Marketing Solutions',
                'meta_keyword' => 'digital marketing, online ads, branding',
                'meta_description' => 'Grow your online presence with data-driven campaigns.',
                'description' => 'We offer comprehensive digital marketing solutions to help businesses grow their online presence. We create customized strategies across SEO, social media, and content marketing.',
                'full_description' => '<p>Our team uses paid advertising to drive traffic, engage audiences, and increase conversions. Let us elevate your brand with data-driven campaigns that deliver measurable results and ROI.</p>',
                'sequence' => 5,
            ],
            [
                'title' => 'System Administrator',
                'fa_icon' => 'fa-server',
                'pic' => 'services/sysadmin.jpg',
                'thumbnail_image' => 'services/sysadmin-thumb.jpg',
                'thumbnail_img' => 'services/sysadmin-thumb.jpg',
                'meta_title' => 'Expert System Administration Services',
                'meta_keyword' => 'system admin, server management, it infrastructure',
                'meta_description' => 'Ensure your IT infrastructure runs smoothly and securely.',
                'description' => 'Our System Administrator services ensure your IT infrastructure runs smoothly and securely. As a trusted software company, we manage, monitor, and maintain servers and networks.',
                'full_description' => '<p>We prevent downtime and optimize performance. From troubleshooting to upgrades, our expert team ensures your systems are always up-to-date and operating efficiently for your business continuity.</p>',
                'sequence' => 6,
            ],
            [
                'title' => 'IT Support Services',
                'fa_icon' => 'fa-headset',
                'pic' => 'services/it-support.jpg',
                'thumbnail_image' => 'services/it-support-thumb.jpg',
                'thumbnail_img' => 'services/it-support-thumb.jpg',
                'meta_title' => '24/7 IT Support Services in Lucknow',
                'meta_keyword' => 'it support, technical assistance, troubleshooting',
                'meta_description' => 'Reliable and efficient IT support to keep your business running.',
                'description' => 'We provide reliable and efficient IT Support services to keep your business running without interruption. Our dedicated team offers 24/7 technical assistance and troubleshooting.',
                'full_description' => '<p>Maintenance to ensure smooth operations. From resolving technical issues to proactive monitoring, we\'re here to support your IT needs and minimize downtime for your critical business processes.</p>',
                'sequence' => 7,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
