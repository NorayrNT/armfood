<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {        
        View::composer(
            ['index','shop','header'],
            "App\Http\View\Composers\TypeComposer"            
        );

        View::composer(
            ['header','index','shop'],
            "App\Http\View\Composers\HeaderComposer"
        );

        View::composer(
            ['index','shop','product'],
            "App\Http\View\Composers\ProductComposer"
        );
    }
}
