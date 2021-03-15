<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    
        $this->app->bind('path.public', function() {
            return base_path('public_html');
        });
    }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        
        $categories = Category::orderBy('id')->get();
        View::share([
        'categories'=>$categories
    ]);
    
            $parentCategories = Category::root()->get();
            View::share([
                'categories' => $parentCategories
    ]);
        }
    }
