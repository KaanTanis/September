<?php

namespace KaanTanis\Facades\September;

use Illuminate\Support\Facades\Facade;

class September extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'september';
    }
}
