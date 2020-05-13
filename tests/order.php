<?php

/**
 * @author lin <465382251@qq.com>
 * */

use Lin\Coinbase\Coinbase;

require __DIR__ .'../../vendor/autoload.php';

$key='7d57139517d145fb98143d38dbde9082';
$secret='kMpFBoM+EeseFSv8oQiZKHz5jO543mO+lMZ41EW2lshp9zAqHzd7ymNznNDhU94ftamj5pHZxZRvCYRYp5peNQ==';
$passphrase='vdwpkkxvtt';

//It is recommended to use the sandbox urls first https://api-public.sandbox.pro.coinbase.com
//Default address https://api.pro.coinbase.com
$host='https://api-public.sandbox.pro.coinbase.com';

$coinbase=new Coinbase($key,$secret,$passphrase,$host);

//You can set special needs
$coinbase->setOptions([
    //Set the request timeout to 60 seconds by default
    'timeout'=>10,
    
    //If you are developing locally and need an agent, you can set this
    //'proxy'=>true,
    //More flexible Settings
    /* 'proxy'=>[
     'http'  => 'http://127.0.0.1:12333',
     'https' => 'http://127.0.0.1:12333',
     'no'    =>  ['.cn']
     ], */
    //Close the certificate
    //'verify'=>false,
]);

/*
 client_oid	[optional] Order ID selected by you to identify your order
 type	[optional] limit or market (default is limit)
 side	buy or sell
 product_id	A valid product id
 stp	[optional] Self-trade prevention flag
 stop	[optional] Either loss or entry. Requires stop_price to be defined.
 stop_price	[optional] Only if stop is defined. Sets trigger price for stop order.
 
 LIMIT ORDER PARAMETERS
 price	Price per bitcoin
 size	Amount of base currency to buy or sell
 time_in_force	[optional] GTC, GTT, IOC, or FOK (default is GTC)
 cancel_after	[optional]* min, hour, day
 post_only	[optional]** Post only flag
 
 MARKET ORDER PARAMETERS
 size	[optional]* Desired amount in base currency
 funds	[optional]* Desired amount of quote currency to use
 One of size or funds is required.
 */

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
    print_r(json_decode($e->getMessage(),true));
}
sleep(1);

//track the order
try {
    $result=$coinbase->order()->get([
        'id'=>$result['id'],
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
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
    print_r(json_decode($e->getMessage(),true));
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
    print_r(json_decode($e->getMessage(),true));
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
    print_r(json_decode($e->getMessage(),true));
}

?>