# psr11

php psr11 container

## Installation

``` cmd
composer require diggphp/psr11
```

## Usage

``` php
$container = new \DiggPHP\Psr11\Container();

$container->set('test', function(){
    return 'bar';
});
$container->get('test'); // bar

// dependency injection container
$monolog = $container->get(\Monolog\Logger::class);
```
