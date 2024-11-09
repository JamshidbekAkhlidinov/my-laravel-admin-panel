<?php

namespace App\Providers;

use App\View\Components\admin\Menu;
use App\View\Components\admin\Logout;
use App\View\Components\admin\Tree;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
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
        Blade::component('menu', Menu::class);
        Blade::component('logout', Logout::class);
        Blade::component('tree', Tree::class);

        Paginator::useBootstrapFive();
    }
}
