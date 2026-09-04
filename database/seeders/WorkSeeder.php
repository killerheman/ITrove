<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Work;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->truncate();

        $works = [
            // ==========================================
            // 1. LNMU UNIVERSITY PORTALS & ERP (CORE UNIVERSITY ECOSYSTEM)
            // ==========================================
            [
                'title' => 'LNMU Official University Web Portal',
                'slug' => 'lnmu-official-university-portal',
                'category' => 'LNMU University Portals & ERP',
                'live_url' => 'https://lnmu.ac.in/',
                'featured_order' => 1,
                'technology' => 'Laravel, MySQL, PHP, Bootstrap, Cloudflare CDN',
                'image' => 'frontend/assets/images/resource/dashboard-1.png',
                'thumbnail' => 'frontend/assets/images/resource/dashboard-1.png',
                'screenshot_img' => 'frontend/assets/images/resource/dashboard-1.png',
                'meta_keyword' => 'LNMU university portal, Lalit Narayan Mithila University website, Darbhanga university portal, higher education software Bihar, university web development',
                'meta_title' => 'LNMU Official University Web Portal Case Study | Innovation Trove',
                'meta_description' => 'Official enterprise web portal developed for Lalit Narayan Mithila University (LNMU), Darbhanga, managing academic notices, circulars, student resources, and university governance.',
                'short_description' => 'High-traffic official web portal engineered for Lalit Narayan Mithila University (LNMU), serving over 500,000+ students and faculty with real-time academic circulars, affiliated college directories, and administrative governance.',
                'full_description' => '
                    <div class="project-case-study">
                        <h3>Client Background & Institutional Scope</h3>
                        <p><strong>Lalit Narayan Mithila University (LNMU)</strong>, located in Darbhanga, Bihar, is a premier state university overseeing dozens of constituent and affiliated colleges across multiple districts, serving hundreds of thousands of undergraduate, postgraduate, and doctoral scholars.</p>

                        <h3>The Engineering Challenge</h3>
                        <p>The university required a robust, modern, highly accessible web infrastructure capable of withstanding extreme traffic spikes during examination announcements, admission notifications, and recruitment declarations without downtime, ensuring total compliance with government accessibility norms and data security standards.</p>

                        <h3>Technical Solution & Architectural Highlights</h3>
                        <p>Innovation Trove designed and architected the complete digital portal leveraging an enterprise <strong>Laravel</strong> framework with hardened security headers, optimized database indexing, and multi-tier edge caching:</p>
                        <ul class="list-style-one clearfix mb-4">
                            <li><strong>Dynamic Academic Notification Engine:</strong> High-speed content management system for rapid publishing of press releases, tender documents, exam schedules, and gazette notifications.</li>
                            <li><strong>Affiliated Colleges & Departments Directory:</strong> Structured interactive repository covering faculties, affiliated colleges, syllabus documents, and statutory committee disclosures.</li>
                            <li><strong>High-Concurrency Caching:</strong> Layered caching strategy handling hundreds of thousands of concurrent visitor requests during peak result and notice release windows.</li>
                            <li><strong>Mobile-First Responsive Interface:</strong> Optimized for seamless rendering across smartphones, tablets, and desktops with cross-browser compatibility.</li>
                        </ul>

                        <h3>Measurable Impact</h3>
                        <p>The portal serves as the single source of truth for the entire university ecosystem, maintaining <strong>99.9% uptime</strong> and handling millions of page impressions each month with zero performance degradation.</p>
                    </div>',
            ],
            [
                'title' => 'LNMU Student Certificate & Online ERP System',
                'slug' => 'lnmu-student-erp-certificate-portal',
                'category' => 'LNMU University Portals & ERP',
                'live_url' => 'https://studenterp.lnmu.ac.in/',
                'featured_order' => 2,
                'technology' => 'Laravel, MySQL, Razorpay Gateway, PDF Signing, SMS API',
                'image' => 'frontend/assets/images/resource/dashboard-7.png',
                'thumbnail' => 'frontend/assets/images/resource/dashboard-7.png',
                'screenshot_img' => 'frontend/assets/images/resource/dashboard-7.png',
                'meta_keyword' => 'LNMU student ERP, university certificate portal, online degree application, migration certificate payment, university ERP Bihar',
                'meta_title' => 'LNMU Student ERP & Certificate Issuance System | Innovation Trove',
                'meta_description' => 'Enterprise Student ERP portal for LNMU enabling students to apply for Provisional Certificates, Degrees, and Migrations online with integrated payment gateway and digital tracking.',
                'short_description' => 'Enterprise student service ERP enabling university scholars to apply online for Degree Certificates, Migration Certificates, and Transcripts with digital document verification, integrated payment gateways, and postal dispatch tracking.',
                'full_description' => '
                    <div class="project-case-study">
                        <h3>Challenge</h3>
                        <p>Alumni and existing students frequently had to travel hundreds of kilometers to the university headquarters in Darbhanga to submit manual challans and wait weeks for physical certificate verifications.</p>

                        <h3>Solution & Architecture</h3>
                        <p>Innovation Trove built the <strong>Student ERP & Certificate Portal</strong>, completely digitizing the application-to-dispatch workflow:</p>
                        <ul class="list-style-one clearfix mb-4">
                            <li><strong>Multi-Certificate Application Pipeline:</strong> Support for Provisional Certificates, Original Degrees, Migration Certificates, Correction of Marksheets, and Transcripts.</li>
                            <li><strong>Integrated Online Fee Payment:</strong> Secure payment gateway checkout with real-time receipt generation and automated reconciliation against university bank accounts.</li>
                            <li><strong>Multi-Level Department Approval Workflow:</strong> Role-based admin approval desks for Section Officers, Assistant Registrars, and Controller of Examinations.</li>
                            <li><strong>Live Application Tracking & SMS Updates:</strong> Students track application stages (Under Verification, Approved, Printed, Dispatched with Speed Post tracking number).</li>
                        </ul>

                        <h3>Outcome</h3>
                        <p>Over 150,000+ digital applications processed with zero physical visits required, increasing student convenience and university revenue collection efficiency.</p>
                    </div>',
            ],
            [
                'title' => 'LNMU Grievance Redressal Portal',
                'slug' => 'lnmu-online-grievance-portal',
                'category' => 'LNMU University Portals & ERP',
                'live_url' => 'https://grievance.lnmu.ac.in/',
                'featured_order' => 3,
                'technology' => 'Laravel, PHP, MySQL, Email/SMS Gateway, Ticket SLA Routing',
                'image' => 'frontend/assets/images/resource/screen-2.png',
                'thumbnail' => 'frontend/assets/images/resource/screen-2.png',
                'screenshot_img' => 'frontend/assets/images/resource/screen-2.png',
                'meta_keyword' => 'LNMU grievance portal, university grievance redressal system, online ticket management, student complaint portal, UGC compliance portal',
                'meta_title' => 'LNMU Online Grievance Redressal Portal | Innovation Trove',
                'meta_description' => 'Official Online Grievance Portal for LNMU complying with UGC guidelines, offering transparent ticket logging, category routing, administrative SLA escalation, and student tracking.',
                'short_description' => 'UGC-compliant transparent online Grievance Redressal Portal allowing university students, faculty, and staff to register complaints, track resolution tickets with unique IDs, and receive automated email/SMS status updates.',
                'full_description' => '
                    <div class="project-case-study">
                        <h3>Objective</h3>
                        <p>Establish a transparent, time-bound, UGC-mandated institutional grievance mechanism across all university departments, colleges, and examination divisions.</p>

                        <h3>Features & Engineering</h3>
                        <ul class="list-style-one clearfix mb-4">
                            <li><strong>Unique Grievance Ticket Generation:</strong> Cryptographic ticket IDs allowing public tracking of redressal progress without requiring account creation.</li>
                            <li><strong>Automated Departmental Routing:</strong> Intelligent dispatching of tickets based on category (Admissions, Examinations, Fee issues, Harassment, Hostels, Administration).</li>
                            <li><strong>SLA Escalation Matrix:</strong> Auto-escalation to Higher Nodal Officers if tickets remain unaddressed past predefined statutory deadlines.</li>
                            <li><strong>Action Taken Reports (ATR):</strong> Digital remark logging and resolution proof uploads prior to official ticket closure.</li>
                        </ul>

                        <h3>Results</h3>
                        <p>Drastically improved institutional accountability and established total compliance with UGC guidelines for student welfare.</p>
                    </div>',
            ],
            [
                'title' => 'LNMU File Tracking & Document Dispatch System',
                'slug' => 'lnmu-file-tracking-system',
                'category' => 'LNMU University Portals & ERP',
                'live_url' => 'https://filetracking.lnmu.ac.in/',
                'featured_order' => 4,
                'technology' => 'Laravel, PostgreSQL, QR Code Scanner Engine, Audit Trail Logger',
                'image' => 'frontend/assets/images/resource/screen-4.png',
                'thumbnail' => 'frontend/assets/images/resource/screen-4.png',
                'screenshot_img' => 'frontend/assets/images/resource/screen-4.png',
                'meta_keyword' => 'LNMU file tracking system, university document tracking, paperless office software, intra-university file movement, e-governance ERP',
                'meta_title' => 'LNMU Paperless File Tracking & Document Routing System | Innovation Trove',
                'meta_description' => 'Enterprise intra-university File Tracking System developed for LNMU administration to track physical files and digital dockets across 40+ departments with QR code scans.',
                'short_description' => 'Enterprise intra-university File Tracking System engineered to record, trace, and audit the physical movement and digital docket history of administrative files across 40+ departments with QR code checkpoints.',
                'full_description' => '
                    <div class="project-case-study">
                        <h3>Problem Statement</h3>
                        <p>In a large university administration, files moving between Vice-Chancellor Secretariat, Registrar Office, Finance Officer, and Examination Control branches often suffered from delays or untraced physical locations.</p>

                        <h3>Solution Delivered</h3>
                        <p>Innovation Trove created a centralized <strong>E-Governance File Tracking System</strong>:</p>
                        <ul class="list-style-one clearfix mb-4">
                            <li><strong>Unique Barcode & QR Docket Tagging:</strong> Every file docket receives a persistent QR code tag scanned upon receipt and dispatch at every desk.</li>
                            <li><strong>Real-Time Physical Location Tracking:</strong> Authorised administrative officers can immediately identify which table/department holds a specific file and for how many days.</li>
                            <li><strong>Anti-Tampering Audit Log:</strong> Complete immutable timestamp history of file approvals, comments, and transit handlers.</li>
                            <li><strong>Pending Desk Analytics:</strong> Departmental bottleneck dashboards highlighting desks with overdue files.</li>
                        </ul>

                        <h3>Impact</h3>
                        <p>Reduced file transit turnaround from weeks to days, eliminating file loss and dramatically expediting administrative approvals.</p>
                    </div>',
            ],
            [
                'title' => 'LNMU Career & Faculty Recruitment Portal',
                'slug' => 'lnmu-career-recruitment-portal',
                'category' => 'LNMU University Portals & ERP',
                'live_url' => 'https://career.lnmu.ac.in/',
                'featured_order' => 5,
                'technology' => 'Laravel, MySQL, Secure Document Storage, Payment Gateway',
                'image' => 'frontend/assets/images/resource/dashboard-2.png',
                'thumbnail' => 'frontend/assets/images/resource/dashboard-2.png',
                'screenshot_img' => 'frontend/assets/images/resource/dashboard-2.png',
                'meta_keyword' => 'LNMU career portal, university recruitment software, faculty job application Bihar, university online job application, recruitment portal development',
                'meta_title' => 'LNMU Career & Faculty Recruitment Portal | Innovation Trove',
                'meta_description' => 'High-security recruitment and employment portal for LNMU allowing applicants to submit verified academic portfolios, upload research publications, and pay application fees.',
                'short_description' => 'High-security faculty and staff recruitment portal managing vacancy advertisements, multi-tier applicant profiles, API-score calculations, research publication uploads, and online fee collection.',
                'full_description' => '
                    <div class="project-case-study">
                        <h3>Overview</h3>
                        <p>LNMU conducts periodic recruitment for Guest Faculty, Assistant Professors, and Administrative Staff. The process required a tamper-proof digital recruitment portal.</p>

                        <h3>Key Capabilities Delivered</h3>
                        <ul class="list-style-one clearfix mb-4">
                            <li><strong>Automated API Scoring:</strong> UGC Academic Performance Indicator (API) auto-calculator based on applicant qualifications, NET/JRF scores, and citations.</li>
                            <li><strong>Document & Research Paper Vault:</strong> Secure multi-file upload engine supporting indexed research papers, caste certificates, and experience records.</li>
                            <li><strong>Category-Wise Fee Checkout:</strong> Dynamic fee calculations based on candidate reservation category with instantaneous bank reconciliation.</li>
                            <li><strong>Scrutiny & Merit List Generator:</strong> Administrative committee dashboard to review, approve/reject, and export candidate merit rankings into Excel/PDF.</li>
                        </ul>

                        <h3>Results</h3>
                        <p>Handled over 20,000+ high-stakes faculty applications seamlessly with zero data errors and transparent scrutiny logs.</p>
                    </div>',
            ],
            [
                'title' => 'LNMU Convocation Registration & Gown Portal',
                'slug' => 'lnmu-convocation-portal',
                'category' => 'LNMU University Portals & ERP',
                'live_url' => 'https://convocation.lnmu.ac.in/',
                'featured_order' => 6,
                'technology' => 'Laravel, MySQL, QR Gate Pass, Online Payment',
                'image' => 'frontend/assets/images/resource/about-7.png',
                'thumbnail' => 'frontend/assets/images/resource/about-7.png',
                'screenshot_img' => 'frontend/assets/images/resource/about-7.png',
                'meta_keyword' => 'LNMU convocation portal, convocation registration system, university degree convocation, convocation pass QR generator',
                'meta_title' => 'LNMU Convocation Registration & Entry Gate Pass System | Innovation Trove',
                'meta_description' => 'Digital convocation registration system for LNMU allowing degree recipients to register, select convocation attire, pay fees, and receive scannable QR gate passes.',
                'short_description' => 'Dedicated annual convocation registration portal managing degree candidate verification, ceremonial gown allocations, payment transactions, and automated QR code entry passes.',
                'full_description' => '
                    <div class="project-case-study">
                        <h3>Context</h3>
                        <p>University convocations are premier ceremonies involving thousands of graduating students, medalists, VIP dignitaries, and security protocols.</p>

                        <h3>Implementation</h3>
                        <ul class="list-style-one clearfix mb-4">
                            <li><strong>Student Degree Eligibility Verification:</strong> Automatic verification against university roll number and passing session records.</li>
                            <li><strong>Fee & Gown Security Deposit Engine:</strong> Secure payment workflow managing registration charges and refundable gown security deposits.</li>
                            <li><strong>Scannable QR Gate Passes:</strong> Automated generation of tamper-evident PDF admission cards with scannable entry QR codes for venue security personnel.</li>
                        </ul>
                    </div>',
            ],
            [
                'title' => 'LNMU Fee Portal (PhD & Postgraduate Research)',
                'slug' => 'lnmu-phd-postgraduate-fee-portal',
                'category' => 'LNMU University Portals & ERP',
                'live_url' => 'https://fee.lnmu.ac.in/',
                'featured_order' => 7,
                'technology' => 'Laravel, MySQL, Payment Gateway Integration, Automated Receipt Engine',
                'image' => 'frontend/assets/images/resource/dashboard-3.png',
                'thumbnail' => 'frontend/assets/images/resource/dashboard-3.png',
                'screenshot_img' => 'frontend/assets/images/resource/dashboard-3.png',
                'meta_keyword' => 'LNMU fee portal, PhD fee payment LNMU, university online fee collection, university challan system',
                'meta_title' => 'LNMU PhD & Research Student Fee Portal | Innovation Trove',
                'meta_description' => 'Online digital fee collection platform for LNMU PhD scholars and postgraduate students, generating automated tax receipts and university ledger sync.',
                'short_description' => 'Dedicated digital fee collection portal engineered for LNMU doctoral scholars and postgraduate departments, featuring automated fee breakdowns, instant challan generation, and audit-ready accounting.',
                'full_description' => '
                    <div class="project-case-study">
                        <h3>System Highlights</h3>
                        <p>Streamlined fee payment collections for PhD coursework, thesis submissions, semester registrations, and lab fees across all university postgraduate research departments.</p>
                        <ul class="list-style-one clearfix mb-4">
                            <li>Instant digital fee receipt generation with security watermark.</li>
                            <li>Direct integration with university treasury and accounting ledgers.</li>
                            <li>Departmental MIS reports on collection statistics and overdue scholar lists.</li>
                        </ul>
                    </div>',
            ],
            [
                'title' => 'LNMU NAAC Accreditation & IQAC Portal',
                'slug' => 'lnmu-naac-iqac-portal',
                'category' => 'LNMU University Portals & ERP',
                'live_url' => 'https://naac.lnmu.ac.in/',
                'featured_order' => 8,
                'technology' => 'Laravel, MySQL, Document Repository, IQAC Compliance Engine',
                'image' => 'frontend/assets/images/resource/dashboard-6.png',
                'thumbnail' => 'frontend/assets/images/resource/dashboard-6.png',
                'screenshot_img' => 'frontend/assets/images/resource/dashboard-6.png',
                'meta_keyword' => 'LNMU NAAC portal, IQAC university software, NAAC SSR accreditation software, institutional data portal',
                'meta_title' => 'LNMU NAAC Accreditation & Institutional Data Management Portal | Innovation Trove',
                'meta_description' => 'Centralized NAAC & IQAC compliance repository for LNMU organizing quantitative criteria, Self Study Reports (SSR), and stakeholder feedback disclosures.',
                'short_description' => 'Centralized institutional repository and IQAC documentation portal for LNMU organizing quantitative NAAC metrics, Self-Study Reports (SSR), Annual Quality Assurance Reports (AQAR), and stakeholder feedback surveys.',
                'full_description' => '
                    <div class="project-case-study">
                        <h3>Institutional Significance</h3>
                        <p>NAAC accreditation requires seamless digital documentation of thousands of metric proofs across 7 fundamental criteria for university quality benchmarks.</p>
                        <ul class="list-style-one clearfix mb-4">
                            <li>Structured Criteria 1 to 7 documentation archive with indexed PDF viewers.</li>
                            <li>Stakeholder feedback collection and automated analytical chart generation.</li>
                            <li>Compliance transparency portal for peer team inspection visits.</li>
                        </ul>
                    </div>',
            ],
            [
                'title' => 'LNMU University Guest House Management System',
                'slug' => 'lnmu-guest-house-management-system',
                'category' => 'LNMU University Portals & ERP',
                'live_url' => 'https://guesthouse.lnmu.ac.in/',
                'featured_order' => 9,
                'technology' => 'Laravel, MySQL, Room Inventory Engine, SMS Alerts',
                'image' => 'frontend/assets/images/gallery/project-10.jpg',
                'thumbnail' => 'frontend/assets/images/gallery/project-10.jpg',
                'screenshot_img' => 'frontend/assets/images/gallery/project-10.jpg',
                'meta_keyword' => 'LNMU guest house software, university room booking system, guest house management software, accommodation ERP',
                'meta_title' => 'LNMU Guest House Reservation & Suite Management System | Innovation Trove',
                'meta_description' => 'Online suite booking, VIP room requisition, occupancy calendar, and automated billing portal for Lalit Narayan Mithila University Guest House.',
                'short_description' => 'Digital room reservation and hospitality management software for LNMU Guest House, facilitating online suite requisitions for visiting professors, VIP delegates, examiner allocations, and billing.',
                'full_description' => '
                    <div class="project-case-study">
                        <h3>Features</h3>
                        <ul class="list-style-one clearfix mb-4">
                            <li>Real-time room occupancy and housekeeping availability calendar.</li>
                            <li>Online requisition submission with departmental approval routing.</li>
                            <li>Automated invoice generation for boarding, lodging, and catering.</li>
                        </ul>
                    </div>',
            ],

            // ==========================================
            // 2. COLLEGE & INSTITUTE WEBSITES & PORTALS
            // ==========================================
            [
                'title' => 'DDELNMU Distance Education & Examination Portal',
                'slug' => 'ddelnmu-distance-education-admit-card-result-system',
                'category' => 'College & Institute Portals',
                'live_url' => 'https://ddelnmu.ac.in/',
                'featured_order' => 10,
                'technology' => 'Laravel, MySQL, PDF Engine, Payment Gateway, Redis',
                'image' => 'frontend/assets/images/resource/screen-1.png',
                'thumbnail' => 'frontend/assets/images/resource/screen-1.png',
                'screenshot_img' => 'frontend/assets/images/resource/screen-1.png',
                'meta_keyword' => 'DDELNMU portal, distance education admit card, LNMU result management, distance learning college website, automated admit card generator',
                'meta_title' => 'DDE LNMU Distance Education & Result Management System | Innovation Trove',
                'meta_description' => 'Automated Directorate of Distance Education portal for LNMU featuring online student enrollment, instant admit card generation with barcode, and marksheet result publication.',
                'short_description' => 'Comprehensive Directorate of Distance Education (DDE LNMU) web portal equipped with automated online admit card generation, roll number validation, digital student verification, and high-speed examination result publication.',
                'full_description' => '
                    <div class="project-case-study">
                        <h3>Project Overview</h3>
                        <p>The <strong>Directorate of Distance Education (DDE), LNMU</strong> delivers open learning and higher education programs to distant learners. Managing manual hall-ticket distributions and result declarations was creating significant logistical bottlenecks and student queues.</p>

                        <h3>Our Technical Solution</h3>
                        <p>Innovation Trove engineered an automated student examination ecosystem:</p>
                        <ul class="list-style-one clearfix mb-4">
                            <li><strong>Automated Admit Card Generator:</strong> Instant dynamic PDF generation of examination hall tickets with security barcodes, student photos, signature verification, and center details.</li>
                            <li><strong>High-Throughput Result Publication Engine:</strong> High-performance database queries allowing tens of thousands of students to check subject-wise marksheets and division status simultaneously.</li>
                            <li><strong>Study Material & Syllabus Vault:</strong> Digital repository for e-books, self-learning modules, and assignment submissions.</li>
                        </ul>

                        <h3>Impact & Results</h3>
                        <p>Eliminated manual paper admit card queues entirely, saving hundreds of administrative hours per examination cycle and delivering instantaneous result lookups with 100% data integrity.</p>
                    </div>',
            ],
            [
                'title' => 'C.M. College (CMCLNMU) Official Academic Portal',
                'slug' => 'cmclnmu-bihar-college-portal',
                'category' => 'College & Institute Portals',
                'live_url' => 'https://cmclnmu.ac.in/',
                'featured_order' => 11,
                'technology' => 'Laravel, MySQL, Bootstrap, Notice Board Engine',
                'image' => 'frontend/assets/images/gallery/project-11.jpg',
                'thumbnail' => 'frontend/assets/images/gallery/project-11.jpg',
                'screenshot_img' => 'frontend/assets/images/gallery/project-11.jpg',
                'meta_keyword' => 'CMCLNMU, CM College Darbhanga website, constituent college portal LNMU, college website development Bihar',
                'meta_title' => 'C.M. College (CMCLNMU) Official Academic Web Portal | Innovation Trove',
                'meta_description' => 'Official website and student services portal for C.M. College Darbhanga, premier constituent college of LNMU, featuring department profiles, faculty directories, and notice boards.',
                'short_description' => 'Official academic portal for C.M. College Darbhanga (constituent college of LNMU), providing course outlines, faculty directories, scholarship circulars, and departmental resources.',
                'full_description' => '
                    <div class="project-case-study">
                        <p>Engineered to showcase C.M. College’s academic heritage and streamline daily digital communication between the principal’s office, departments, and students.</p>
                    </div>',
            ],
            [
                'title' => 'RKC LNMU (Ram Krishna College, Madhubani)',
                'slug' => 'rkclnmu-ram-krishna-college-portal',
                'category' => 'College & Institute Portals',
                'live_url' => 'https://rkclnmu.ac.in/',
                'featured_order' => 12,
                'technology' => 'Laravel, PHP, Bootstrap, Dynamic Notice Board',
                'image' => 'frontend/assets/images/gallery/project-14.jpg',
                'thumbnail' => 'frontend/assets/images/gallery/project-14.jpg',
                'screenshot_img' => 'frontend/assets/images/gallery/project-14.jpg',
                'meta_keyword' => 'RKCLNMU, RK College Madhubani website, Ram Krishna College portal',
                'meta_title' => 'Ram Krishna College (RKCLNMU) Madhubani Academic Portal | Innovation Trove',
                'meta_description' => 'Official web portal for Ram Krishna College, Madhubani (LNMU constituent college) featuring faculty profiles, student notices, and sports/cultural updates.',
                'short_description' => 'Premier constituent college web portal for Ram Krishna College, Madhubani, serving tens of thousands of undergraduate and postgraduate students with digital notices and departmental info.',
                'full_description' => '<p>Modern, responsive college website architected for high volume student traffic and instant notice dissemination.</p>',
            ],
            [
                'title' => 'WIT LNMU (Women\'s Institute of Technology) Portal',
                'slug' => 'witlnmu-womens-institute-of-technology-portal',
                'category' => 'College & Institute Portals',
                'live_url' => 'https://witlnmu.ac.in/',
                'featured_order' => 13,
                'technology' => 'Laravel, MySQL, AICTE Mandatory Disclosure Engine',
                'image' => 'frontend/assets/images/resource/about-6.png',
                'thumbnail' => 'frontend/assets/images/resource/about-6.png',
                'screenshot_img' => 'frontend/assets/images/resource/about-6.png',
                'meta_keyword' => 'WIT LNMU, Women\'s Institute of Technology Darbhanga, engineering college portal Bihar',
                'meta_title' => 'WIT LNMU Official Engineering Institute Portal | Innovation Trove',
                'meta_description' => 'Official portal for Women\'s Institute of Technology (WIT LNMU), highlighting B.Tech / MCA departments, AICTE disclosures, placements, and campus life.',
                'short_description' => 'Official web portal for Women\'s Institute of Technology (WIT LNMU), showcasing engineering departments (CSE, IT, Biotech), AICTE compliance, training & placement statistics, and admissions.',
                'full_description' => '<p>Engineered to deliver high visibility for women in engineering and technology, providing student project showcases and campus placement coordination.</p>',
            ],
            [
                'title' => 'LNMUBED (Department of Education) Web Portal',
                'slug' => 'lnmubed-teacher-education-portal',
                'category' => 'College & Institute Portals',
                'live_url' => 'https://lnmubed.ac.in/',
                'featured_order' => 14,
                'technology' => 'Laravel, MySQL, NCTE Compliance Engine',
                'image' => 'frontend/assets/images/gallery/project-12.jpg',
                'thumbnail' => 'frontend/assets/images/gallery/project-12.jpg',
                'screenshot_img' => 'frontend/assets/images/gallery/project-12.jpg',
                'meta_keyword' => 'LNMUBED portal, LNMU BEd website, teacher education portal, NCTE mandatory disclosure',
                'meta_title' => 'LNMUBED Department of Education Official Portal | Innovation Trove',
                'meta_description' => 'Dedicated teacher education and B.Ed portal for LNMU featuring NCTE mandatory disclosures, student practicum resources, and admission notifications.',
                'short_description' => 'Official portal for the Department of Education (B.Ed / M.Ed), LNMU, featuring NCTE regulatory mandatory disclosures, lesson-plan repositories, and admission counseling updates.',
                'full_description' => '<p>Specialized institutional portal built to satisfy all regulatory NCTE disclosures and provide B.Ed trainees with modern digital learning resources.</p>',
            ],
            [
                'title' => 'Department of Library & Information Science LNMU',
                'slug' => 'libraryscience-lnmu-portal',
                'category' => 'College & Institute Portals',
                'live_url' => 'https://libraryscience.lnmu.ac.in/',
                'featured_order' => 15,
                'technology' => 'PHP, Laravel, MySQL, Digital Catalog Integration',
                'image' => 'frontend/assets/images/gallery/project-1.jpg',
                'thumbnail' => 'frontend/assets/images/gallery/project-1.jpg',
                'screenshot_img' => 'frontend/assets/images/gallery/project-1.jpg',
                'meta_keyword' => 'LNMU library science, BLIS MLIS portal LNMU, library science department website',
                'meta_title' => 'Department of Library & Information Science LNMU | Innovation Trove',
                'meta_description' => 'Official academic portal for Department of Library and Information Science at LNMU offering BLIS & MLIS program curriculums and research journals.',
                'short_description' => 'Departmental portal for Library and Information Science at LNMU, offering online curriculums for BLIS and MLIS programs, seminar updates, and digital library resources.',
                'full_description' => '<p>Engineered to support digital information sciences and academic coursework distribution.</p>',
            ],
            [
                'title' => 'MBA Department LNMU Web Portal',
                'slug' => 'mba-lnmu-department-portal',
                'category' => 'College & Institute Portals',
                'live_url' => 'https://mba.lnmu.ac.in/',
                'featured_order' => 16,
                'technology' => 'Laravel, MySQL, Placement Desk, Student Showcase',
                'image' => 'frontend/assets/images/gallery/project-2.jpg',
                'thumbnail' => 'frontend/assets/images/gallery/project-2.jpg',
                'screenshot_img' => 'frontend/assets/images/gallery/project-2.jpg',
                'meta_keyword' => 'MBA LNMU, Department of Business Administration LNMU, management college Bihar',
                'meta_title' => 'Department of Business Administration (MBA LNMU) Portal | Innovation Trove',
                'meta_description' => 'Official management education portal for MBA Department LNMU with corporate placement records, guest lecture schedules, and alumni networking.',
                'short_description' => 'Official portal for the Department of Business Administration, LNMU, presenting corporate recruiters with placement records, summer internship brochures, and curriculum outlines.',
                'full_description' => '<p>Equipped with modern corporate aesthetics to drive industry partnerships and MBA student placements.</p>',
            ],
            [
                'title' => 'SDGDC Benipur (S.D.G.D. College, Bahera)',
                'slug' => 'sdgdc-benipur-college-portal',
                'category' => 'College & Institute Portals',
                'live_url' => 'https://sdgdc.ac.in/',
                'featured_order' => 17,
                'technology' => 'PHP, Laravel, Responsive CSS3, Notice System',
                'image' => 'frontend/assets/images/gallery/project-3.jpg',
                'thumbnail' => 'frontend/assets/images/gallery/project-3.jpg',
                'screenshot_img' => 'frontend/assets/images/gallery/project-3.jpg',
                'meta_keyword' => 'SDGDC Benipur website, SDGD College Bahera, LNMU constituent college',
                'meta_title' => 'S.D.G.D. College Benipur (SDGDC) Official Portal | Innovation Trove',
                'meta_description' => 'Official academic web portal for S.D.G.D. College, Benipur (LNMU) featuring administration details, courses, and examination notices.',
                'short_description' => 'Official academic web portal for S.D.G.D. College, Benipur, providing rural and semi-urban scholars with digital access to admission lists, syllabuses, and college news.',
                'full_description' => '<p>Streamlined web portal designed for rapid load times across mobile networks in rural and sub-divisional student catchments.</p>',
            ],
            [
                'title' => 'Z.A. Islamia Teachers\' Training College (ZHTTC)',
                'slug' => 'zhttc-college-management-portal',
                'category' => 'College & Institute Portals',
                'live_url' => 'https://zhttc.ac.in/',
                'featured_order' => 19,
                'technology' => 'Laravel, Bootstrap, NCTE Disclosure Framework',
                'image' => 'frontend/assets/images/gallery/project-5.jpg',
                'thumbnail' => 'frontend/assets/images/gallery/project-5.jpg',
                'screenshot_img' => 'frontend/assets/images/gallery/project-5.jpg',
                'meta_keyword' => 'ZHTTC Siwan website, ZA Islamia Teachers Training College, BEd college portal',
                'meta_title' => 'Z.A. Islamia Teachers\' Training College (ZHTTC) Portal | Innovation Trove',
                'meta_description' => 'Modern teacher training college portal for ZHTTC featuring NCTE disclosure documents, student fee structures, and academic calendars.',
                'short_description' => 'Comprehensive college website for Z.A. Islamia Teachers\' Training College, featuring teacher candidate records, mandatory regulatory transparency disclosures, and campus infrastructure showcases.',
                'full_description' => '<p>Engineered for full NCTE compliance, student enrollment guidelines, and institutional transparency.</p>',
            ],

            // ==========================================
            // 3. SAAS & ENTERPRISE ERP PRODUCTS
            // ==========================================
            [
                'title' => 'AI-Proctored Online University & College Examination System',
                'slug' => 'ai-proctored-online-examination-system',
                'category' => 'SaaS & Enterprise ERP',
                'live_url' => null,
                'featured_order' => 20,
                'technology' => 'Node.js, WebRTC, Python OpenCV, React, Redis, PostgreSQL',
                'image' => 'frontend/assets/images/service/service-3.jpg',
                'thumbnail' => 'frontend/assets/images/service/service-3.jpg',
                'screenshot_img' => 'frontend/assets/images/service/service-3.jpg',
                'meta_keyword' => 'online exam software, AI proctored examination, university online test platform, cheating detection software, standalone examination SaaS',
                'meta_title' => 'High-Concurrency AI-Proctored Online Examination System | Innovation Trove',
                'meta_description' => 'Standalone enterprise online testing SaaS platform with live AI proctoring, multi-camera feed analysis, browser lockdown, and automated grading for higher education institutions globally.',
                'short_description' => 'Standalone high-concurrency online examination platform engineered for universities, colleges, and competitive testing boards with automated AI proctoring, live camera gaze tracking, multi-face detection, and tab-switch lockdown.',
                'full_description' => '
                    <div class="project-case-study">
                        <h3>Overview</h3>
                        <p>A standalone, high-scale enterprise online testing and assessment solution engineered for universities, colleges, certification bodies, and coaching academies to conduct high-stakes assessments securely at massive concurrent volume.</p>
                        <ul class="list-style-one clearfix mb-4">
                            <li><strong>Live AI Video Proctoring:</strong> Computer vision engine detecting unauthorized persons, secondary screen reflections, and background acoustic noise.</li>
                            <li><strong>Browser & Tab Lockdown:</strong> Fullscreen enforcement preventing clipboard pasting, external tabs, or developer console inspections.</li>
                            <li><strong>Dynamic Question Shuffling:</strong> Cryptographically randomized question and option order with section timers.</li>
                            <li><strong>Instant Scorecard & Analytical Reports:</strong> Deep question-by-question metrics, difficulty weighting, and percentile rank calculations.</li>
                        </ul>
                    </div>',
            ],
            [
                'title' => 'AGXL - K-12 Online Assessment & Testing Portal',
                'slug' => 'agxl-k12-online-assessment-portal',
                'category' => 'SaaS & Enterprise ERP',
                'live_url' => 'https://www.agxl.co.in/',
                'featured_order' => 21,
                'technology' => 'Laravel, Vue.js, Adaptive Test Engine, Question Bank CMS, Student Analytics',
                'image' => 'frontend/assets/images/service/service-1.jpg',
                'thumbnail' => 'frontend/assets/images/service/service-1.jpg',
                'screenshot_img' => 'frontend/assets/images/service/service-1.jpg',
                'meta_keyword' => 'AGXL, K12 online assessment, school exam portal LKG to 12th, online mock test platform, Olympiad testing portal',
                'meta_title' => 'AGXL - K-12 Online Assessment & Exam Platform (LKG to 12th) | Innovation Trove',
                'meta_description' => 'Comprehensive online assessment and test series platform for students from LKG to 12th standard featuring interactive question formats, timed mock exams, and analytics.',
                'short_description' => 'Comprehensive online assessment and diagnostic testing portal engineered for students from LKG to Class 12th, offering gamified quizzes, Olympiad preparation, timed practice tests, and detailed progress analytics.',
                'full_description' => '
                    <div class="project-case-study">
                        <h3>Project Overview</h3>
                        <p><strong>AGXL</strong> is an advanced digital assessment platform dedicated to empowering K-12 learners (LKG through 12th Standard) with curriculum-aligned diagnostic tests, Olympiad mock evaluations, and chapter-wise concept mastery modules.</p>

                        <h3>Key Capabilities Delivered</h3>
                        <ul class="list-style-one clearfix mb-4">
                            <li><strong>Multi-Grade Diagnostic Engine (LKG to 12th):</strong> Age-appropriate interactive test interfaces ranging from visual drag-and-drop questions for early learners to complex timed MCQs for higher secondary students.</li>
                            <li><strong>Adaptive Testing & Topic Mastery:</strong> Real-time difficulty calibration highlighting strong and weak subject areas with instant post-test explanations.</li>
                            <li><strong>Automated Leaderboards & Analytics:</strong> Cohort percentile ranks, speed-per-question metrics, and printable student diagnostic scorecards.</li>
                            <li><strong>Massive Question Bank CMS:</strong> Centralized administrative management for thousands of questions across Mathematics, Science, English, and Aptitude.</li>
                        </ul>
                    </div>',
            ],
            [
                'title' => 'ITrove POS - Multi-Outlet Retail & Billing Cloud POS',
                'slug' => 'itrove-pos-enterprise-point-of-sale',
                'category' => 'SaaS & Enterprise ERP',
                'live_url' => 'https://itrovepos.com/',
                'featured_order' => 22,
                'technology' => 'Laravel, Vue.js, MySQL, Thermal Print Engine, Barcode Scanner',
                'image' => 'frontend/assets/images/resource/dashboard-8.jpg',
                'thumbnail' => 'frontend/assets/images/resource/dashboard-8.jpg',
                'screenshot_img' => 'frontend/assets/images/resource/dashboard-8.jpg',
                'meta_keyword' => 'ITrove POS, enterprise POS software, cloud point of sale, retail billing software, barcode POS system',
                'meta_title' => 'ITrove POS - Cloud Point of Sale & Multi-Store Inventory SaaS | Innovation Trove',
                'meta_description' => 'Innovation Trove\'s flagship cloud POS product supporting multi-branch retail, barcode scanning, thermal receipt printing, real-time inventory sync, and GST billing.',
                'short_description' => 'Our flagship enterprise cloud Point of Sale (POS) solution engineered for retail chains and supermarkets, featuring ultra-fast barcode checkout, offline sync, thermal receipt printing, and live stock analytics.',
                'full_description' => '
                    <div class="project-case-study">
                        <h3>Product Overview</h3>
                        <p><strong>ITrove POS</strong> is an industry-leading, high-speed cloud Point of Sale platform trusted by retail shops, supermarkets, and electronics distributors to process transactions in under 2 seconds.</p>

                        <h3>Key Features</h3>
                        <ul class="list-style-one clearfix mb-4">
                            <li><strong>Rapid Barcode Checkout:</strong> Keyboard shortcuts and scanner integration capable of processing 100+ items per minute with zero lag.</li>
                            <li><strong>Multi-Store Inventory Synchronization:</strong> Central warehouse management, inter-store transfers, and low-stock reorder triggers.</li>
                            <li><strong>Thermal Printing & Custom Invoicing:</strong> Native integration with 2-inch and 3-inch ESC/POS thermal printers as well as full A4 GST invoices.</li>
                            <li><strong>Credit / Customer Khata Ledger:</strong> Integrated customer credit management with automatic SMS payment reminders.</li>
                        </ul>
                    </div>',
            ],
            [
                'title' => 'ITrove Bills - Cloud Invoicing & Accounting Software',
                'slug' => 'itrove-bills-gst-invoicing-software',
                'category' => 'SaaS & Enterprise ERP',
                'live_url' => 'https://itrovebill.com/',
                'featured_order' => 23,
                'technology' => 'Laravel, MySQL, PDF Engine, WhatsApp API, Payment Links',
                'image' => 'frontend/assets/images/resource/dashboard-4.png',
                'thumbnail' => 'frontend/assets/images/resource/dashboard-4.png',
                'screenshot_img' => 'frontend/assets/images/resource/dashboard-4.png',
                'meta_keyword' => 'ITrove Bills, cloud invoicing software, GST billing software India, quotation maker, automated billing SaaS',
                'meta_title' => 'ITrove Bills - GST Invoicing & Accounting Software SaaS | Innovation Trove',
                'meta_description' => 'Intuitive cloud GST billing and invoice software enabling businesses to generate professional invoices, track unpaid balances, and send instant WhatsApp payment links.',
                'short_description' => 'Cloud billing and GST invoicing SaaS platform empowering SMEs and service agencies to create professional quotes, track payment receivables, and send one-click WhatsApp invoices.',
                'full_description' => '
                    <div class="project-case-study">
                        <p>Designed to simplify invoicing, tax calculation, and payment collections for businesses of all sizes with automated recurring invoices and client ledgers.</p>
                    </div>',
            ],
            [
                'title' => 'Theorie Stampers - CBR Netherlands Driving Exam SaaS',
                'slug' => 'theorie-stampers-netherlands-driving-exam-saas',
                'category' => 'SaaS & Enterprise ERP',
                'live_url' => 'https://theorie-exam.sharmahimanshu.co.in/',
                'featured_order' => 24,
                'technology' => 'Laravel, Vue.js, Stripe Subscription, Multi-Language, CBR Exam Engine',
                'image' => 'frontend/assets/images/gallery/project-9.jpg',
                'thumbnail' => 'frontend/assets/images/gallery/project-9.jpg',
                'screenshot_img' => 'frontend/assets/images/gallery/project-9.jpg',
                'meta_keyword' => 'Theorie Stampers, CBR auto theorie exam, Netherlands driving theory software, driving license mock test SaaS, subscription exam portal',
                'meta_title' => 'Theorie Stampers - Netherlands CBR Driving Exam Subscription SaaS | Innovation Trove',
                'meta_description' => 'High-performance subscription learning platform engineered for Dutch learners to master the CBR driving theory exam with real-time hazard perception scenarios.',
                'short_description' => 'Specialized European EdTech SaaS built for the Netherlands market, providing subscription-based CBR auto theory exam simulations, hazard perception tests, timed mock exams, and analytics.',
                'full_description' => '
                    <div class="project-case-study">
                        <h3>Client & Market Requirement</h3>
                        <p>The Netherlands CBR driving theory test has stringent standards with high failure rates. The client required an exact replica of the official exam interface with video hazard simulations, instant rule explanations, and tiered Stripe subscriptions.</p>

                        <h3>Solution Highlights</h3>
                        <ul class="list-style-one clearfix mb-4">
                            <li><strong>Exact CBR Exam Simulation:</strong> 1:1 replica of the official CBR interface with 3 distinct test categories (Hazard Perception, Knowledge, and Insight).</li>
                            <li><strong>Interactive Video Scenarios:</strong> High-definition video clips testing braking vs. lifting throttle response within 8 seconds.</li>
                            <li><strong>Stripe Recurring Subscriptions:</strong> Daily, weekly, and monthly pass access with automated recurring billing.</li>
                            <li><strong>Robust Admin & Question Bank CMS:</strong> Advanced administrative backend to curate thousands of questions, track completion rates, and manage user cohorts.</li>
                        </ul>
                    </div>',
            ],
            [
                'title' => 'ITrove School - Multi-Tenant School Management SaaS',
                'slug' => 'itrove-school-management-system-saas',
                'category' => 'SaaS & Enterprise ERP',
                'live_url' => 'https://itroveschool.com/',
                'featured_order' => 25,
                'technology' => 'Laravel Multi-Tenancy, Vue.js, MySQL, SMS Gateway, Biometrics',
                'image' => 'frontend/assets/images/service/service-6.jpg',
                'thumbnail' => 'frontend/assets/images/service/service-6.jpg',
                'screenshot_img' => 'frontend/assets/images/service/service-6.jpg',
                'meta_keyword' => 'ITrove School, school management SaaS, multi-tenant school ERP, student fee management, school mobile app',
                'meta_title' => 'ITrove School - Multi-Tenant School Management ERP SaaS | Innovation Trove',
                'meta_description' => 'Enterprise multi-tenant School Management SaaS powering K-12 institutions with automated admissions, fee collection, attendance, timetable, and parent portals.',
                'short_description' => 'Full-featured multi-tenant School ERP SaaS powering private and public schools with automated fee collection, biometrics attendance, grade cards, timetable scheduling, and parent communication.',
                'full_description' => '
                    <div class="project-case-study">
                        <p>Complete multi-tenant institutional operating system allowing school networks to manage multiple branches from a single unified super-admin dashboard.</p>
                    </div>',
            ],
            [
                'title' => 'ITrove Enterprise ERP Platform',
                'slug' => 'itrove-enterprise-resource-planning-erp',
                'category' => 'SaaS & Enterprise ERP',
                'live_url' => 'https://erp.sharmahimanshu.co.in/',
                'featured_order' => 26,
                'technology' => 'Laravel, PostgreSQL, Redis, REST APIs, Chart.js',
                'image' => 'frontend/assets/images/resource/dashboard-5.png',
                'thumbnail' => 'frontend/assets/images/resource/dashboard-5.png',
                'screenshot_img' => 'frontend/assets/images/resource/dashboard-5.png',
                'meta_keyword' => 'ITrove ERP, custom enterprise ERP, manufacturing ERP, supply chain ERP software, business management platform',
                'meta_title' => 'ITrove Enterprise ERP Platform | Innovation Trove',
                'meta_description' => 'Enterprise Resource Planning platform integrating procurement, inventory control, sales pipelines, manufacturing work-orders, and financial accounting.',
                'short_description' => 'Modular enterprise resource planning solution uniting supply chain procurement, warehouse inventory, manufacturing work orders, billing, and executive financial dashboards.',
                'full_description' => '
                    <div class="project-case-study">
                        <p>Architected for growing mid-market enterprises needing tailored operational workflows that off-the-shelf software cannot accommodate.</p>
                    </div>',
            ],
            [
                'title' => 'Recruit Pro - AI Applicant Tracking & Hiring SaaS',
                'slug' => 'recruit-pro-applicant-tracking-system',
                'category' => 'SaaS & Enterprise ERP',
                'live_url' => 'https://midnightblue-salamander-191076.hostingersite.com/',
                'featured_order' => 27,
                'technology' => 'Laravel, Vue.js, MySQL, Resume Parser API, Kanban Pipeline',
                'image' => 'frontend/assets/images/resource/tab-1.png',
                'thumbnail' => 'frontend/assets/images/resource/tab-1.png',
                'screenshot_img' => 'frontend/assets/images/resource/tab-1.png',
                'meta_keyword' => 'Recruit Pro, applicant tracking system, ATS software, hiring workflow SaaS, recruitment pipeline',
                'meta_title' => 'Recruit Pro - Modern Applicant Tracking System (ATS) | Innovation Trove',
                'meta_description' => 'End-to-end recruitment platform with visual drag-and-drop hiring pipelines, automated email sequences, interview scheduling, and scorecard evaluations.',
                'short_description' => 'Modern talent acquisition and ATS SaaS featuring interactive drag-and-drop Kanban hiring stages, resume parsing, candidate scoring cards, and collaborative hiring team evaluations.',
                'full_description' => '
                    <div class="project-case-study">
                        <p>Streamlines the entire hiring cycle from job posting distribution to offer letter generation, cutting time-to-hire by 45%.</p>
                    </div>',
            ],
            [
                'title' => 'ITrove LMS - Enterprise Learning Management System',
                'slug' => 'itrove-lms-learning-management-system',
                'category' => 'SaaS & Enterprise ERP',
                'live_url' => 'https://dodgerblue-spoonbill-159471.hostingersite.com/',
                'featured_order' => 28,
                'technology' => 'Laravel, Video CDN, Quiz Engine, Certificate Generator',
                'image' => 'frontend/assets/images/gallery/project-13.jpg',
                'thumbnail' => 'frontend/assets/images/gallery/project-13.jpg',
                'screenshot_img' => 'frontend/assets/images/gallery/project-13.jpg',
                'meta_keyword' => 'ITrove LMS, cloud LMS software, learning management platform, corporate training portal, course creator SaaS',
                'meta_title' => 'ITrove LMS - Cloud Learning Management System | Innovation Trove',
                'meta_description' => 'Scalable LMS platform supporting interactive video lessons, drip content schedules, timed quizzes, student progress tracking, and verifiable certificates.',
                'short_description' => 'Comprehensive online academy and enterprise training LMS with modular course curriculums, interactive video streaming, student quiz assessments, and auto-generated completion certificates.',
                'full_description' => '<p>Built for educational institutes and corporate training squads to deliver structured digital learning at scale.</p>',
            ],
            [
                'title' => 'ITrove Cloud Hotel & Property Management (PMS)',
                'slug' => 'hotel-management-system-pms',
                'category' => 'SaaS & Enterprise ERP',
                'live_url' => 'https://lightslategray-camel-862642.hostingersite.com/',
                'featured_order' => 29,
                'technology' => 'Laravel, MySQL, Booking Engine, Room Inventory Matrix',
                'image' => 'frontend/assets/images/gallery/project-8.jpg',
                'thumbnail' => 'frontend/assets/images/gallery/project-8.jpg',
                'screenshot_img' => 'frontend/assets/images/gallery/project-8.jpg',
                'meta_keyword' => 'hotel PMS software, hotel management system, room reservation software, front desk hotel billing',
                'meta_title' => 'Hotel Management & Property Reservation System (PMS) | Innovation Trove',
                'meta_description' => 'Complete cloud property management system (PMS) for hotels, resorts, and lodges featuring room grid reservations, guest folios, and housekeeping management.',
                'short_description' => 'All-in-one hotel PMS solution providing front-desk check-in/check-out, room availability calendars, restaurant billing integration, and automated guest invoices.',
                'full_description' => '<p>Equips hoteliers with live occupancy insights, channel manager integrations, and automated guest checkout folios.</p>',
            ],
            [
                'title' => 'Restaurant Management & Smart POS System',
                'slug' => 'restaurant-management-system-pos',
                'category' => 'SaaS & Enterprise ERP',
                'live_url' => 'https://cornflowerblue-hedgehog-596148.hostingersite.com/admin/auth/login',
                'featured_order' => 30,
                'technology' => 'Laravel, Vue.js, Kitchen Order Ticket (KOT), Table Layout',
                'image' => 'frontend/assets/images/service/service-5.jpg',
                'thumbnail' => 'frontend/assets/images/service/service-5.jpg',
                'screenshot_img' => 'frontend/assets/images/service/service-5.jpg',
                'meta_keyword' => 'restaurant management system, restaurant POS software, KOT billing software, table management restaurant',
                'meta_title' => 'Restaurant Management & Smart Kitchen POS Suite | Innovation Trove',
                'meta_description' => 'Smart restaurant software featuring visual table floorplans, Kitchen Order Ticket (KOT) routing, waiter tablet ordering, and cashier settlement.',
                'short_description' => 'Cloud restaurant billing and operations platform featuring visual table mapping, instantaneous Kitchen Order Ticket (KOT) printing, menu modifier add-ons, and daily sales analytics.',
                'full_description' => '<p>Streamlines dine-in table turnover, takeaway orders, and kitchen coordination with zero order misplacement.</p>',
            ],
            [
                'title' => 'Bihar Workforce & Skill Training Portal',
                'slug' => 'training-portal-bihar-workforce',
                'category' => 'SaaS & Enterprise ERP',
                'live_url' => 'https://mediumseagreen-mosquito-345683.hostingersite.com/',
                'featured_order' => 31,
                'technology' => 'Laravel, MySQL, Trainee Biometrics Sync, Certificate Engine',
                'image' => 'frontend/assets/images/service/service-2.jpg',
                'thumbnail' => 'frontend/assets/images/service/service-2.jpg',
                'screenshot_img' => 'frontend/assets/images/service/service-2.jpg',
                'meta_keyword' => 'training portal Bihar, skill development software, government training portal, vocational training ERP',
                'meta_title' => 'Bihar Workforce & Skill Training Management Portal | Innovation Trove',
                'meta_description' => 'State training portal tracking student candidate enrollments, vocational batch schedules, attendance logs, and certified skill graduations.',
                'short_description' => 'Statewide skill development and vocational training management portal managing student enrollments, center batch timetables, attendance compliance, and certification exams.',
                'full_description' => '<p>Built to empower vocational training programs with transparent tracking and digital verification of trained candidates.</p>',
            ],
            [
                'title' => 'ITrove HRM & Automated Payroll Platform',
                'slug' => 'itrove-hrm-and-automated-payroll',
                'category' => 'SaaS & Enterprise ERP',
                'live_url' => null,
                'featured_order' => 32,
                'technology' => 'Laravel, MySQL, Biometrics API, Tax Engine, Payslip Generator',
                'image' => 'frontend/assets/images/service/service-4.jpg',
                'thumbnail' => 'frontend/assets/images/service/service-4.jpg',
                'screenshot_img' => 'frontend/assets/images/service/service-4.jpg',
                'meta_keyword' => 'ITrove HRM, payroll software, HRMS software, employee attendance biometrics, automated salary slip',
                'meta_title' => 'ITrove HRM & Automated Payroll Management System | Innovation Trove',
                'meta_description' => 'Enterprise human resource management and payroll solution automating employee leaves, biometric clock-ins, PF/ESI tax compliance, and one-click salary payslips.',
                'short_description' => 'Enterprise HR and payroll management software automating employee onboarding, biometrics attendance synchronization, leave approval hierarchies, and compliant salary disbursements.',
                'full_description' => '<p>Eliminates monthly payroll calculation errors with automated statutory tax deductions and instant PDF salary slips.</p>',
            ],

            // ==========================================
            // 4. MOBILE APPS & SMART AUTOMATION
            // ==========================================
            [
                'title' => 'NGE Parking - Smart Automated IoT Parking Platform',
                'slug' => 'nge-parking-smart-iot-mobile-apps',
                'category' => 'Mobile Apps & Smart Automation',
                'live_url' => 'https://ngeparking.com/',
                'featured_order' => 33,
                'technology' => 'React Native, Node.js, ANPR Camera Vision, IoT Barrier Gates, Android & iOS',
                'image' => 'frontend/assets/images/gallery/project-6.jpg',
                'thumbnail' => 'frontend/assets/images/gallery/project-6.jpg',
                'screenshot_img' => 'frontend/assets/images/gallery/project-6.jpg',
                'meta_keyword' => 'NGE Parking, smart parking app, ANPR automated parking, IoT barrier gate, parking guard app iOS Android',
                'meta_title' => 'NGE Parking - Smart Automated Parking IoT & Mobile App Platform | Innovation Trove',
                'meta_description' => 'Next-gen smart parking system with iOS & Android Guard and Driver apps, automated ANPR number-plate recognition, camera boom-barrier triggers, and cashless toll payments.',
                'short_description' => 'Smart IoT parking automation platform with native iOS/Android Driver and Guard apps, automated Automatic Number Plate Recognition (ANPR) camera check-in, and cashless mobile checkout.',
                'full_description' => '
                    <div class="project-case-study">
                        <h3>System Architecture</h3>
                        <p><strong>NGE Parking</strong> transforms commercial parking lots into fully automated, frictionless spaces via IoT and mobile applications.</p>
                        <ul class="list-style-one clearfix mb-4">
                            <li><strong>ANPR Camera Automation:</strong> AI cameras read vehicle registration numbers at entry, triggering boom barriers automatically without manual ticketing.</li>
                            <li><strong>Driver & Guard Mobile Apps:</strong> Dedicated iOS & Android apps for spot reservations, gate navigation, and guard violation logs.</li>
                            <li><strong>Dynamic Tiered Pricing:</strong> Peak-hour dynamic tariff engine with automated in-app digital wallet deductions.</li>
                        </ul>
                    </div>',
            ],
            [
                'title' => 'Baranwal Alankar Mandir (BAM) - Live Bullion Gold App',
                'slug' => 'baranwal-alankar-mandir-bam-jewellery-app',
                'category' => 'Mobile Apps & Smart Automation',
                'live_url' => 'https://bam.innovationtrove.in/',
                'featured_order' => 34,
                'technology' => 'Flutter, Laravel Backend, Live Gold API WebSockets, Payment Gateway',
                'image' => 'frontend/assets/images/resource/about-2.png',
                'thumbnail' => 'frontend/assets/images/resource/about-2.png',
                'screenshot_img' => 'frontend/assets/images/resource/about-2.png',
                'meta_keyword' => 'BAM jewellery app, live gold rate app, Baranwal Alankar Mandir, buy gold online app, jewellery eCommerce app',
                'meta_title' => 'Baranwal Alankar Mandir (BAM) Live Gold Rate & Jewellery App | Innovation Trove',
                'meta_description' => 'Mobile commerce application for premium jewellery retailer featuring live bullion market rate tickers, custom gold weight calculations, and secure online ordering.',
                'short_description' => 'Specialized luxury jewellery mobile app featuring real-time live gold and silver market rate streaming, weight-based dynamic price calculations, and gold savings scheme management.',
                'full_description' => '<p>Enables customers to purchase certified gold and diamond jewellery at exact live bullion market rates with 100% price transparency.</p>',
            ],
            [
                'title' => 'Milli Cab - On-Demand Ride Sharing & Fleet Dispatch',
                'slug' => 'milli-cab-ride-sharing-app-dispatch',
                'category' => 'Mobile Apps & Smart Automation',
                'live_url' => null,
                'featured_order' => 35,
                'technology' => 'React Native, Node.js, WebSockets, Google Maps SDK, Stripe / UPI',
                'image' => 'frontend/assets/images/service/service-7.png',
                'thumbnail' => 'frontend/assets/images/service/service-7.png',
                'screenshot_img' => 'frontend/assets/images/service/service-7.png',
                'meta_keyword' => 'Milli Cab, taxi booking app development, on demand ride sharing, taxi dispatcher admin panel, car sharing app',
                'meta_title' => 'Milli Cab - On-Demand Ride Sharing & Fleet Dispatch Platform | Innovation Trove',
                'meta_description' => 'Complete ride-hailing and car-sharing platform featuring Passenger & Driver mobile apps, real-time GPS telemetry, surge pricing, and live dispatcher controls.',
                'short_description' => 'On-demand taxi booking and car-sharing platform featuring native mobile apps for riders and drivers, live turn-by-turn navigation, automated fare calculation, and a centralized fleet dispatch panel.',
                'full_description' => '<p>Built with high-frequency WebSocket tracking, intelligent nearest-driver dispatch algorithms, and instant emergency SOS triggers.</p>',
            ],
            [
                'title' => 'ShankhFleet - Heavy Truck & Logistics Telematics ERP',
                'slug' => 'shankhfleet-truck-management-logistics-erp',
                'category' => 'Mobile Apps & Smart Automation',
                'live_url' => null,
                'featured_order' => 36,
                'technology' => 'Laravel, React, GPS Telematics API, Fuel Sensor Integration, PostgreSQL',
                'image' => 'frontend/assets/images/service/service-8.png',
                'thumbnail' => 'frontend/assets/images/service/service-8.png',
                'screenshot_img' => 'frontend/assets/images/service/service-8.png',
                'meta_keyword' => 'ShankhFleet, truck management ERP, fleet management software, logistics ERP, GPS vehicle tracking',
                'meta_title' => 'ShankhFleet - Heavy Fleet & Logistics Management ERP | Innovation Trove',
                'meta_description' => 'Enterprise fleet management software featuring live GPS trip tracking, fuel theft monitoring, driver trip settlements, and preventative vehicle maintenance scheduling.',
                'short_description' => 'End-to-end heavy truck and logistics management ERP managing commercial fleet dispatches, live GPS route geofencing, fuel sensor telemetry, and trip profitability analytics.',
                'full_description' => '<p>Delivers complete visibility over long-haul logistics fleets, reducing empty miles and eliminating unauthorized fuel siphoning.</p>',
            ],

            // ==========================================
            // 5. E-COMMERCE & DIGITAL PLATFORMS
            // ==========================================
            [
                'title' => 'ITrove Multi-Restaurant Food Delivery Platform',
                'slug' => 'itrove-food-delivery-multi-vendor-system',
                'category' => 'E-Commerce & Digital Platforms',
                'live_url' => 'https://food.sharmahimanshu.co.in/',
                'featured_order' => 37,
                'technology' => 'Laravel, Vue.js, Google Maps Routing, Driver GPS App, Live Order Tracking',
                'image' => 'frontend/assets/images/service/service-9.png',
                'thumbnail' => 'frontend/assets/images/service/service-9.png',
                'screenshot_img' => 'frontend/assets/images/service/service-9.png',
                'meta_keyword' => 'food delivery software, multi restaurant food delivery system, online food ordering script, Swiggy clone app, Zomato clone',
                'meta_title' => 'ITrove Food Delivery & Multi-Restaurant Cloud Platform | Innovation Trove',
                'meta_description' => 'Scalable multi-vendor food delivery ecosystem featuring customer ordering apps, restaurant merchant dashboards, and driver live GPS route navigation.',
                'short_description' => 'High-scale multi-restaurant food delivery ecosystem featuring customer ordering web & mobile apps, merchant kitchen portals, automated delivery driver dispatch, and real-time GPS map tracking.',
                'full_description' => '
                    <div class="project-case-study">
                        <p>Complete food delivery platform with lightning-fast menu search, customizable food addons, automated rider assignment, and customer live map tracking.</p>
                    </div>',
            ],
            [
                'title' => 'Throm Online - Multi-Vendor Marketplace Ecosystem',
                'slug' => 'throm-online-multi-vendor-marketplace',
                'category' => 'E-Commerce & Digital Platforms',
                'live_url' => 'http://thromonline.com/',
                'featured_order' => 38,
                'technology' => 'Laravel, Vue.js, Multi-Vendor Engine, Payment Gateway, Shipping API',
                'image' => 'frontend/assets/images/resource/screen-3.png',
                'thumbnail' => 'frontend/assets/images/resource/screen-3.png',
                'screenshot_img' => 'frontend/assets/images/resource/screen-3.png',
                'meta_keyword' => 'Throm Online, multi vendor ecommerce, online shopping marketplace, cross border ecommerce, marketplace app',
                'meta_title' => 'Throm Online - Multi-Vendor Shopping Marketplace | Innovation Trove',
                'meta_description' => 'All-in-one digital shopping marketplace connecting verified merchants with consumers across categories including fashion, electronics, and daily essentials.',
                'short_description' => 'All-in-one multi-vendor eCommerce shopping marketplace featuring dedicated merchant store portals, automated vendor commission payouts, shipping label generation, and customer reviews.',
                'full_description' => '<p>Built to handle high product catalog volumes, multi-currency checkouts, and seamless vendor inventory syncing.</p>',
            ],
            [
                'title' => 'ITrove E-Commerce - Enterprise Digital Retail Platform',
                'slug' => 'itrove-ecommerce-enterprise-storefront',
                'category' => 'E-Commerce & Digital Platforms',
                'live_url' => 'https://ecommerce.innovationtrove.in/',
                'featured_order' => 39,
                'technology' => 'Laravel, Tailwind CSS, Redis Cache, Razorpay / Stripe, ElasticSearch',
                'image' => 'frontend/assets/images/resource/screen-5.png',
                'thumbnail' => 'frontend/assets/images/resource/screen-5.png',
                'screenshot_img' => 'frontend/assets/images/resource/screen-5.png',
                'meta_keyword' => 'ITrove ecommerce, custom ecommerce development, online shopping store, Laravel ecommerce, high speed storefront',
                'meta_title' => 'ITrove E-Commerce - Enterprise Digital Storefront | Innovation Trove',
                'meta_description' => 'Ultra-fast headless digital commerce storefront engineered for high conversion rates, sub-second product searching, dynamic discounts, and frictionless checkout.',
                'short_description' => 'High-conversion enterprise e-commerce platform with sub-second catalog search, faceted category filters, abandoned cart recovery, and omnichannel payment processing.',
                'full_description' => '<p>Engineered to deliver exceptional mobile conversion rates, ultra-low cart abandonment, and robust inventory management.</p>',
            ],
            [
                'title' => 'Meencat PC - Custom Gaming Rig & Hardware E-Store',
                'slug' => 'meencat-pc-custom-rig-builder-store',
                'category' => 'E-Commerce & Digital Platforms',
                'live_url' => 'https://www.meencat.com/',
                'featured_order' => 40,
                'technology' => 'Next.js, Node.js, Stripe, Custom PC Configurator Compatibility Engine',
                'image' => 'frontend/assets/images/resource/skills-1.png',
                'thumbnail' => 'frontend/assets/images/resource/skills-1.png',
                'screenshot_img' => 'frontend/assets/images/resource/skills-1.png',
                'meta_keyword' => 'Meencat PC, custom PC builder, gaming PC store, PC hardware ecommerce, computer parts online',
                'meta_title' => 'Meencat PC - Custom PC Builder & Gaming Hardware Platform | Innovation Trove',
                'meta_description' => 'Interactive custom gaming PC builder and computer component e-commerce store with automated hardware socket and wattage compatibility checks.',
                'short_description' => 'Enthusiast gaming hardware and custom PC builder platform featuring dynamic hardware compatibility checkers, live wattage calculators, and high-performance component shopping.',
                'full_description' => '
                    <div class="project-case-study">
                        <p>Specialized configurator engine ensuring that motherboard sockets, CPU coolers, RAM clearances, and PSU wattages match seamlessly before checkout.</p>
                    </div>',
            ],
            [
                'title' => 'Pizza Paradise - Online Ordering & Kitchen Display (KDS)',
                'slug' => 'pizza-paradise-online-ordering-system',
                'category' => 'E-Commerce & Digital Platforms',
                'live_url' => 'http://pizzaparadise.co.in/',
                'featured_order' => 41,
                'technology' => 'Laravel, JavaScript, Custom Pizza Crust Builder, WebSockets KDS',
                'image' => 'frontend/assets/images/gallery/project-7.jpg',
                'thumbnail' => 'frontend/assets/images/gallery/project-7.jpg',
                'screenshot_img' => 'frontend/assets/images/gallery/project-7.jpg',
                'meta_keyword' => 'Pizza Paradise, pizza ordering website, pizza builder software, online pizzeria menu, restaurant KDS system',
                'meta_title' => 'Pizza Paradise - Online Ordering & Custom Crust Builder | Innovation Trove',
                'meta_description' => 'Interactive digital pizzeria ordering website featuring custom toppings builder, real-time kitchen order dispatch (KDS), and contactless takeaway.',
                'short_description' => 'Digital ordering web platform for Pizza Paradise featuring an interactive visual pizza topping builder, half-and-half crust selectors, live order preparation countdowns, and kitchen display routing.',
                'full_description' => '<p>Interactive culinary web design driving higher average order value through visual crust and topping add-ons.</p>',
            ],
            [
                'title' => 'JSF Academy - Sports Coaching & Athletic Management',
                'slug' => 'jsf-academy-sports-management-portal',
                'category' => 'E-Commerce & Digital Platforms',
                'live_url' => 'https://jsf.innovationtrove.in/',
                'featured_order' => 42,
                'technology' => 'Laravel, Bootstrap, Member Booking Calendar, Razorpay Gateway',
                'image' => 'frontend/assets/images/resource/vector-1.png',
                'thumbnail' => 'frontend/assets/images/resource/vector-1.png',
                'screenshot_img' => 'frontend/assets/images/resource/vector-1.png',
                'meta_keyword' => 'JSF Academy, sports academy software, athletic coaching portal, fitness club membership software',
                'meta_title' => 'JSF Academy - Sports Training & Athletic Membership Portal | Innovation Trove',
                'meta_description' => 'Sports training and academy platform managing trainee registrations, coaching batch schedules, tournament events, and fee subscriptions.',
                'short_description' => 'Sports and athletic coaching academy management platform managing student athlete registrations, coaching slot bookings, batch timetables, and recurring membership payments.',
                'full_description' => '<p>Equipped with athlete attendance rosters, tournament leaderboard updates, and coach evaluation metrics.</p>',
            ],
            [
                'title' => 'Mounteko - High-Impact Brand Showcase Platform',
                'slug' => 'mounteko-brand-design-showcase',
                'category' => 'E-Commerce & Digital Platforms',
                'live_url' => 'https://www.mounteko.com/',
                'featured_order' => 43,
                'technology' => 'HTML5, Modern CSS Animations, JavaScript, Responsive Design',
                'image' => 'frontend/assets/images/resource/illestration-3.png',
                'thumbnail' => 'frontend/assets/images/resource/illestration-3.png',
                'screenshot_img' => 'frontend/assets/images/resource/illestration-3.png',
                'meta_keyword' => 'Mounteko, creative brand website, corporate brand showcase, modern web design agency',
                'meta_title' => 'Mounteko - High-Impact Brand Design & Corporate Showcase | Innovation Trove',
                'meta_description' => 'Modern, visually captivating digital brand showcase developed for Mounteko featuring bespoke interactive transitions and mobile-first aesthetics.',
                'short_description' => 'Visually stunning, high-performance brand platform built for Mounteko with micro-interactions, smooth scrolling aesthetics, and lead conversion funnels.',
                'full_description' => '<p>Crafted with ultra-modern UI design to establish high market credibility and elevate brand positioning.</p>',
            ],
            [
                'title' => 'Innovation Trove - Official Enterprise Corporate Portal',
                'slug' => 'innovation-trove-official-corporate-portal',
                'category' => 'E-Commerce & Digital Platforms',
                'live_url' => 'https://innovationtrove.in/',
                'featured_order' => 44,
                'technology' => 'Laravel, Blade, Vanilla CSS, Schema JSON-LD, SEO Engine',
                'image' => 'frontend/assets/images/resource/illestration-1.png',
                'thumbnail' => 'frontend/assets/images/resource/illestration-1.png',
                'screenshot_img' => 'frontend/assets/images/resource/illestration-1.png',
                'meta_keyword' => 'Innovation Trove, software development company Jaigaon Patna, enterprise software engineering, hire Laravel developers',
                'meta_title' => 'Innovation Trove - Official Enterprise Software & Web Development Portal',
                'meta_description' => 'Flagship corporate digital platform for Innovation Trove LLP showcasing enterprise engineering capabilities, full stack portfolio case studies, and quote discovery engines.',
                'short_description' => 'The official enterprise web portal for Innovation Trove LLP, architected with rich Silicon Valley aesthetics, instant quote estimators, verified client case studies, and advanced SEO optimization.',
                'full_description' => '<p>Showcases Innovation Trove’s full engineering capabilities across SaaS platforms, university ERPs, mobile apps, and dedicated agile engineering squads.</p>',
            ],
            [
                'title' => 'Himanshu Sharma - Full Stack Software Architect Portfolio',
                'slug' => 'himanshu-sharma-architect-portfolio',
                'category' => 'E-Commerce & Digital Platforms',
                'live_url' => 'https://sharmahimanshu.co.in/',
                'featured_order' => 45,
                'technology' => 'HTML5, Modern CSS3, JavaScript, Responsive Dark UI',
                'image' => 'frontend/assets/images/resource/about-1.png',
                'thumbnail' => 'frontend/assets/images/resource/about-1.png',
                'screenshot_img' => 'frontend/assets/images/resource/about-1.png',
                'meta_keyword' => 'Himanshu Sharma portfolio, full stack software engineer, Laravel React developer, software architect portfolio',
                'meta_title' => 'Himanshu Sharma - Software Architect & Lead Engineer Portfolio | Innovation Trove',
                'meta_description' => 'Personal technical portfolio of Himanshu Sharma, software architect & technology leader showcasing production deployments and full stack engineering expertise.',
                'short_description' => 'Personal engineering portfolio of software architect Himanshu Sharma, detailing high-scale production systems, cloud architectures, and open-source contributions.',
                'full_description' => '<p>Highlights complex backend engineering feats, database query optimization, and high-concurrency architecture designs.</p>',
            ],
            [
                'title' => 'Manish - Creative Frontend Engineer Portfolio',
                'slug' => 'manish-frontend-engineer-portfolio',
                'category' => 'E-Commerce & Digital Platforms',
                'live_url' => null,
                'featured_order' => 46,
                'technology' => 'React, Tailwind CSS, Framer Motion, Web Animations',
                'image' => 'frontend/assets/images/resource/about-3.png',
                'thumbnail' => 'frontend/assets/images/resource/about-3.png',
                'screenshot_img' => 'frontend/assets/images/resource/about-3.png',
                'meta_keyword' => 'Manish portfolio, frontend developer portfolio, UI UX engineer, React developer',
                'meta_title' => 'Manish - Creative Frontend Engineer Portfolio | Innovation Trove',
                'meta_description' => 'Interactive developer portfolio showcasing frontend architecture, modern component libraries, and interactive design prototypes.',
                'short_description' => 'Interactive frontend developer portfolio highlighting responsive web interfaces, modern component libraries, and dynamic animation architectures.',
                'full_description' => '<p>Demonstrating high-precision UI engineering, micro-interactions, and accessible frontend interfaces.</p>',
            ],
            [
                'title' => 'DFREE India - Digital Initiative & Community Platform',
                'slug' => 'dfree-india-digital-community-platform',
                'category' => 'E-Commerce & Digital Platforms',
                'live_url' => null,
                'featured_order' => 47,
                'technology' => 'Laravel, MySQL, Community Forum Engine, Content Management',
                'image' => 'frontend/assets/images/resource/illestration-4.png',
                'thumbnail' => 'frontend/assets/images/resource/illestration-4.png',
                'screenshot_img' => 'frontend/assets/images/resource/illestration-4.png',
                'meta_keyword' => 'DFREE India, digital platform, social community software, awareness portal',
                'meta_title' => 'DFREE India - Digital Community & Awareness Platform | Innovation Trove',
                'meta_description' => 'Digital community and social engagement portal engineered for DFREE India with resource publications and member volunteer onboarding.',
                'short_description' => 'Digital community outreach and initiative web application managing social awareness campaigns, volunteer onboardings, and educational resources across India.',
                'full_description' => '<p>Engineered to foster community collaboration, transparent awareness drives, and public engagement.</p>',
            ],
        ];

        foreach ($works as $work) {
            Work::create($work);
        }
    }
}
