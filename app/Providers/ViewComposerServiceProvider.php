<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ServiceService;
use Illuminate\Support\Facades\View;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(ServiceService $serviceService)
    {
        // Menggunakan view composer untuk membagikan data services ke view frontend.template
        View::composer('frontend.template', function ($view) use ($serviceService) {
            $servis = $serviceService->getAllService();
            $view->with('servis', $servis);
        });
    }
}