<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Work;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $works = [
            [
                'title' => 'ITrove Food Delivery System',
                'technology' => 'Laravel, Vue.js, MySQL',
                'image' => 'works/food-delivery.jpg',
                'thumbnail' => 'works/food-delivery-thumb.jpg',
                'screenshot_img' => 'works/food-delivery-screen.jpg',
                'meta_keyword' => 'food delivery, itrove, ordering system',
                'meta_title' => 'ITrove Food Delivery System',
                'meta_description' => 'A robust food delivery platform built with Laravel.',
                'short_description' => 'A food delivery system is a service or platform that facilitates the ordering and delivery of food from restaurants or food outlets to customers.',
                'full_description' => '<p>These systems have become increasingly popular, offering convenience for consumers and expanded customer reach for food businesses. It features real-time tracking, secure payments, and a robust vendor management system.</p>',
            ],
            [
                'title' => 'ITrove ERP',
                'technology' => 'Laravel, React, PostgreSQL',
                'image' => 'works/erp.jpg',
                'thumbnail' => 'works/erp-thumb.jpg',
                'screenshot_img' => 'works/erp-screen.jpg',
                'meta_keyword' => 'erp, itrove, enterprise planning',
                'meta_title' => 'ITrove ERP System',
                'meta_description' => 'Integrated enterprise resource planning solution.',
                'short_description' => 'ERP (Enterprise Resource Planning) system, possibly using "smothing" as a placeholder or generic term.',
                'full_description' => '<p>ERP systems are comprehensive software platforms used by organizations to manage and integrate important parts of their businesses. This ERP includes HR, Inventory, Finance, and CRM modules integrated into a single unified interface.</p>',
            ],
            [
                'title' => 'Theorie Stampers',
                'technology' => 'PHP, Bootstrap, jQuery',
                'image' => 'works/theorie.jpg',
                'thumbnail' => 'works/theorie-thumb.jpg',
                'screenshot_img' => 'works/theorie-screen.jpg',
                'meta_keyword' => 'driving exam, online test, driving license',
                'meta_title' => 'Theorie Stampers - Online Driving Exam',
                'meta_description' => 'Modern driving examination and theory testing platform.',
                'short_description' => 'An online driving exam system represents a significant step toward modernizing the driver\'s licensing process.',
                'full_description' => '<p>Making it more efficient, accessible, and adaptable to the needs of a diverse population. The system includes mock tests, time-bound examinations, and instant result generation with detailed performance analytics.</p>',
            ],
            [
                'title' => 'Grievance Portal',
                'technology' => 'Laravel, Livewire, Alpine.js',
                'image' => 'works/grievance.jpg',
                'thumbnail' => 'works/grievance-thumb.jpg',
                'screenshot_img' => 'works/grievance-screen.jpg',
                'meta_keyword' => 'grievance, complaint portal, ticket system',
                'meta_title' => 'Online Grievance Portal',
                'meta_description' => 'Platform for managing and resolving complaints efficiently.',
                'short_description' => 'A grievance portal is an online platform designed to manage and resolve complaints or grievances raised by employees, customers, or citizens.',
                'full_description' => '<p>The primary goal is to provide a transparent, accessible, and efficient means of addressing concerns, ensuring that grievances are heard, processed, and resolved in a fair and timely manner. Includes ticket tracking and SLA monitoring.</p>',
            ],
            [
                'title' => 'File Tracking System',
                'technology' => 'Laravel, Blade, MySQL',
                'image' => 'works/file-tracking.jpg',
                'thumbnail' => 'works/file-tracking-thumb.jpg',
                'screenshot_img' => 'works/file-tracking-screen.jpg',
                'meta_keyword' => 'file tracking, document management, itrove',
                'meta_title' => 'Digital File Tracking System',
                'meta_description' => 'Track the movement and status of documents within an organization.',
                'short_description' => 'A File Tracking System is a digital solution designed to track the movement, status, and management of files or documents within an organization.',
                'full_description' => '<p>This system is especially useful in environments where numerous documents are processed and require approval from multiple departments or individuals. It features QR code scanning and digital audit trails.</p>',
            ],
            [
                'title' => 'Pizza Paradise',
                'technology' => 'Node.js, Express, MongoDB',
                'image' => 'works/pizza.jpg',
                'thumbnail' => 'works/pizza-thumb.jpg',
                'screenshot_img' => 'works/pizza-screen.jpg',
                'meta_keyword' => 'pizza order, online food, restaurant system',
                'meta_title' => 'Pizza Paradise Ordering Platform',
                'meta_description' => 'Easy pizza ordering and delivery management system.',
                'short_description' => 'This system has gained immense popularity due to its convenience, variety, and the ability to order easily through websites or mobile apps.',
                'full_description' => '<p>Pizza Paradise offers a custom pizza builder, real-time kitchen display for chefs, and a loyalty program integration. It\'s optimized for high-traffic peak hours and mobile-first ordering.</p>',
            ],
        ];

        foreach ($works as $work) {
            Work::updateOrCreate(['title' => $work['title']], $work);
        }
    }
}
