<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Coinbase\Api\CoinbasePro;

use Lin\Coinbase\Request;

class System extends Request
{
    /**
     * GET /currencies
     * */
    public function getCurrencies(array $data=[]){
        $this->type='GET';
        $this->path='/currencies';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /time
     * */
    public function getTime(array $data=[]){
        $this->type='GET';
        $this->path='/time';
        $this->data=$data;
        return $this->exec();
    }
}
