<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\LogData;


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
        // parent::boot();
        // register_shutdown_function(function() {
        //     if(LogData::where([['doctor_id','=', session()->get('id')]])->first()){
        //         $ld=LogData::where([['doctor_id','=', session()->get('id')]])->get();
        //         $ld->toQuery()->update([
        //             'status' => "Offline",
        //         ]);//update and save any data
        //         echo "how are you";

        //     }
        //     //         // $ld->status="Offline";
        //     //         // $ld->save();
        //     echo"gjgjuygujglityituugj";
        //         // session()->forget('id');
        //         // session()->forget('name');
        //         // session()->forget('role');
        //         // session()->forget('url');
        // });

    }
}
