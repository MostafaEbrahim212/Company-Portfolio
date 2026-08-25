<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use App\Models\Setting;
use App\Models\Project;
use App\Models\Post;
use App\Models\Testimonial;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        try {
            // Cache settings forever, drastically reducing database load for every single request
            $settings = Cache::rememberForever('global_settings', function () {
                return Setting::pluck('value', 'key')->toArray();
            });
            View::share('settings', $settings);
        } catch (\Exception $e) {}

        // Global Cache Invalidation for high traffic optimization
        // Whenever any data changes, flush the entire cache so the public site is always perfectly in sync
        $clearCache = function () {
            Cache::flush();
        };

        Project::saved($clearCache);
        Project::deleted($clearCache);
        Post::saved($clearCache);
        Post::deleted($clearCache);
        Testimonial::saved($clearCache);
        Testimonial::deleted($clearCache);
        Category::saved($clearCache);
        Category::deleted($clearCache);
    }
}
