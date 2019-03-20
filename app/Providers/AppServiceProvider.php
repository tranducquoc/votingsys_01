<?php

namespace App\Providers;

use App;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Link\LinkRepository;
use App\Repositories\Link\LinkRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind(LinkRepositoryInterface::class, LinkRepository::class);
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
