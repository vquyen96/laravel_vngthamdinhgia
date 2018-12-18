<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Schema::defaultStringLength(191);

        $data['dich_vu'] = DB::table('dichvu')->get();
        $data['linh_vuc_van_ban'] = DB::table('linhvuc')->where('level',1)->get();
        $data['linh_vuc_tai_lieu'] = DB::table('linhvuc')->where('level',2)->get();
        
        view()->share($data);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
