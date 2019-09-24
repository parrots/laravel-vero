<?php

namespace SamLittler\LaravelVero;

use Illuminate\Support\Facades\Facade;

class VeroFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'vero';
    }
}
