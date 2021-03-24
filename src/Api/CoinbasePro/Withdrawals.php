<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Coinbase\Api\CoinbasePro;

use Lin\Coinbase\Request;

class Withdrawals extends Request
{
    /**
     * POST /withdrawals/payment-method
     * */
    public function postPaymentMethod(array $data=[]){
        $this->type='POST';
        $this->path='/withdrawals/payment-method';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /withdrawals/coinbase-account
     * */
    public function postCoinbaseAccount(array $data=[]){
        $this->type='POST';
        $this->path='/withdrawals/coinbase-account';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *POST /withdrawals/crypto
     * */
    public function postCrypto(array $data=[]){
        $this->type='POST';
        $this->path='/withdrawals/crypto';
        $this->data=$data;
        return $this->exec();
    }
}
