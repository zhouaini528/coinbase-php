<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Coinbase\Api\CoinbasePro;

use Lin\Coinbase\Request;

class Fees extends Request
{
    /**
     * GET /fees
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/fees';
        $this->data=$data;
        return $this->exec();
    }
}
