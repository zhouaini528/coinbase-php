<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Coinbase;


use Lin\Coinbase\Api\CoinbasePro\Account;
use Lin\Coinbase\Api\CoinbasePro\Order;
use Lin\Coinbase\Api\CoinbasePro\Coinbase as CoinbaseAccounts;
use Lin\Coinbase\Api\CoinbasePro\Conversion;
use Lin\Coinbase\Api\CoinbasePro\Deposits;
use Lin\Coinbase\Api\CoinbasePro\Fees;
use Lin\Coinbase\Api\CoinbasePro\Fills;
use Lin\Coinbase\Api\CoinbasePro\Oracle;
use Lin\Coinbase\Api\CoinbasePro\Payment;
use Lin\Coinbase\Api\CoinbasePro\Product;
use Lin\Coinbase\Api\CoinbasePro\Profiles;
use Lin\Coinbase\Api\CoinbasePro\Reports;
use Lin\Coinbase\Api\CoinbasePro\System;
use Lin\Coinbase\Api\CoinbasePro\User;
use Lin\Coinbase\Api\CoinbasePro\Withdrawals;

class CoinbasePro
{
    protected $key;
    protected $secret;
    protected $passphrase;
    protected $host;

    protected $options=[];

    function __construct(string $key='',string $secret='',string $passphrase='',string $host='https://api.pro.coinbase.com'){
        $this->key=$key;
        $this->secret=$secret;
        $this->host=$host;
        $this->passphrase=$passphrase;
    }

    /**
     *
     * */
    private function init(){
        return [
            'key'=>$this->key,
            'secret'=>$this->secret,
            'passphrase'=>$this->passphrase,
            'host'=>$this->host,
            'options'=>$this->options,

            'platform'=>'coinbasepro',
            'version'=>'v1',
        ];
    }

    /**
     *
     * */
    function setOptions(array $options=[]){
        $this->options=$options;
    }

    /**
     *
     * */
    function account(){
        return new Account($this->init());
    }

    /**
     *
     * */
    function coinbase(){
        return new CoinbaseAccounts($this->init());
    }

    /**
     *
     * */
    function conversion(){
        return new Conversion($this->init());
    }

    /**
     *
     * */
    function deposits(){
        return new Deposits($this->init());
    }

    /**
     *
     * */
    function fees(){
        return new Fees($this->init());
    }

    /**
     *
     * */
    function fills(){
        return new Fills($this->init());
    }

    /**
     *
     * */
    function oracle(){
        return new Oracle($this->init());
    }

    /**
     *
     * */
    function order(){
        return new Order($this->init());
    }

    /**
     *
     * */
    function payment(){
        return new Payment($this->init());
    }

    /**
     *
     * */
    function product(){
        return new Product($this->init());
    }

    /**
     *
     * */
    function profiles(){
        return new Profiles($this->init());
    }

    /**
     *
     * */
    function reports(){
        return new Reports($this->init());
    }

    /**
     *
     * */
    function system(){
        return new System($this->init());
    }

    /**
     *
     * */
    function user(){
        return new User($this->init());
    }

    /**
     *
     * */
    function withdrawals(){
        return new Withdrawals($this->init());
    }
}
