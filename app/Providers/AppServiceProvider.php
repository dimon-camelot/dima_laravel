<?php

namespace App\Providers;

use App\Models\Post;
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
            $posts = Post::query()
                ->limit(5)
                ->orderByDesc('created_at')
                ->get();

            $view->with('posts', $posts);
        });
    }
}




