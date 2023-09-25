<?php

namespace App\Providers;

use App\Repositories\TypeUserEloquentORM;
use App\Repositories\TypeUserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TypeUserRepositoryInterface::class, TypeUserEloquentORM::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
