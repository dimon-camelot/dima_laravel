<?php

namespace App\Providers;

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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Дергаем посты из базы для сайдбара
        \View::composer('layout', function ($view) {
            $posts = \DB::table('posts')
                ->limit(5)
                ->orderByDesc('date')
                ->get();
            $view->with('posts', $posts);
        });
    }
}




