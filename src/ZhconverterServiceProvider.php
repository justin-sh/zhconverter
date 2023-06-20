<?php

namespace Justin\Zhconverter;

use Illuminate\Support\ServiceProvider;

class ZhconverterServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(Converter::class, function () {
            return new Converter();
        });
    }
}
