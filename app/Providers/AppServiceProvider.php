<?php

namespace App\Providers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Page;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {   
        if (strripos(request()->fullUrl(), '/admin') === false) {
            $menu = MenuItem::get()->where('menu_id', 2)->toArray();
            view()->share('menu', $menu);
        }
        
        $pages = Page::get()->toArray();
        view()->share('pages', $pages);
    }
}
