<?php

namespace App\Providers;

use App\Filament\Http\Responses\Auth\LoginResponse;
use App\Filament\Http\Responses\Auth\LogoutResponse;
use Filament\Http\Responses\Auth\Contracts\LoginResponse as BaseLoginResponse;
use Filament\Http\Responses\Auth\Contracts\LogoutResponse as BaseLogoutResponse;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * All of the container singletons that should be registered.
     *
     * @var array
     */
    public $singletons = [
        BaseLoginResponse::class => LoginResponse::class,
        BaseLogoutResponse::class => LogoutResponse::class, 
    ];

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
    }
}
