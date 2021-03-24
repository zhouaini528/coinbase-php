<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Coinbase\Api\CoinbasePro;

use Lin\Coinbase\Request;

class Deposits extends Request
{
    /**
     * POST /deposits/payment-method
     * */
    public function postPaymentMethod(array $data=[]){
        $this->type='POST';
        $this->path='/deposits/payment-method';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /deposits/coinbase-account
     * */
    public function postCoinbaseAccount(array $data=[]){
        $this->type='POST';
        $this->path='/deposits/coinbase-account';
        $this->data=$data;
        return $this->exec();
    }
}
