<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        view()->composer(

            'include.navbar',

            function ($view1) {

                $view1->with('data',\App\Models\Supplier::select('id','firstname')->get());

            }
            

        );

        view()->composer(

            'include.rsnav',

            function ($view2) {

                
                $view2->with('runservice', \App\Models\rooms::where('status',0 )->get()->count());
                $view2->with('reservationdata', \App\Models\rooms::select('rooms.roomNo','reservations.id')
                    ->join('reservations','reservations.roomNo','=','rooms.roomNo')
                    ->orderBy('reservations.id','DESC')
                    ->where([['rooms.status', 0],['reservations.payment',0]] )->get());

            }
            

        );
    }
}
