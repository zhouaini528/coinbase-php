<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Coinbase\Api\Coinbase;

use Lin\Coinbase\Request;

class Publics extends Request
{
    /**
     *GET https://api.coinbase.com/v2/currencies
     * */
    public function getCurrencies(array $data=[]){
        $this->type='GET';
        $this->path='/v2/currencies';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://api.coinbase.com/v2/exchange-rates
     * */
    public function getExchangeRates(array $data=[]){
        $this->type='GET';
        $this->path='/v2/exchange-rates';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://api.coinbase.com/v2/prices/:currency_pair/buy
     * */
    public function getPricesBuy(array $data=[]){
        $this->type='GET';
        $this->path='/v2/prices/'.$data['currency_pair'].'/buy';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://api.coinbase.com/v2/prices/:currency_pair/sell
     * */
    public function getPricesSell(array $data=[]){
        $this->type='GET';
        $this->path='/v2/prices/'.$data['currency_pair'].'/sell';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://api.coinbase.com/v2/prices/:currency_pair/spot
     * */
    public function getPricesSpot(array $data=[]){
        $this->type='GET';
        $this->path='/v2/prices/'.$data['currency_pair'].'/spot';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET https://api.coinbase.com/v2/time
     * */
    public function getTime(array $data=[]){
        $this->type='GET';
        $this->path='/v2/time';
        $this->data=$data;
        return $this->exec();
    }
}
