<?php
namespace App\Providers;

use App\Auth\CustomUserProvider;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;


class CustomAuthProvider extends ServiceProvider {
/**
 * Bootstrap the application services.
 *
 * @return void
 */

  public function boot()
    {

        	Auth::provider('custom', function ($app, array $config) {
            // Return an instance of Illuminate\Contracts\Auth\UserProvider...

            return new CustomUserProvider();
        });
    }

/**
 * Register the application services.
 *
 * @return void
 */
public function register()
{
    //
}
}
