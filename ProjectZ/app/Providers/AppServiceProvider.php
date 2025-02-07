<?php


namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * The namespace for the controller routes.
     *
     * @var string
     */
    protected $namespace = 'App\\Http\\Controllers';
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
        //
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/deEersteRoute.php'));
            
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/requestViews.php'));
    }
}
