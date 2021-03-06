<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;


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
    public function boot(Request $request)
    {
        //https://localhost:8000/admin/anything
        $path_array=$request->segments();
        $admin_route=config('app.admin_route');
        if(in_array( $admin_route,$path_array)){
            config(['app.app_scope'=> 'backend']);
        }
        $app_scope=config('app.app_scope');
        if($app_scope=='backend'){
            $path=resource_path('backend/views');//resources/backend/views
        }else{
            $path=resource_path('front/views');
        }
        view()->addLocation($path);
    }
}
