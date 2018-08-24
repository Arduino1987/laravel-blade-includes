<?php

namespace Aghorianducalis\BladeIncludes;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $publishedDirectory = 'includes';

        $this->loadViewsFrom(__DIR__.'/views', 'laravel-blade-includes');

        $this->publishes([
            __DIR__.'/views' => resource_path("views/vendor/$publishedDirectory")
        ]);

        Blade::component("vendor.$publishedDirectory.breadcrumb", 'breadcrumb');
        Blade::component("vendor.$publishedDirectory.alert_success", 'alertStatus');
        Blade::component("vendor.$publishedDirectory.alert_error", 'alertError');

        // Shorter syntax for alertError: @errorAlert
        Blade::directive('errorAlert', function () use ($publishedDirectory) {
            $view_path = "vendor.$publishedDirectory.alert_error";
            return "<?php echo view('$view_path')->render(); ?>";
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
