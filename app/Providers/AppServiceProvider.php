<?php

namespace App\Providers;

use App\Models\AuctionCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::composer('auction.include.header', function ($view) {
            $view->with('categories', AuctionCategory::getActiveCategories()); 
        });
    }
}
