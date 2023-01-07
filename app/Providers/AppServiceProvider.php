<?php

namespace App\Providers;
use App\Models\Setting;
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

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(!app()->runningInConsole())
        {
            $setting =Setting::firstor(function(){
                return Setting::create([
                    'name'=>'site_name',
                    'description'=>'welcome in my site',
                ]);
            });
            view()->share('setting',$setting);
        }
    }
}
