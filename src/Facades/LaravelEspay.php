<?php

namespace Rymesaint\LaravelEspay\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rymesaint\LaravelEspay\LaravelEspay
 */
class LaravelEspay extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Rymesaint\LaravelEspay\LaravelEspay::class;
    }
}
