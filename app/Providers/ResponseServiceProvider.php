<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Routing\ResponseFactory;

class ResponseServiceProvider extends ServiceProvider
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
     * @param ResponseFactory $factory
     * @return void
     */
    public function boot(ResponseFactory $factory)
    {
        $factory->macro('success', function ($data = [], $status = 200) use ($factory) {

            $customFormat = [
                'success' => true,
                'data' => $data
            ];

            return $factory->make($customFormat, $status);
        });

        $factory->macro('error', function ($errors=[], $status = 400) use ($factory) {
            if (!is_array($errors)) {
                $errors = [$errors];
            }

            $customFormat = [
                'success' => false,
                'errors' => $errors
            ];

            return $factory->make($customFormat, $status);
        });
    }
}
