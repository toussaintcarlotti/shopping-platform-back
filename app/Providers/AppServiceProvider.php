<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

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
        RedirectResponse::macro('success', function ($message, $title = 'Succès') {
            flash()->addSuccess($message);

            return $this;
        });

        RedirectResponse::macro('danger', function ($message, $title = 'Erreur') {
            flash()->addError($message);

            return $this;
        });


        RedirectResponse::macro('info', function ($message, $title = 'Infos') {
            flash()->addInfo($message);

            return $this;
        });

        RedirectResponse::macro('warning', function ($message, $title = 'Attention') {
            flash()->addWarning($message);

            return $this;
        });

        Model::shouldBeStrict(!app()->isProduction());
        Paginator::useBootstrap();
    }
}
