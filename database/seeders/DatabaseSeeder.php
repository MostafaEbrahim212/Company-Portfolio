<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Project;
use App\Models\Post;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Seed Admin User
        User::updateOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password'),
            ]
        );

        // 2. Seed Settings (Bilingual)
        $settings = [
            'company_name' => 'PortfolioPro',
            'primary_color' => '#6366f1',
            
            'hero_title_en' => 'We Build Digital Experiences',
            'hero_title_ar' => 'نحن نصنع تجارب رقمية',
            'hero_subtitle_en' => 'Creating modern, responsive, and robust web applications for global brands.',
            'hero_subtitle_ar' => 'برمجة وتصميم تطبيقات ويب حديثة وسريعة للشركات الرائدة.',
            'hero_btn_text_en' => 'Start Your Project',
            'hero_btn_text_ar' => 'ابدأ مشروعك الآن',
            
            'about_title_en' => 'Why Choose Us?',
            'about_title_ar' => 'لماذا تختارنا؟',
            'about_text_en' => 'With over a decade of experience, we deliver high-quality software tailored to your business needs.',
            'about_text_ar' => 'بخبرة تمتد لأكثر من عقد، نقدم برمجيات عالية الجودة مصممة خصيصاً لتلبية احتياجات عملك.',
            
            'srv1_title_en' => 'Web Development',
            'srv1_title_ar' => 'تطوير الويب',
            'srv1_desc_en' => 'Custom websites built with Laravel & Tailwind CSS.',
            'srv1_desc_ar' => 'مواقع مخصصة مبرمجة بأحدث التقنيات العالمية.',
            
            'srv2_title_en' => 'UI/UX Design',
            'srv2_title_ar' => 'تصميم الواجهات',
            'srv2_desc_en' => 'Beautiful and intuitive designs focused on user experience.',
            'srv2_desc_ar' => 'تصميمات جذابة وسهلة الاستخدام تركز على تجربة المستخدم.',
            
            'srv3_title_en' => 'SEO Optimization',
            'srv3_title_ar' => 'تحسين محركات البحث',
            'srv3_desc_en' => 'Rank higher on Google and reach more customers.',
            'srv3_desc_ar' => 'تصدر نتائج جوجل والوصول لعملاء أكثر.',
            
            'stat1_value' => '500+',
            'stat1_label_en' => 'Projects Completed',
            'stat1_label_ar' => 'مشروع مكتمل',
            
            'stat2_value' => '10+',
            'stat2_label_en' => 'Years Experience',
            'stat2_label_ar' => 'سنوات خبرة',
            
            'stat3_value' => '99%',
            'stat3_label_en' => 'Client Satisfaction',
            'stat3_label_ar' => 'رضا العملاء',
            
            'stat4_value' => '24/7',
            'stat4_label_en' => 'Support Available',
            'stat4_label_ar' => 'دعم فني',
            
            'cta_title_en' => 'Ready to transform your business?',
            'cta_title_ar' => 'جاهز لتطوير أعمالك؟',
            'cta_text_en' => 'Let us help you build something amazing today.',
            'cta_text_ar' => 'دعنا نساعدك في بناء شيء مذهل اليوم.',
            'cta_btn_en' => 'Contact Us Now',
            'cta_btn_ar' => 'تواصل معنا الآن',
            
            'footer_about_en' => 'We are a dedicated team of developers building premium web applications.',
            'footer_about_ar' => 'نحن فريق شغوف من المطورين نصنع تطبيقات ويب احترافية.',
            'footer_text_en' => '© ' . date('Y') . ' PortfolioPro. All rights reserved.',
            'footer_text_ar' => '© ' . date('Y') . ' بورتفوليو برو. جميع الحقوق محفوظة.',
            
            'contact_email' => 'contact@example.com',
            'contact_phone' => '+1 234 567 8900',
            'contact_address' => '123 Tech Avenue, Silicon Valley',
            
            'seo_title_en' => 'PortfolioPro - Digital Agency',
            'seo_title_ar' => 'بورتفوليو برو - وكالة رقمية',
            'seo_desc_en' => 'Professional web development and design services.',
            'seo_desc_ar' => 'خدمات احترافية في تطوير وتصميم الويب.',
            'seo_keywords_en' => 'web development, design, agency, laravel',
            'seo_keywords_ar' => 'تطوير ويب, تصميم, وكالة, تقنية',
        ];

        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        // 3. Seed Categories
        $catWeb = Category::updateOrCreate(['slug' => 'web-development'], ['name' => 'Web Development', 'name_ar' => 'تطوير الويب']);
        $catApp = Category::updateOrCreate(['slug' => 'mobile-apps'], ['name' => 'Mobile Apps', 'name_ar' => 'تطبيقات الجوال']);

        // 4. Seed Projects
        Project::updateOrCreate(
            ['slug' => 'ecommerce-platform'],
            [
                'category_id' => $catWeb->id,
                'title' => 'E-Commerce Platform',
                'title_ar' => 'منصة تجارة إلكترونية',
                'description' => 'A fully scalable e-commerce platform built with Laravel and React.',
                'description_ar' => 'منصة تجارة إلكترونية متكاملة وقابلة للتوسع مبنية باستخدام أحدث التقنيات.',
                'is_featured' => true,
            ]
        );
        Project::updateOrCreate(
            ['slug' => 'delivery-app'],
            [
                'category_id' => $catApp->id,
                'title' => 'Food Delivery App',
                'title_ar' => 'تطبيق توصيل طلبات',
                'description' => 'A real-time food delivery tracking application.',
                'description_ar' => 'تطبيق لتتبع طلبات الطعام وتوصيلها في الوقت الفعلي.',
                'is_featured' => true,
            ]
        );

        // 5. Seed Posts
        Post::updateOrCreate(
            ['slug' => 'future-of-laravel'],
            [
                'category_id' => $catWeb->id,
                'title' => 'The Future of Laravel',
                'title_ar' => 'مستقبل إطار عمل لارافل',
                'excerpt' => 'Exploring the new features in Laravel 11 and beyond.',
                'content' => '<p>Laravel continues to dominate the PHP ecosystem. In this post, we explore the simplified directory structure and streamlined configurations introduced in Laravel 11.</p>',
                'content_ar' => '<p>لا يزال لارافل يسيطر على بيئة تطوير PHP. في هذا المقال، نستكشف الهيكلة المبسطة للملفات والإعدادات الجديدة في لارافل 11.</p>',
                'is_published' => true,
                'published_at' => now(),
            ]
        );

        // 6. Seed Testimonials
        Testimonial::updateOrCreate(
            ['client_name' => 'John Doe'],
            [
                'client_name_ar' => 'جون دو',
                'client_role' => 'CEO',
                'company' => 'Tech Corp',
                'company_ar' => 'شركة التقنية',
                'review' => 'This agency transformed our business. Highly recommended!',
                'review_ar' => 'قامت هذه الوكالة بنقل أعمالنا لمستوى آخر. أنصح بهم بشدة!',
                'is_active' => true,
            ]
        );
    }
}
