<?php

namespace App\Providers;

use App\Repositories\AdressEloquentORM;
use App\Repositories\AdressRepositoryInterface;
use App\Repositories\CitieEloquentORM;
use App\Repositories\CitieRepositoryInterface;
use App\Repositories\NeighborhoodEloquentORM;
use App\Repositories\NeighborhoodRepositoryInterface;
use App\Repositories\PhoneEloquentORM;
use App\Repositories\PhoneRepositoryInterface;
use App\Repositories\TypeUserEloquentORM;
use App\Repositories\TypeUserRepositoryInterface;
use App\Repositories\PublicPlaceEloquentORM;
use App\Repositories\PublicPlaceRepositoryInterface;
use App\Repositories\StateEloquentORM;
use App\Repositories\StateRepositoryInterface;
use App\Repositories\UserEloquentORM;
use App\Repositories\UserRepositoryInterface;
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
        $this->app->bind(StateRepositoryInterface::class, StateEloquentORM::class);
        $this->app->bind(UserRepositoryInterface::class, UserEloquentORM:: class);
        $this->app->bind(PhoneRepositoryInterface::class, PhoneEloquentORM::class);
        $this->app->bind(AdressRepositoryInterface::class, AdressEloquentORM::class);
        $this->app->bind(CitieRepositoryInterface::class, CitieEloquentORM::class);
        $this->app->bind(NeighborhoodRepositoryInterface::class, NeighborhoodEloquentORM::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
