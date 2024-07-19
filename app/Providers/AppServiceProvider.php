<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
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
        Response::macro('res',function($val){

            return '<br>' . $val;
        });
        Validator::extend('Validme',function($name,$value,$param,\Illuminate\Validation\Validator $validator){
           if($value<3){
            return true;
           }
           else {
            return false;
           }
        },'value must be more 3');
    }
}
