<?php

namespace GustavoLima\Multichain\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class MultiChain
 * @package GustavoLima\Multichain\Facades
 */
class MultiChain extends Facade
{
    /**
     * Get the registered name of the component
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'multichain';
    }
}