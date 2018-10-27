## Get Started
### Installation

```
composer require joseraul/iex-trading-api
```

### Example of use

#### Stock
##### Stats
```
$iex_trading = new Client();
$data = $iex_trading->stock()
    ->stats('APPL');
```


