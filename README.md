### It is recommended that you read the official document first

Coinbase docs [https://developers.coinbase.com/api/v2](https://developers.coinbase.com/api/v2)

Coinbase Pro docs [https://docs.pro.coinbase.com](https://docs.pro.coinbase.com)

All interface methods are initialized the same as those provided by Coinbase. See details [src/api](https://github.com/zhouaini528/coinbase-php/tree/master/src/Api)

Most of the interface is now complete, and the user can continue to extend it based on my design, working with me to improve it.

[中文文档](https://github.com/zhouaini528/coinbase-php/blob/master/README_CN.md)

### Other exchanges API

[Exchanges](https://github.com/zhouaini528/exchanges-php) It includes all of the following exchanges and is highly recommended.

[Bitmex](https://github.com/zhouaini528/bitmex-php) Support [Websocket](https://github.com/zhouaini528/bitmex-php/blob/master/README.md#Websocket)

[Okex](https://github.com/zhouaini528/okex-php) Support [Websocket](https://github.com/zhouaini528/okex-php/blob/master/README.md#Websocket)

[Huobi](https://github.com/zhouaini528/huobi-php) Support [Websocket](https://github.com/zhouaini528/huobi-php/blob/master/README.md#Websocket)

[Binance](https://github.com/zhouaini528/binance-php) Support [Websocket](https://github.com/zhouaini528/binance-php/blob/master/README.md#Websocket)

[Kucoin](https://github.com/zhouaini528/kucoin-php)

[Mxc](https://github.com/zhouaini528/Mxc-php)

[Coinbase](https://github.com/zhouaini528/coinbase-php)

[ZB](https://github.com/zhouaini528/zb-php)

[Bitfinex](https://github.com/zhouaini528/bitfinex-php)

[Bittrex](https://github.com/zhouaini528/bittrex-php)

[Kraken](https://github.com/zhouaini528/kraken-php)

[Gate](https://github.com/zhouaini528/gate-php)   

[Bigone](https://github.com/zhouaini528/bigone-php)   

[Crex24](https://github.com/zhouaini528/crex24-php)   

[Bybit](https://github.com/zhouaini528/bybit-php)  

[Coinbene](https://github.com/zhouaini528/coinbene-php)   

[Bitget](https://github.com/zhouaini528/bitget-php)   

[Poloniex](https://github.com/zhouaini528/poloniex-php)

**If you don't find the exchange SDK you want, you can tell me and I'll join them.**

#### Installation
```
composer require linwj/coinbase
```

Support for more request Settings
```php
$coinbase=new Coinbase();
//or
$coinbase=new CoinbasePro();

//You can set special needs
$coinbase->setOptions([
    //Set the request timeout to 60 seconds by default
    'timeout'=>10,
    
    //If you are developing locally and need an agent, you can set this
    'proxy'=>true,
    //More flexible Settings
    /* 'proxy'=>[
     'http'  => 'http://127.0.0.1:12333',
     'https' => 'http://127.0.0.1:12333',
     'no'    =>  ['.cn']
     ], */
    //Close the certificate
    //'verify'=>false,
]);
```

### Coinbase Spot API

Publics API [More](https://github.com/zhouaini528/coinbase-php/blob/master/tests/coinbase/publics.php)

```php
$coinbase=new Coinbase();

try {
    $result=$coinbase->publics()->getTime();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$coinbase->publics()->getCurrencies();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$coinbase->publics()->getExchangeRates();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$coinbase->publics()->getPricesBuy([
        'currency_pair'=>'BTC-USD'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$coinbase->publics()->getPricesSell([
        'currency_pair'=>'BTC-USD'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$coinbase->publics()->getPricesSpot([
        'currency_pair'=>'BTC-USD'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
```

Privates API [More](https://github.com/zhouaini528/coinbase-php/blob/master/tests/coinbase/privates.php)
```php
//User
try {
    $result=$coinbase->privates()->getUsers();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$coinbase->privates()->getUser([
        'user_id'=>'fb352ff7-ce80-53ac-b0e1-7cfe51eca2ff'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$coinbase->privates()->getUserAuth();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$coinbase->privates()->putUser([
        'name'=>'linwenjun'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

//Accounts
try {
    $result=$coinbase->privates()->getAccounts();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$coinbase->privates()->getAccount([
        'account_id'=>'BTC'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$coinbase->privates()->putAccount([
        'account_id'=>'BTC',
        'name'=>'bbttcc'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

//Addresses
try {
    $result=$coinbase->privates()->getAccountAddresses([
        'account_id'=>'BTC'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

//List transactions
try {
    $result=$coinbase->privates()->getAccountTransactions([
        'account_id'=>'b1096c85-fbf8-5293-9424-5af475446ebd'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

//List buys
try {
    $result=$coinbase->privates()->getAccountBuys([
        'account_id'=>'b1096c85-fbf8-5293-9424-5af475446ebd'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$coinbase->privates()->getPaymentMethods();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

//Place buy order
try {
    $result=$coinbase->privates()->postAccountBuys([
        'account_id'=>'b1096c85-fbf8-5293-9424-5af475446ebd',
        'amount'=>'1',
        'currency'=>'BTC',
        //'payment_method'=>'83562370-3e5c-51db-87da-752af5ab9559',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

```

[More Test](https://github.com/zhouaini528/coinbase-php/tree/master/tests/coinbase)

[More Api](https://github.com/zhouaini528/coinbase-php/tree/master/src/Api/Coinbase)




### Coinbase Pro Spot API

Market related API [More](https://github.com/zhouaini528/coinbase-php/blob/master/tests/coinbase_pro/product.php)
```php
$coinbase=new CoinbasePro();

try {
    $result=$coinbase->product()->getList();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$coinbase->product()->getBook([
        'product_id'=>'BTC-USD',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$coinbase->product()->getCandles([
        'product_id'=>'BTC-USD',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

```

Order related API [More](https://github.com/zhouaini528/coinbase-php/blob/master/tests/coinbase_pro/order.php)
```php
$coinbase=new CoinbasePro($key,$secret,$passphrase);

//****************************LIMIT
try {
    $result=$coinbase->order()->post([
        //'client_oid'=>'',
        'type'=>'limit',
        'side'=>'sell',
        'product_id'=>'BTC-USD',
        'price'=>'20000',
        'size'=>'0.01'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
sleep(1);

//track the order
try {
    $result=$coinbase->order()->get([
        'id'=>$result['id'],
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
sleep(1);

//cancellation of order
try {
    $result=$coinbase->order()->delete([
        'id'=>$result['id'],
        //'id'=>'6bad6a7d-b01a-4a93-9e6e-e9934bcef4ef',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

//****************************MARKET
try {
    $result=$coinbase->order()->post([
        //'client_oid'=>'',
        'type'=>'market',
        'side'=>'sell',
        'product_id'=>'BTC-USD',
        'size'=>'0.01',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
sleep(1);

//track the order
try {
    $result=$coinbase->order()->get([
        'id'=>$result['id'],
        //'client_oid'=>''
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
```

Accounts related API [More]()
```php
$coinbase=new CoinbasePro($key,$secret,$passphrase);

try {
    $result=$coinbase->account()->getList();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$coinbase->account()->get([
        'account_id'=>'c74a36f5-4f2b-495b-be29-6eb2458d1b3a'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$coinbase->account()->getHolds([
        'account_id'=>'c74a36f5-4f2b-495b-be29-6eb2458d1b3a'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$coinbase->account()->getLedger([
        'account_id'=>'c74a36f5-4f2b-495b-be29-6eb2458d1b3a'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

```

[More Test](https://github.com/zhouaini528/coinbase-php/tree/master/tests/coinbase_pro/)

[More Api](https://github.com/zhouaini528/coinbase-php/tree/master/src/Api/CoinbasePro/)
