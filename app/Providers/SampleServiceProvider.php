<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
class SampleServiceProvider extends ServiceProvider
{
    public function boot()
    {
     //
    }
    public function register()
    {
        $this->app->bind(
                "App\Service\SampleServiceInterface", 
                "App\Service\SampleService"
                );
    }
}