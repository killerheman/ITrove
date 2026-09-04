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
        DB::table('services')->truncate();

        $services = [
            [
                'title' => 'Custom Software Development',
                'slug' => 'custom-software-development',
                'fa_icon' => 'fas fa-code',
                'pic' => 'services/service-1.png',
                'thumbnail_image' => 'services/service-1.png',
                'thumbnail_img' => 'services/service-1.png',
                'sequence' => 1,
                'meta_title' => 'Custom Software Development Company | Bespoke Solutions - Innovation Trove',
                'meta_keyword' => 'custom software development company, bespoke software solutions, enterprise software development, offshore development team, hire software developers',
                'meta_description' => 'Scalable, secure custom software development services for startups and enterprises across the USA, UK, Europe, and India. Agile sprints, transparent delivery.',
                'description' => 'Off-the-shelf software rarely fits intricate business models. We engineer robust, scalable bespoke software and enterprise platforms tailored to your exact operational workflows.',
                'full_description' => '
                    <div class="service-detail-body">
                        <h3>Purpose-Built Software Designed to Accelerate Your Enterprise</h3>
                        <p>When off-the-shelf software forces your team into rigid workarounds, customized digital architecture becomes your most powerful competitive edge. At <strong>Innovation Trove</strong>, we design, architect, and engineer bespoke software solutions that automate complex business processes, eliminate data silos, and scale seamlessly with your revenue growth.</p>
                        
                        <h4>What We Build in Custom Software</h4>
                        <ul class="list-style-one clearfix mb-4">
                            <li><strong>Enterprise Workflow Automation:</strong> High-throughput systems that replace fragmented spreadsheets and manual bottlenecks with automated, role-governed workflows.</li>
                            <li><strong>Multi-Tenant SaaS Architectures:</strong> Secure, cloud-native Software-as-a-Service applications engineered with isolated database tenancy, Stripe/PayPal subscription billing, and sub-second query performance.</li>
                            <li><strong>Legacy Modernization & Cloud Re-Engineering:</strong> Refactoring aging monolithic systems into lightweight, containerized microservices without operational downtime.</li>
                            <li><strong>Bespoke Internal Tools & Portals:</strong> Centralized administration dashboards, employee self-service portals, and vendor management systems built with Laravel, React, and Vue.</li>
                        </ul>

                        <h4>Our Technical Stack & Engineering Standards</h4>
                        <p>We believe in clean code, automated testing, and future-proof architectural frameworks. Our senior software engineering team specializes in:</p>
                        <ul class="list-style-one clearfix mb-4">
                            <li><strong>Backend Technologies:</strong> Laravel (PHP 8+), Node.js, Python (Django/FastAPI), Go</li>
                            <li><strong>Frontend Frameworks:</strong> React.js, Next.js, Vue.js, Alpine.js, Tailwind CSS</li>
                            <li><strong>Databases & Caching:</strong> PostgreSQL, MySQL, Redis, MongoDB, Elasticsearch</li>
                            <li><strong>Cloud & DevOps:</strong> AWS (EC2, S3, RDS, Lambda), Docker, GitHub Actions CI/CD</li>
                        </ul>

                        <h4>Why Global Businesses Partner with Innovation Trove</h4>
                        <p>Whether you are a funded US/European startup requiring an agile development squad or an established enterprise across India seeking digital transformation, our engagement models provide total flexibility:</p>
                        <ul class="list-style-one clearfix">
                            <li><strong>100% Intellectual Property Ownership:</strong> You own complete source code, repository rights, and architecture documentation from day one.</li>
                            <li><strong>Transparent Agile Sprints:</strong> Weekly sprint demos, Jira/Trello boards, and real-time Slack/Teams communication across international time zones.</li>
                            <li><strong>Guaranteed Code Quality & Security:</strong> Strict adherence to OWASP Top 10 security guidelines, automated unit tests, and thorough code reviews prior to staging release.</li>
                        </ul>
                    </div>',
            ],
            [
                'title' => 'Web Application & SaaS Development',
                'slug' => 'web-application-and-saas-development',
                'fa_icon' => 'fas fa-laptop-code',
                'pic' => 'services/service-2.png',
                'thumbnail_image' => 'services/service-2.png',
                'thumbnail_img' => 'services/service-2.png',
                'sequence' => 2,
                'meta_title' => 'Web Application & SaaS Development Services - Innovation Trove',
                'meta_keyword' => 'web application development, SaaS development company, custom web apps, Laravel web development, React SaaS development',
                'meta_description' => 'Fast, scalable, secure web applications and SaaS platforms built with Laravel, React, and Vue. Sub-second performance and seamless international user experience.',
                'description' => 'Modern, high-performance web applications and cloud-native SaaS platforms engineered with intuitive UI/UX, bulletproof authentication, and sub-second load times.',
                'full_description' => '
                    <div class="service-detail-body">
                        <h3>High-Performance Web Applications Built for Scale</h3>
                        <p>A web application is the primary touchpoint between your business, customers, and distributed teams. At <strong>Innovation Trove</strong>, we build web applications that combine aesthetic elegance with bulletproof backend architecture, delivering instantaneous page loads, intuitive navigation, and flawless security on every device.</p>
                        
                        <h4>Our Web Application Capabilities</h4>
                        <ul class="list-style-one clearfix mb-4">
                            <li><strong>Custom SaaS Platforms:</strong> Complete subscription architectures with tiered pricing, self-serve onboarding, automated billing, and interactive analytics dashboards.</li>
                            <li><strong>Customer & Partner Portals:</strong> Secure portals featuring granular role-based access control (RBAC), real-time notifications, and document repositories.</li>
                            <li><strong>Progressive Web Apps (PWAs):</strong> Fast, offline-capable web apps providing native mobile-like experiences directly in the browser.</li>
                            <li><strong>Real-Time Collaboration Tools:</strong> High-concurrency applications utilizing WebSockets and Redis pub/sub for instant messaging, live updates, and data sync.</li>
                        </ul>

                        <h4>Architecture Built for Global Traffic</h4>
                        <p>We architect web applications to handle traffic surges without degradation. Leveraging server-side caching, database indexing, and CDN asset delivery, our applications maintain consistent sub-second response times across US, UK, European, and Asian geographies.</p>
                    </div>',
            ],
            [
                'title' => 'Mobile App Development (iOS & Android)',
                'slug' => 'mobile-app-development',
                'fa_icon' => 'fas fa-mobile-alt',
                'pic' => 'services/service-3.png',
                'thumbnail_image' => 'services/service-3.png',
                'thumbnail_img' => 'services/service-3.png',
                'sequence' => 3,
                'meta_title' => 'Mobile App Development Services | iOS & Android - Innovation Trove',
                'meta_keyword' => 'mobile app development company, iOS app development, Android app developers, Flutter app development, cross-platform mobile apps',
                'meta_description' => 'Feature-rich native and cross-platform mobile applications for iOS and Android using Flutter and React Native. Smooth animations, offline support, and high security.',
                'description' => 'Transform your mobile vision into engaging, feature-rich iOS and Android apps built with Flutter and React Native. Seamless animations, offline caching, and instant responsiveness.',
                'full_description' => '
                    <div class="service-detail-body">
                        <h3>Engaging Mobile Experiences That Drive Customer Retention</h3>
                        <p>Mobile users demand fluid performance, intuitive gestures, and instant responsiveness. We engineer mobile applications that feel natural, run reliably on thousands of device form factors, and leverage native hardware capabilities to deliver superior user experiences.</p>
                        
                        <h4>Mobile Engineering Expertise</h4>
                        <ul class="list-style-one clearfix mb-4">
                            <li><strong>Cross-Platform Flutter & React Native:</strong> Deliver single-codebase iOS and Android apps that match native performance while cutting development time and maintenance costs by up to 40%.</li>
                            <li><strong>Native iOS & Android Engineering:</strong> Dedicated Swift and Kotlin engineering for hardware-intensive applications requiring specialized camera, Bluetooth, or GPU processing.</li>
                            <li><strong>Offline-First Architecture:</strong> Local SQLite/Realm database caching enabling uninterrupted app functionality during network drops, with automatic cloud reconciliation upon reconnection.</li>
                            <li><strong>App Store & Play Store Compliance:</strong> Full lifecycle deployment management, from sandboxing and beta testing to store review approvals and ongoing version updates.</li>
                        </ul>
                    </div>',
            ],
            [
                'title' => 'Enterprise ERP & CRM Solutions',
                'slug' => 'enterprise-erp-crm-solutions',
                'fa_icon' => 'fas fa-database',
                'pic' => 'services/service-4.png',
                'thumbnail_image' => 'services/service-4.png',
                'thumbnail_img' => 'services/service-4.png',
                'sequence' => 4,
                'meta_title' => 'Custom ERP & CRM Development Services - Innovation Trove',
                'meta_keyword' => 'custom ERP development, enterprise CRM software, supply chain ERP, business process management, inventory management software',
                'meta_description' => 'Unify multi-department operations, supply chain, inventory, automated billing, and customer intelligence with tailor-made ERP and CRM software.',
                'description' => 'Centralize operations, supply chains, sales pipelines, and customer lifecycle intelligence with custom-tailored ERP and CRM platforms designed around your exact workflows.',
                'full_description' => '
                    <div class="service-detail-body">
                        <h3>Unified Enterprise Operations Under One Intelligent Roof</h3>
                        <p>Disjointed software packages create duplicate work, delayed reporting, and costly human errors. Innovation Trove develops comprehensive, modular ERP and CRM platforms that interconnect your sales, warehouse inventory, financial ledgers, and human resources into a synchronized operational ecosystem.</p>
                        
                        <h4>Core Modules We Deliver</h4>
                        <ul class="list-style-one clearfix mb-4">
                            <li><strong>Inventory & Supply Chain Management:</strong> Real-time stock tracking across multiple warehouses, automated purchase re-order triggers, and barcode/QR scanning integration.</li>
                            <li><strong>Sales Pipeline & Customer Lifecycle CRM:</strong> Automated lead capture, quote generation, customer interaction timelines, and post-sales support ticketing.</li>
                            <li><strong>Financial Accounting & Automated Invoicing:</strong> Multi-currency transaction logging, automated GST/tax calculation, recurring subscription billing, and financial audit logs.</li>
                            <li><strong>Executive Analytics & Role-Based Dashboards:</strong> Instant operational clarity with visual drill-down charts, exportable PDF reports, and automated KPI alert notifications.</li>
                        </ul>
                    </div>',
            ],
            [
                'title' => 'AI Integration & Business Automation',
                'slug' => 'ai-integration-business-automation',
                'fa_icon' => 'fas fa-robot',
                'pic' => 'services/service-5.png',
                'thumbnail_image' => 'services/service-5.png',
                'thumbnail_img' => 'services/service-5.png',
                'sequence' => 5,
                'meta_title' => 'AI Integration & Workflow Automation Services - Innovation Trove',
                'meta_keyword' => 'AI integration services, business process automation, AI chatbot development, workflow automation solutions, intelligent document processing',
                'meta_description' => 'Empower your business with custom AI agents, intelligent workflow pipelines, automated document processing, and conversational customer support.',
                'description' => 'Eliminate repetitive manual tasks, automate customer support, and extract actionable business insights with custom AI agents, LLM integrations, and automated pipelines.',
                'full_description' => '
                    <div class="service-detail-body">
                        <h3>Put AI and Automation to Work for Your Bottom Line</h3>
                        <p>Artificial Intelligence is only valuable when it solves a concrete business bottleneck. At Innovation Trove, we integrate state-of-the-art AI models and custom automation engines into your daily tools, allowing your team to focus on strategic growth while automated agents handle repetitive data tasks.</p>
                        
                        <h4>Enterprise AI & Automation Capabilities</h4>
                        <ul class="list-style-one clearfix mb-4">
                            <li><strong>Intelligent Customer Support Chatbots:</strong> Context-aware AI assistants trained on your internal documentation and FAQs that resolve up to 70% of inbound tickets 24/7 before escalating to human agents.</li>
                            <li><strong>Automated Document Processing (OCR/AI):</strong> Extract structured records instantly from PDFs, invoices, contracts, and receipts directly into your database or accounting tool.</li>
                            <li><strong>Cross-Platform Workflow Orchestration:</strong> Connect CRM, email marketing, ERP, and payment processors through automated triggers and webhook pipelines.</li>
                            <li><strong>Predictive Business Analytics:</strong> Machine learning algorithms that analyze past sales and inventory data to forecast seasonal demand and customer churn risk.</li>
                        </ul>
                    </div>',
            ],
            [
                'title' => 'Cloud Infrastructure & DevOps',
                'slug' => 'cloud-infrastructure-and-devops',
                'fa_icon' => 'fas fa-cloud',
                'pic' => 'services/service-6.png',
                'thumbnail_image' => 'services/service-6.png',
                'thumbnail_img' => 'services/service-6.png',
                'sequence' => 6,
                'meta_title' => 'Cloud Migration, Architecture & DevOps Services - Innovation Trove',
                'meta_keyword' => 'cloud migration services, DevOps consulting, AWS cloud architects, Docker Kubernetes deployment, CI CD automation',
                'meta_description' => 'High-availability cloud deployment, automated CI/CD pipelines, container orchestration, and 24/7 infrastructure monitoring on AWS, GCP, and Azure.',
                'description' => 'Architect, migrate, and maintain high-availability cloud infrastructure on AWS, Google Cloud, and Azure with automated CI/CD pipelines and zero-downtime deployments.',
                'full_description' => '
                    <div class="service-detail-body">
                        <h3>Reliable, Scalable Cloud Infrastructure Engineered for 99.99% Uptime</h3>
                        <p>Modern applications require cloud architectures that automatically adapt to traffic spikes, heal from component failures, and deploy updates without taking the platform offline. We design, configure, and maintain robust cloud environments tailored for performance and cost efficiency.</p>
                        
                        <h4>DevOps & Cloud Capabilities</h4>
                        <ul class="list-style-one clearfix mb-4">
                            <li><strong>Cloud Architecture & Zero-Downtime Migration:</strong> Seamlessly transition on-premise servers or legacy hosting to AWS, Google Cloud, or Microsoft Azure with zero data loss.</li>
                            <li><strong>Automated CI/CD Pipelines:</strong> Fast, automated build, test, and deployment workflows using GitHub Actions, GitLab CI, and Docker containers.</li>
                            <li><strong>Infrastructure as Code (IaC):</strong> Reproducible, version-controlled cloud environments managed through Terraform and Ansible.</li>
                            <li><strong>24/7 Monitoring & Disaster Recovery:</strong> Proactive server health alerts, automated database backups, multi-region failovers, and rapid recovery time objectives (RTO).</li>
                        </ul>
                    </div>',
            ],
            [
                'title' => 'Dedicated Remote Developers & Staff Augmentation',
                'slug' => 'dedicated-remote-developers-staff-augmentation',
                'fa_icon' => 'fas fa-users-cog',
                'pic' => 'services/service-7.png',
                'thumbnail_image' => 'services/service-7.png',
                'thumbnail_img' => 'services/service-7.png',
                'sequence' => 7,
                'meta_title' => 'Hire Dedicated Remote Developers | Staff Augmentation - Innovation Trove',
                'meta_keyword' => 'hire dedicated developers, offshore development team, staff augmentation India, hire Laravel developers, hire React engineers',
                'meta_description' => 'Scale your engineering team with vetted, full-time remote developers in Laravel, React, Vue, Node.js, and Python. Seamless time-zone overlap and agile sprints.',
                'description' => 'Accelerate your product roadmap by hiring vetted, experienced full-stack engineers, frontend specialists, and backend architects dedicated solely to your project.',
                'full_description' => '
                    <div class="service-detail-body">
                        <h3>Scale Your Engineering Capacity with Vetted Senior Developers</h3>
                        <p>Hiring local engineering talent in North America and Western Europe is time-consuming and expensive. Innovation Trove provides fast-growing startups and enterprises with dedicated remote engineers and pre-vetted squads who integrate directly into your internal team and sprint cycles.</p>
                        
                        <h4>Available Dedicated Roles</h4>
                        <ul class="list-style-one clearfix mb-4">
                            <li><strong>Full-Stack Laravel & React/Vue Developers:</strong> Expert web engineers capable of shipping complex features, building REST APIs, and maintaining clean codebases.</li>
                            <li><strong>Mobile App Engineers (Flutter / React Native):</strong> Experienced mobile specialists building polished iOS and Android applications.</li>
                            <li><strong>Cloud & DevOps Specialists:</strong> Certified engineers managing containerization, CI/CD automation, and cloud infrastructure reliability.</li>
                            <li><strong>Quality Assurance (QA) Engineers:</strong> Dedicated manual and automated testing specialists ensuring zero regression across staging and production builds.</li>
                        </ul>

                        <h4>How Our Engagement Works</h4>
                        <ul class="list-style-one clearfix">
                            <li><strong>Rapid Onboarding:</strong> Review profiles, conduct interviews, and onboard your dedicated developer within 48 to 72 hours.</li>
                            <li><strong>Overlapping Time Zones:</strong> Direct working overlap with US (EST/PST), UK (GMT), European (CET), and Indian standard times.</li>
                            <li><strong>Flexible Retainers:</strong> Transparent monthly rates with zero long-term recruitment lock-ins or surprise agency fees.</li>
                        </ul>
                    </div>',
            ],
            [
                'title' => 'UI/UX Design & Product Strategy',
                'slug' => 'ui-ux-design-product-strategy',
                'fa_icon' => 'fas fa-paint-brush',
                'pic' => 'services/service-8.png',
                'thumbnail_image' => 'services/service-8.png',
                'thumbnail_img' => 'services/service-8.png',
                'sequence' => 8,
                'meta_title' => 'UI/UX Design & Digital Product Strategy Agency - Innovation Trove',
                'meta_keyword' => 'UI UX design company, product design agency, Figma web design, user experience design, mobile app design',
                'meta_description' => 'User-centric UI/UX design, interactive wireframing, clickable Figma prototypes, and comprehensive design systems that maximize product conversion.',
                'description' => 'Design interfaces that users love. We create clean, intuitive, and conversion-optimized user journeys, wireframes, and design systems for web and mobile products.',
                'full_description' => '
                    <div class="service-detail-body">
                        <h3>Design Interfaces That Captivate Users and Drive Business Conversions</h3>
                        <p>Exceptional digital products balance aesthetic sophistication with effortless usability. Our UI/UX design team transforms complex technical workflows into intuitive, beautiful experiences that reduce user drop-off and maximize customer lifetime value.</p>
                        
                        <h4>Our Product Design Process</h4>
                        <ul class="list-style-one clearfix mb-4">
                            <li><strong>User Research & Journey Mapping:</strong> Identify user personas, core pain points, and optimal user flows before designing visual interfaces.</li>
                            <li><strong>Interactive Wireframing & Clickable Prototypes:</strong> High-fidelity Figma prototypes that allow you to validate user experience and test flows before writing a single line of code.</li>
                            <li><strong>Scalable Design Systems:</strong> Consistent typography, color palettes, interactive components, and tokenized design systems that accelerate development speed.</li>
                            <li><strong>Frictionless Developer Handoff:</strong> Pixel-perfect component specifications and design tokens ensuring complete fidelity between design and live production code.</li>
                        </ul>
                    </div>',
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
