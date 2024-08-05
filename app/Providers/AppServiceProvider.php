<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
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
DB::listen(function($query){
   // dd($query);
    Log::debug($query->sql,[$query->bindings,$query->time]);
});
        Response::macro('foo',function($val){
            return Response::make(strtoupper($val))->header('header1','this is header1');
        });
        Blade::directive('myphp',function($text){
            return '<?php '. $text .' ?>';
                    });
        Blade::directive('blod',function($text){
return '<b>'. $text .'</b>';
        });
        Blade::if('cint',function($value=null){
return is_int($value);
        });
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
        Validator::extend('validnew',function($atrr,$val,$param,\Illuminate\Validation\Validator $validator){
if($val < 4){
    return true;
} else {
    return false;
}

        }
        ,'value must be more 3');
    }
}
