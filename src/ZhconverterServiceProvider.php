<?php

namespace Justin\Zhconverter;

use Illuminate\Support\ServiceProvider;

class ZhconverterServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton("convert", function () {
            return new Converter();
        });
    }
}
