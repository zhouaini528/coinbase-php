<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Coinbase\Api\CoinbasePro;

use Lin\Coinbase\Request;

class Payment extends Request
{
    /**
     * GET /payment-methods
     * */
    public function getMethods(array $data=[]){
        $this->type='GET';
        $this->path='/payment-methods';
        $this->data=$data;
        return $this->exec();
    }
}
