<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind('App\Repository\TeacherRepositoryInterface'
                        , 'App\Repository\TeacherRepository');
    }


    public function boot()
    {
        //
    }
}
