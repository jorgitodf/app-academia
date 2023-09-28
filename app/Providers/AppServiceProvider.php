<?php

namespace App\Providers;

use App\Repositories\TypeUserEloquentORM;
use App\Repositories\TypeUserRepositoryInterface;
use App\Repositories\PublicPlaceEloquentORM;
use App\Repositories\PublicPlaceRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TypeUserRepositoryInterface::class, TypeUserEloquentORM::class);
        $this->app->bind(PublicPlaceRepositoryInterface::class, PublicPlaceEloquentORM::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
