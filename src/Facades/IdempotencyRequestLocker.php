<?php

namespace Ovarun\IdempotencyRequestLocker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ovarun\IdempotencyRequestLocker\IdempotencyRequestLocker
 */
class IdempotencyRequestLocker extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Ovarun\IdempotencyRequestLocker\IdempotencyRequestLocker::class;
    }
}
