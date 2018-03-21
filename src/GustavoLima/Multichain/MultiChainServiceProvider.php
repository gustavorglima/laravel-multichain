<?php

namespace GustavoLima\Multichain;

use Illuminate\Support\ServiceProvider;
use be\kunstmaan\multichain\MultichainClient;

/**
 * Class MultiChainServiceProvider
 * @package GustavoLima\Multichain
 */
class MultiChainServiceProvider extends ServiceProvider
{
    /**
     * Defers loading of the component until required.
     * @var boolean
     */
    protected $defer = true;

    /**
     * Register any application services.
     * @return void
     */
    public function register()
    {
        $this->app->singleton('multichain', function()  {
            return new MultichainClient(
                sprintf('http://%s:%s', env('MULTICHAIN_RPC_HOST'), env('MULTICHAIN_RPC_PORT')),
                env('MULTICHAIN_RPC_USERNAME'), env('MULTICHAIN_RPC_PASSWORD'), 3
            );
        });

        $this->app->alias('multichain', MultichainClient::class);
    }

    /**
     * Get service provided by Service Provider
     * @return string
     */
    public function provides()
    {
        return ['multichain', MultichainClient::class];
    }
}