<?php

namespace Pxlcodes\Blog;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'blog');

    }

    public function register()
    {
        //
    }

    public function provides()
    {
        //
    }

    


}