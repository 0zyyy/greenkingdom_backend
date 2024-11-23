<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use Binafy\LaravelCart\Models\Cart;
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
        View::composer('components.navbar', function ($view) {
            $view->with('categories', Category::all());
            if (auth()->check()) {
                $view->with('total', Cart::query()->firstOrCreate(['user_id' => auth()->id()])->items()->with('itemable')->count());
            }
        });
    }
}
