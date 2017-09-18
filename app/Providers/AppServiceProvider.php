<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // App/Providers/AppServiceProvider -> boot()
        Blade::directive('yesterday', function () {
            return "<?php echo \Carbon\Carbon::yesterday(); ?>";
        });

        // App/Providers/AppServiceProvider -> boot()
        Blade::if('freetrial', function () {
            return date('Y-m-d') < '2017-09-30';
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
