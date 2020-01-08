<?php

namespace App\Providers;

use Hexagonal\Domain\ArticleRepository;
use Hexagonal\Infrastructure\Bus\Contracts\CommandBus;
use Hexagonal\Infrastructure\Bus\Contracts\Container;
use Hexagonal\Infrastructure\Bus\LaravelContainer;
use Hexagonal\Infrastructure\Bus\SimpleCommandBus;
use Hexagonal\Infrastructure\Eloquent\ArticleEloquentRepository;
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
        $this->app->bind(
            CommandBus::class,
            SimpleCommandBus::class
        );
        $this->app->bind(
            Container::class,
            LaravelContainer::class
        );
        $this->app->bind(
            ArticleRepository::class,
            ArticleEloquentRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
