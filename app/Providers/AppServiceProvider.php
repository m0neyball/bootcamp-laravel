<?php

namespace App\Providers;

use App\Article;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Developer tools provider
     *
     * @var array
     */
    protected $providers = [
        'Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider',
        'Barryvdh\Debugbar\ServiceProvider'
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('partials.nav', function ($view){
          $view->with('latest', Article::latest()->first());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->environment() == 'local'
        if ($this->app->isLocal() && !empty($this->providers)) {
            foreach ($this->providers as $provider) {
                $this->app->register($provider);
            }
        }
    }
}
