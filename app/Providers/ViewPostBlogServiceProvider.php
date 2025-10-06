<?php

namespace App\Providers;

use App\Models\Post;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewPostBlogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
         View::composer(['*'], function ($view) {
            $blog_terbaruc = Post::where('statuspost', '1')
            ->with('postcategory', 'tags', 'author')
            ->Published()
            ->Publishedate()
            ->Popular()
            ->latest()
            ->take(5)
            ->get();
            if (!empty($blog_terbaruc)) {
                $view->with('blog_terbaruc', $blog_terbaruc);
            } else {
                $view->with('blog_terbaruc', '0');
            }
        });
    }
}
