<?php

/**
 * @author lin <465382251@qq.com>
 * */

use Lin\Coinbase\Coinbase;

require __DIR__ .'../../../vendor/autoload.php';

include 'ket_secret.php';

$coinbase=new Coinbase($key,$secret);

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
