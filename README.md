# Laravel Multichain

Multichain Wrapper for Laravel 5

### Installation
First of all you need to require the package:
```
composer require gustavorglima/laravel-multichain
```
Now open `config/app.php` to add the provider and alias:
``` 
'providers' => [
    ...
    GustavoLima\Multichain\MultiChainServiceProvider::class,
]
```

``` 
'aliases' => [
    ...
    'MultiChain' => GustavoLima\Multichain\Facade\MultiChain::class,
]
```

### Configuration
Add the lines bellow on your `.env` file and edit with your credentials:
```
# MULTICHAIN
MULTICHAIN_RPC_HOST=127.0.0.1
MULTICHAIN_RPC_PORT=7358
MULTICHAIN_RPC_USERNAME=
MULTICHAIN_RPC_PASSWORD=
```

### Test
```
$multichain = MultiChain::getInfo();
```

### Documentation
1. Multichain JSON-RPC API commands (http://www.multichain.com/developers/json-rpc-api/)
2. Kunstmaan PHP library (https://github.com/Kunstmaan/libphp-multichain)

### Credits
All credits for **Kunstmaan Labs** who wrote the original php library.