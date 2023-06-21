<?php

namespace Justin\Zhconverter\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelZhconverter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'convert';
    }
}
