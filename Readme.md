[![Build Status](https://travis-ci.org/joseraul/iex-trading-api.svg?branch=master)](https://travis-ci.org/joseraul/iex-trading-api)

## IEX Trading Client Api
PHP Client for the [IEX Trading Api](https://iextrading.com/developer/docs)

## Get Started
### Installation
```
composer require joseraul/iex-trading-api
```

### Example of use

#### Stock
##### Stats

https://iextrading.com/developer/docs/#key-stats

```
$iex_trading = new Client();

$data = $iex_trading->stock()
    ->stats('APPL');
```


