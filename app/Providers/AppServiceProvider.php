<?php

namespace App\Providers;

use App\Models\Room;
use Illuminate\Support\ServiceProvider;

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
        $rooms = Room::get();

        view()->share('global_rooms',$rooms);
    }
}
