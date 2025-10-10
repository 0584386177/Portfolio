<?php

namespace App\Providers;
use App\Models\CategoryPost;
use App\Models\CategorySoftware;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
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
        View::composer('components.menuList', function ($view) {
            $view->with('categories_post', CategoryPost::with(['posts'])->get());
            $view->with('category_software', CategorySoftware::all());
        });
    }
}
