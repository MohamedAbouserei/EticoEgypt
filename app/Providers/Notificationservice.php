<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Notification;
use Auth;
use View;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class Notificationservice extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $news =DB::select('select * from news where duration > ?  ORDER BY `created_at` DESC', [Carbon::now()]);
                View::share('news',$news);
            });
    }
}
