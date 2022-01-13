<?php

namespace App\Providers;

use Illuminate\Http\Resources\Json\JsonResource;
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
        $models = ['Player'];

        foreach($models as $model) {
            $this->app->bind("App\Interfaces\I{$model}", "App\Services\\{$model}Service");
        };
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // JsonResource::withoutWrapping();
        // JsonResource::wrap('view');

    }
}
