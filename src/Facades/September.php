<?php

namespace KaanTanis\September\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static user(int $data)
 * @method static subject(string $data)
 * @method static details(string $data)
 * @method static url(string $data)
 * @method static method(string $data)
 * @method static ip(string $data)
 * @method static userAgent(string $data)
 * @method static save(mixed $data)
 * @method static debug()
 * @method static info()
 * @method static warning()
 * @method static danger()
 */
class September extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'september';
    }
}
