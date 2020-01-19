<?php

namespace Pxlcodes\Formbuilder;

use Illuminate\Support\ServiceProvider;

class FormBuilderServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'formbuilder');
        $this->mergeConfigFrom(__DIR__.'/config/formbuilder.php','formbuilder');

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