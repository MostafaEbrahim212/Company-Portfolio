<div align="center">
  <img src="https://laravel.com/img/logomark.min.svg" width="100" alt="Laravel Logo">
  <h1>Pro Portfolio & CMS (Laravel 11)</h1>
  <p>A high-performance, fully bilingual, monolithic CMS and Portfolio platform built with <strong>Laravel 11</strong>, <strong>Tailwind CSS v4</strong>, and <strong>AJAX</strong>.</p>
</div>

<hr>

## 🌟 Key Features

### 🌍 1. Fully Bilingual (English & Arabic)
- Seamlessly switch between English and Arabic with a single click.
- Translates everything: Frontend views, Admin Dashboard, CRUD forms, and Settings.
- Intelligent content fallback: Displays English content if the Arabic translation is missing in the database.
- Dynamic RTL/LTR support baked into the layout.

### ⚡ 2. High Performance & Caching
- **Global Settings Cache**: Settings are cached globally and loaded in milliseconds.
- **Smart Cache Invalidation**: Caches automatically flush and rebuild via Eloquent Observers whenever an admin modifies Data (Projects, Posts, Categories, or Settings).
- **Zero-DB Public Views**: Fully optimized public-facing pages load instantly from the Cache to easily handle high traffic without stressing the MySQL server.

### 🎨 3. Dynamic Theming & Tailwind v4
- **Custom Primary Color**: Change the website's brand color directly from the Dashboard settings. The UI (buttons, borders, text highlights) adapts instantly using dynamic CSS variables injected into Tailwind v4.
- **Modern Design System**: Features smooth AOS scroll animations, glassmorphism, and responsive CSS grids.

### 🔍 4. Professional SEO & Tracking CMS
- Dedicated **SEO Dashboard** to control global Meta Titles, Descriptions, and Keywords.
- **Dynamic OG:Image Upload**: Upload a default Open Graph image for rich social media sharing (Facebook/WhatsApp).
- **Script Injection**: Securely inject Google Analytics, Meta (Facebook) Pixel, and Google AdSense directly into the `<head>` via the dashboard.

### 🛠️ 5. Powerful Admin Dashboard (AJAX)
- **Projects & Categories**: Showcase your portfolio with image uploads and category filtering.
- **Blog Engine**: Write and publish SEO-friendly articles. Save them as Drafts before publishing.
- **Client Testimonials**: Manage and toggle visibility for client reviews.
- **Inbox**: Receive messages from the frontend contact form. Messages trigger unread counters in the dashboard sidebar.
- **Seamless UX**: All CRUD operations (Create, Edit, Delete) utilize jQuery/AJAX with SweetAlert2 notifications, preventing annoying page reloads.

### 📝 6. Comprehensive Settings Panel
Modify over 40 distinct text fields and assets without touching a single line of code:
- Hero texts, Subtitles, and Call-To-Action (CTA) Banners.
- Company Statistics and Counters (e.g., 500+ Projects).
- Services offered and their descriptions.
- Footer, Social Media URLs, and Contact Information.

---

## 🚀 Quick Start Guide

### Requirements
- PHP 8.2+
- Composer
- Node.js & npm
- MySQL

### Installation

1. **Clone & Setup:**
   ```bash
   git clone <repo-url>
   cd <repo-folder>
   composer install
   npm install
   cp .env.example .env
   php artisan key:generate
   ```

2. **Database Configuration:**
   Configure your `.env` file with your database credentials.
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=portfolio
   DB_USERNAME=root
   DB_PASSWORD=
   ```

3. **Migrate & Seed:**
   This command will build your database schema and pre-fill it with bilingual dummy data, settings, categories, and posts so you can test the site instantly.
   ```bash
   php artisan migrate:fresh --seed
   ```

4. **Storage Link:**
   Ensure images display correctly by linking the storage directory.
   ```bash
   php artisan storage:link
   ```

5. **Build Assets:**
   Compile the Tailwind CSS v4 assets.
   ```bash
   npm run build
   ```

6. **Serve:**
   ```bash
   php artisan serve
   ```
   *Dashboard Access:* `http://127.0.0.1:8000/admin/dashboard`

---

## 🏗️ Technical Architecture

- **Backend**: Laravel 11.x (Monolithic)
- **Frontend**: Blade Components, Tailwind CSS v4, AOS (Animate On Scroll)
- **Interactivity**: Vanilla JS & jQuery for asynchronous form handling
- **Database**: MySQL with optimized indexing on boolean columns (`is_published`, `is_featured`) for fast retrieval.

---
*Built with ❤️ for High Performance and Professional Branding.*
