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




try {
    $result=$coinbase->product()->getList();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
sleep(1);

try {
    $result=$coinbase->product()->getBook([
        'product_id'=>'BTC-USD',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
sleep(1);

try {
    $result=$coinbase->product()->getCandles([
        'product_id'=>'BTC-USD',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
sleep(1);

try {
    $result=$coinbase->product()->getStats([
        'product_id'=>'BTC-USD',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
sleep(1);

try {
    $result=$coinbase->product()->getTicker([
        'product_id'=>'BTC-USD',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
sleep(1);

try {
    $result=$coinbase->product()->getTrades([
        'product_id'=>'BTC-USD',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

?>