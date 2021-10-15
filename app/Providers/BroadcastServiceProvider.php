<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes([ 'middleware' => 'auth:api']);
        // Broadcast::routes([ 'middleware' => 'auth.client']);
        // Broadcast::routes([ 'middleware' => 'auth:api', 'prefix' => 'api']);

        require base_path('routes/channels.php');
    }
}
