<?php

namespace App\Providers;

use App\Models\Room;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Page;

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

    
    public function boot()
    {
        Paginator::useBootstrap();

        $page_data = Page::where('id',1)->first();
        $rooms = Room::get();

        view()->share('global_page_data', $page_data);
        view()->share('global_rooms',$rooms);
    }
}
