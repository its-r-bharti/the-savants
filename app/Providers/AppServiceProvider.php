<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Middleware\RedirectBasedOnUserType;
use Illuminate\Support\Facades\Route;

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
        // Register custom named middleware
        Route::aliasMiddleware('redirect.usertype', RedirectBasedOnUserType::class);
    
        // Then register the routes
        Route::middleware('web')
            ->group(base_path('routes/web.php'));
    }
}
