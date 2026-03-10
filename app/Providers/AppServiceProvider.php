<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        // Share menu data with all views
        View::composer('*', function ($view) {
            $menuPath = resource_path('menu/verticalMenu.json');
            if (file_exists($menuPath)) {
                $menuData = json_decode(file_get_contents($menuPath));
                $view->with('menuData', [$menuData]);
            }
        });
    }
}
